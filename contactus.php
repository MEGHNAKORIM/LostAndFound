<?php

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .background{ font: 14px sans-serif; text-align: center;background-color:#E2EAF4;
  background-size: cover;
  height:90vh; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:10vh">
      <a class="navbar-brand" href="#">
      <img
          src=" favicon.png"
          class="navbar-image"
          alt=""
          style="height:40px;width:40px; border-radius:10px"
        />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav m-auto">
              <a class="nav-link active" id="navItem1" href="index.php">
                
                <span class="sr-only">(current)</span>
              </a>
              <a style="color:black"class="nav-link" href="index.php" id="navItem2">Home</a>
              <a style="color:black" class="nav-link" href="displayitems.php" id="navItem3">Lost and found</a>
              <a style="color:black" class="nav-link" href="post_php.php" id="navItem4">Post an Item</a>
              <a style="color:black"  class="nav-link" href="contactus.php" id="navItem4">Contact us</a>
              <a style="color:black" class="nav-link" href="main/login.php" id="navItem4">login</a>
            </div>
          </div>
    </nav>
    <div style="background-color:white;">
<div class="container">
  <div class="row">
      
        <?php
// Establish database connection
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user-registration';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection to database failed' . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and execute SQL query to insert inquiry data into the database
    $stmt = $conn->prepare("INSERT INTO inquiry_list (fullname, contact, email, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullname, $contact, $email, $message);
    
    if ($stmt->execute()) {
        echo "<script> 
        alert('inquiry added successfully We will get back soon.');
        function onClickFunction() {
            window.location.href = 'contactus.php
    
  </footer>';
        }
        onClickFunction(); // Call the function immediately after displaying the alert
      </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<div class="col-12 col-md-6">
  <img src="img-c.png"/>
</div>
<div class="col-12 col-md-6 text-center">
    <h2>Add Inquiry</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="fullname">Full Name:</label><br>
        <input type="text" id="fullname" name="fullname" required><br>
        
        <label for="contact">Contact:</label><br>
        <input type="text" id="contact" name="contact" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>
        
        <input type="submit" value="Submit">
    </form>
</div>

    
    <div class="col-12 col-md-6">
      <h1 class="p-3 m-3">Contact the admins at</h2>
    <div class="p-3">
    <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "user-registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and display submitted data
$sql = "SELECT * FROM contact_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Message</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["message"].  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No data available";
}

// Close connection
$conn->close();
?>
</div>
</div>
<div class="col-12 col-md-6">
  <img src="img-i.png"/>
</div>
</div>
</div>
      </div>
</div>
      </body>
</html>