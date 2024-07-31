<?php
// main/login.php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user-registration';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection to database failed' . $conn->connect_error);
}

$category = $_POST['category'];
$founderName = $_POST['founderName'];
$title = $_POST['title'];
$contactNumber = $_POST['contactNumber'];
$description = $_POST['description'];

$target_dir = "uploads/";
if ($_FILES["imageUpload"]["error"] === UPLOAD_ERR_OK) {
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file);
    $imagePath = $target_file;
} else {
    echo "Error uploading file: " . $_FILES["imageUpload"]["error"];
    exit; // Stop the script if there's an error uploading the file
}


// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO item_list(category_id, fullname, title,description, contact, image_path) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $category1, $founderName1, $title1, $contact1, $description1, $imagePath1);
$category1 = $category;
$founderName1 = $founderName;
$title1 = $title;
$contact1 = $contactNumber; // Corrected variable name
$description1 = $description;
$imagePath1 = $imagePath;

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();

$conn->close();
?>

