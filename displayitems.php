<?php

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .background{ font: 14px sans-serif; text-align: center;background-color:#E2EAF4;
  background-size: cover;
}
  .card-body{
    background-color:white;
    color:black;
    border-radius:10px;
    width:250px;

  }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
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
              <a class="nav-link active" id="navItem1" href="#">
                
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
    <div class="background">
        <div class="container  ">
        <div class="row">
        <?php
            // Assuming you have already established a database connection
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'user-registration';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Define your SQL query to fetch all items from the item_list table
            $sql = "SELECT * FROM item_list";

            // Execute the query
            $result = $conn->query($sql);

            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                // Loop through each row and display item details in a card
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-4 m-3">
                        <div class="card "style="width:250px">
                            <img class="card-img-top" style="height:250px;width:250px" src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['title']; ?>">
                            <div class="card-body ">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-text"><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No items found.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
