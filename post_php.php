
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .background{ font: 14px sans-serif; text-align: center;background-color: white;
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
    <div>
       
<div class="background">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 text-center" style="margin-top:150px ">
    <h2 class="heading p-3">Please fill all the required fields</h2>
        <div class="pl-5"><form class="p-3 text-left" action="./postitemprocess.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <label for="category">Category</label>
            <select id="category" name="category">
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
              $query = "SELECT  name FROM category_list"; // Adjust the query according to your database schema
              $result = mysqli_query($conn, $query);
              
              // Check if the query was successful
              if ($result) {
                // Fetch rows from the result set
                while ($row = mysqli_fetch_assoc($result)) {
                    // Output an option element for each category
                    echo '<option >' . $row['name'] . '</option>';
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
            </div>
            </div>
            <div class="col-12 col-md-7">
                <img style="height:800px ;width:800px ;margin-top:-50x;"src="https://img.freepik.com/free-vector/video-upload-concept-illustration_114360-4612.jpg?t=st=1713097789~exp=1713101389~hmac=197dd8d6a96ad306cf29ecce45ff2764c002f8bdcb649de24d4f70058659bbc5&w=900"/>
            </div>
</div>
            </div>
            </div>
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