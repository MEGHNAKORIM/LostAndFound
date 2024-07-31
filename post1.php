<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="post.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img
                src=" favicon.png"
                class="food-munch-logo"
                />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto">
                <a class="nav-link active" id="navItem1" href="#">
                    
                    <span class="sr-only">(current)</span>
                </a>
                <a class="nav-link" href="index.php" id="navItem2">Home</a>
                <a class="nav-link" href="displayitems.php" id="navItem3">Lost and found</a>
                <a class="nav-link" href="post_php.php" id="navItem4">Post an Item</a>
                <a class="nav-link" href="#" id="navItem4">About</a>
                <a class="nav-link" href="#" id="navItem4">Contact us</a>
                </div>
                <button class="btn btn-primary">Login</button>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <h2 class="heaading">Please fill all the required fields</h2>

        <form action="./postitemprocess.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <label for="category">Category</label>
            <select id="category" name="category">
                <!-- PHP code to fetch categories from the database -->
<?php
// Assuming you have already established a database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user-registration';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection to database failed' . $conn->connect_error);
}
// Perform a database query to retrieve categories
$query = "SELECT id, name FROM categories"; // Adjust the query according to your database schema
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch rows from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Output an option element for each category
        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }
} else {
    // Handle the case where the query fails
    echo '<option value="">No categories found</option>';
}

// Close the database connection
mysqli_close($conn);
?>

            </select><br>
    
            <label for="founderName">Founder Name</label>
            <input type="text" id="founderName" name="founderName" required> <br>
    
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required><br>
    
            <label for="contactNumber">Contact #</label>
            <input type="tel" id="contactNumber" name="contactNumber" required><br>
    
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" required></textarea><br>
    
            <label for="imageUpload">Item Image</label>
            <input type="file" id="imageUpload" name="imageUpload" value="upload"><br>
    
            <input type="submit" value="Submit">
        </form>

        <script>
            function validateForm() {
                const fileInput = document.querySelector('input[name="imageUpload"]');
                const file = fileInput.files[0];
                const maxSize = 10 * 1024 * 1024; // 10MB
                const allowedTypes = ['image/jpeg', 'image/png'];
                
                if (!file) {
                    alert("Please select a file to upload.");
                    return false;
                }
                
                if (file.size > maxSize) {
                    alert("File size is too large. Max size is 10MB.");
                    return false;
                }
                
                if (!allowedTypes.includes(file.type)) {
                    alert("File type is not allowed. Only JPG/PNG files are allowed.");
                    return false;
                }
                
                return true;
            }
        </script>

    </div>
</body>
</html>