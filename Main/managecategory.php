<?php
// Establish database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user-registration';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Connection to database failed: ' . $conn->connect_error);
}

// Check if the form was submitted using POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize it
    $id = $_POST['id'];
    $name = $_POST['name'];
    $status = (int)$_POST['status'];

    // Validate required fields
    if (empty($name)) {
        echo "Name is a required field.";
        exit;
    }

    // Determine whether to update existing record or insert new record
    if (!empty($id)) {
        // Update existing category
        $sql = $conn->prepare("UPDATE category_list SET name = ?, status = ? WHERE id = ?");
        $sql->bind_param("sii", $name, $status, $id);
    } else {
        // Insert new category
        $sql = $conn->prepare("INSERT INTO category_list (name, status) VALUES (?, ?)");
        $sql->bind_param("si", $name, $status);
    }

    // Execute the SQL query and check for errors
    if ($sql->execute()) {
        echo "<script>
                alert('Category saved successfully.');
                window.location.href = 'categories_list.php';
              </script>";
    } else {
        echo "Error saving category: " . $sql->error;
    }

    // Close the prepared statement
    $sql->close();
}

// Close the database connection
$conn->close();
?>
