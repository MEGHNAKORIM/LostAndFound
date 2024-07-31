<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user-registration';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection to database failed' . $conn->connect_error);
}

// Check if category name is received from the form
if(isset($_POST['category'])) {
    $categoryName = $_POST['category'];

    // Get the category_id and status from the category_list table based on the provided category name
    $getCategoryInfoQuery = "SELECT id, status FROM category_list WHERE name = ?";
    $stmt = $conn->prepare($getCategoryInfoQuery);
    $stmt->bind_param("s", $categoryName);
    
    // Execute the prepared statement
    if($stmt->execute()) {
        $result = $stmt->get_result();
        
        // Check if a category with the provided name exists
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $categoryId = $row['id'];

            // Process other form data
            $founderName = $_POST['founderName'];
            $title = $_POST['title'];
            $contactNumber = $_POST['contactNumber'];
            $description = $_POST['description'];

            // Check if the "imageUpload" key exists in the $_FILES array
            if (isset($_FILES['imageUpload'])) {
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);

                if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
                    $imagePath = $target_file;
                } else {
                    // Handle the case where file upload failed (optional)
                    $imagePath = null;
                }
            } else {
                // Handle the case where "imageUpload" is not set (optional)
                $imagePath = null;
            }

             // Prepare and execute the SQL query to insert data into item_list table
             $stmtInsert = $conn->prepare("INSERT INTO item_list(category_id, fullname, title, description, contact, image_path) VALUES (?, ?, ?, ?, ?, ?)");
             $stmtInsert->bind_param("isssss", $categoryId, $founderName, $title, $description, $contactNumber, $imagePath);
             if ($stmtInsert->execute()) {
                echo "<script> 
                        alert('Data inserted successfully.');
                        function onClickFunction() {
                            window.location.href = 'item1_add.php';
                        }
                        onClickFunction(); // Call the function immediately after displaying the alert
                      </script>";
            }
             else {
                echo "Error inserting data: " . $stmtInsert->error;
            }

            $stmtInsert->close();
        } else {
            echo "Category not found.";
        }
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Category name not received from the form.";
}

$conn->close();
?>
