<?php

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        

#navItem1 {
    color: #323f4b;
    font-family: "Roboto";
}

#navItem2 {
    color: #323f4b;
    font-family: "Roboto";
}

#navItem3 {
    color: #323f4b;
    font-family: "Roboto";
}

#navItem4 {
    color: #323f4b;
    font-family: "Roboto";
}

.img1 {
    width: 500px;
    height: 500px;
}

.banner-heading {
    color: #183b56;
    font-family: "Roboto";
    font-size: 43px;
    font-weight: 700;
    margin-top: 200px;
}

.banner-caption {
    color: #183b56;
    font-family: "Roboto";
    font-size: 24px;
    font-weight: 300;
}

.custom-button {
    color: white;
    background-color: #017DFD;
    width: 130px;
    height: 45px;
    border-width: 0;
    border-radius: 8px;
    margin-right: 10px;
}

.custom-outline-button {
    color: #017DFD;
    background-color: transparent;
    width: 130px;
    height: 45px;
    border-style: solid;
    border-width: 1px;
    border-color: #017DFD;
    border-radius: 8px;
}

.img2 {
    width: 500px;
    height: 500px;
    border-radius: 230px;
}

.img3 {
    width: 300px;
    height: 300px;
    margin-right: 40px;
    border-radius: 100px;
}

.img4 {
    width: 250px;
    height: 250px;
    margin-left: 150px;
    border-radius: 100px;
}

.rli-section-1 {
    background-color: #f9fbfe;
}

.rli-section-2 {
    background-color: white;
}

.rli-section-heading {
    color: #183b56;
    font-family: "Roboto";
    font-size: 45px;
    font-weight: 700;
    margin-top: 150px;
}

.rli-section-description {
    color: #5a7184;
    font-family: "Roboto";
    font-size: 25px;
}

.rli-card {
    text-align: center;
    background-color: white;
    border-style: solid;
    border-width: 1px;
    border-color: #e5eaf4;
    border-radius: 16px;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light " >
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
              <a style="color:black" class="nav-link" href="s/login.php" id="navItem4">login</a>
            </div>
          </div>
    </nav>
      
      <div class="background d-flex flex-column justify-content-center" >
      <div class="text-center row" style="color:black;background-color:transparent ;" >
         
        <div class="col-12 col-md-5">
            <img src="https://img.freepik.com/free-vector/detective-following-footprints-concept-illustration_114360-21835.jpg?size=626&ext=jpg&ga=GA1.2.1249509238.1703825738&semt=ais" class="img1" />
        </div>
        <div class="col-12 col-md-7 text-center">
            <h1 class="banner-heading mb-3">Lost & Found Information System</h1>
            <p class="banner-caption mb-4">Lost It . List It . Found It</p>
            <a href="displayitems.php"><button class="custom-button" >View Items</button></a>
            
        </div>
    </div>
    <div class="rli-section-1 pt-5 pb-5" id="rli-1">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-row">
                    <div class="col-6 order-2">
                        <img src="https://img.freepik.com/free-vector/digital-packaging-concept-illustration_114360-7650.jpg?t=st=1713085724~exp=1713089324~hmac=2e9032ba4865e5c778b8dde3076013d4696780a4601432c2279756363ce83e32&w=740" class="img2 mr-3" />
                    </div>
                    <div class="col-6 order-1">
                        <h1 class="rli-section-heading">Reporting Lost Items</h1>
                        <p class="rli-section-description">
                            If you've lost an item, please report it to our Lost and Found department as soon as possible. Provide detailed information about the lost item, including its description, where and when it was lost, and any unique identifying features.
                        </p>
                        <a href="post_php.php"><button class="custom-button" >Report Item</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rli-section-2 pt-5 pb-5" id="rli-2">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-row">
                    <div class="col-5">
                        <img src="https://img.freepik.com/free-vector/chat-concept-illustration_114360-87.jpg?w=740&t=st=1713085914~exp=1713086514~hmac=23bf2cd1bad487446bdcb542916089183692ff5e473e40a10fea9cabdac4ef73" class="img3 " />
                        <img src="https://img.freepik.com/free-vector/online-groceries-concept-illustration_114360-1834.jpg?t=st=1713090194~exp=1713093794~hmac=58f9e0db0a9bb1eda4e447175a85d37f5a9eb280e6f79401b49ea6fcd6506bc8&w=740" class="img4" />
                    </div>
                    <div class="col-7">
                        <h1 class="rli-section-heading">Retrieving Lost Items</h1>
                        <p class="rli-section-description">
                            If your lost item is found and turned in to our Lost and Found department, you can retrieve it by providing proof of ownership. This may include describing specific features of the item, providing a photo of the item, or presenting a receipt or other documentation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rli-section-1 pt-5 pb-5" id="sp">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-row">
                    <div class="col-6 order-2">
                        <img src="https://img.freepik.com/free-vector/cloud-sync-concept-illustration_114360-537.jpg?t=st=1713091727~exp=1713095327~hmac=deafac6f5401ab8a0d9fcf7d78364f897e105c8fa5e6f6ca0c62dbb062812921&w=740" class="img2 mr-3" />
                    </div>
                    <div class="col-6 order-1">
                        <h1 class="rli-section-heading">Storage Period</h1>
                        <p class="rli-section-description">
                            Found items are typically held in our Lost and Found department for a specified period of time, after which unclaimed items may be disposed of or donated to charity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rli-section-2 pt-5 pb-5" id="ps">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-row">
                    <div class="col-5">
                        <img src="https://img.freepik.com/free-vector/hand-drawn-vpn-illustration_23-2149229495.jpg?t=st=1713092330~exp=1713095930~hmac=87bbc40fc9832fe092c16876fd9c8cfc738d54f2f99dbebc8b47472019ab0441&w=740" class="img2 " />
                    </div>
                    <div class="col-7 ml-4">
                        <h1 class="rli-section-heading">Privacy & Security</h1>
                        <p class="rli-section-description">
                            We take privacy and security seriously. Personal information provided in connection with lost item reports or claims is kept confidential and used only for the purpose of reuniting lost items with their owners.
                        </p>
                        <a href="contactus.php"><button class="custom-button" >Contact Us</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
      </div>
</body>
</html>