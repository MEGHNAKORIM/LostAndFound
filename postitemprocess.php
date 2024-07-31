<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user-registration';

// Establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die('Connection to database failed: ' . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract and sanitize form data
    $categoryName = $_POST['category'] ?? '';
    $founderName = $_POST['founderName'] ?? '';
    $title = $_POST['title'] ?? '';
    $contactNumber = $_POST['contactNumber'] ?? '';
    $description = $_POST['description'] ?? '';

    // Validate the form data
    if (empty($categoryName) || empty($founderName) || empty($title) || empty($contactNumber) || empty($description)) {
        echo "All fields are required.";
        exit;
    }

    // Get the category_id from category_list table based on the provided category name
    $stmt = $conn->prepare("SELECT id FROM category_list WHERE name = ?");
    $stmt->bind_param("s", $categoryName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "Category not found.";
        exit;
    }

    $row = $result->fetch_assoc();
    $categoryId = $row['id'];

    // Handle file upload
    $target_dir = "uploads/";
    $imagePath = null;

    if (isset($_FILES['imageUpload']) && $_FILES['imageUpload']['error'] === UPLOAD_ERR_OK) {
        $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);

        if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
            $imagePath = $target_file;
        } else {
            echo "Error uploading file.";
            exit;
        }
    }

    // Prepare and execute the SQL query to insert data into item_list table
    $stmt = $conn->prepare("INSERT INTO item_list (category_id, fullname, title, description, contact, image_path) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $categoryId, $founderName, $title, $description, $contactNumber, $imagePath);

    if ($stmt->execute()) {
        echo "<script>alert('Data inserted successfully.'); window.location.href = 'post_php.php';</script>";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
