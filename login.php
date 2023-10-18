
<?php

@include'config.php';
session_start();
if(isset($_POST['submit'])){
    $username=($_POST['username']);
    $email=($_POST['email']);
    $password=($_POST['password']);
    
    $result= mysqli_query($conn, "SELECT * FROM users WHERE username='$username' && email='$email' ");
    $row= mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result)>0){
       
        if($password==$row['password']){

            $_SESSION['login']=true;
            $_SESSION['id']=$row['id'];
            // echo "<script>alert('Login successful');</script>";
            header('location: index1.php');

            
            

        }else{
            echo "<script>alert('Wrong Password');</script>";
        }

    }else{
        echo "<script>alert('User not registered');</script>";

    }
  


}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>e-waste Login</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
    </head>


    <body>

        <header class="header">
            <input type="checkbox" id="check">
            <label for="check" class="icons">
                <i class='bx bx-menu' id="menu-icon"></i>
                <i class='bx bx-x' id="close-icon"></i>
            </label>
            <button class="btnLogin-popup"> <a href="register.php">Register</a></button>
            <nav class="navigation">
                <a href="#" style="--i:0;">Blogs</a>
                <a href="#" style="--i:1;">Upload</a>
                <a href="#" style="--i:2;">E-waste Facility</a>
                <a href="#" style="--i:3;">Rewards</a>
                <a href="#" style="--i:4;">Contact us</a>
                

            </nav>
        </header>
        


        <div class>
            <div class="form-box register">
                <h2>Login Now</h2>

                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo'<span class="error-msg">'.$error. '</span>';
                    };
                };
                
                
                ?>
                
                <form method="POST" action="">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                        <input type="text"  name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-open"></ion-icon></span>
                        <input type="email" name="email"required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <!-- <div class="remember-forgot">
                        <label><input type ="checkbox">Remember me</label>
                        <a href="#">Forgot Password</a> -->
                    <!-- </div> -->
                    <button type="submit" name ="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="register.php">Registration</a></p>
                    </div>

                

                </form>
            

            </div>
        </div>
                
        

               
        

        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>

