<?php
session_start();
@include'config.php';
if(!empty($_SESSION['id'])){
    $id=$_SESSION['id'];
    $result=mysqli_query($conn, "SELECT *FROM users WHERE id=$id");
    
    $row=mysqli_fetch_array($result);
}
else{
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Home</title>
        
    </head>
    <body>
        <div class="container">
            <div class="wraper">
                <div class="wraper-holder">
                    <div id="slider-img-1"></div>
                    <div id="slider-img-2"></div>
                    <div id="slider-img-3"></div>
                    <div id="slider-img-4"></div>
                </div>
            </div>
            <div class="button-holder">
                <a href="#slider-img-1" class="button"></a>
                <a href="#slider-img-2" class="button"></a>
                <a href="#slider-img-3" class="button"></a>
                <a href="#slider-img-4" class="button"></a>
            </div>
        </div>
       

        
        <header class="header">
            <input type="checkbox" id="check">
            <label for="check" class="icons">
                <i class='bx bx-menu' id="menu-icon"></i>
                <i class='bx bx-x' id="close-icon"></i>
            </label>
            <h1>Welcome <?php echo $row['username']; ?></h1>
            <nav class="navigation">
                <a href="blogs.php" style="--i:0;">Blogs</a>
                <a href="upload.php" style="--i:1;">Upload</a>
                <a href="ewaste.php" style="--i:2;">E-waste Facility</a>
                <a href="reward.php" style="--i:3;">Rewards</a>
                <a href="contact.php" style="--i:4;">Contact us</a>         
            </nav>

            
        </header>

       
    

    </body>
</html>

