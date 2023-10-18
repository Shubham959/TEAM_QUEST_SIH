

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Contact Us</title>
        
    </head>
    <body>

        
        <header class="header">
            <input type="checkbox" id="check">
            <label for="check" class="icons">
                <i class='bx bx-menu' id="menu-icon"></i>
                <i class='bx bx-x' id="close-icon"></i>
            </label>
            <button class="btnLogin-popup"> <a href="index1.php">Home</a></button>
            <nav class="navigation">
                <a href="blogs.php" style="--i:0;">Blogs</a>
                <a href="upload.php" style="--i:1;">Upload</a>
                <a href="ewaste.php" style="--i:2;">E-waste Facility</a>
                <a href="reward.php" style="--i:3;">Rewards</a>
                <a href="contact.php" style="--i:4;">Contact us</a>
                

            </nav>
        </header>

        <div class="contact">
            <form action="">
                <div class="item">
                    <div class="contacts">
                        <div class="first-text">Feel Free To Text</div>
                        <img src="contact-removebg-preview.png" alt="" class="image">
                        <div class="social-link">
                            <span class="send-text">Connect with us</span>
                            <ul class="social-media">
                                <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook-circle'></i></a></li>
                                <li><a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class='bx bxl-youtube'></i></a></li>
                                <li><a href="https://in.linkedin.com/"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="submit-form">
                        <h4 class="third-text">Contact Us</h4>

                        <div class="input-box1">
                            <input type="text" id="name" class="input1" required>
                            <label for="">Name</label>
                        </div>
                        <div class="input-box1">
                            <input type="email" id="email" class="input1" required>
                            <label for="">Email</label>
                        </div>
                        <div class="input-box1">
                            <input type="tel" id="phone" class="input1" required>
                            <label for="">Phone</label>
                        </div>
                        <div class="input-box1">
                            <textarea name="" class="input1" required id="message" cols="30" rows="10"></textarea>
                            <label for="">Message</label>
                        </div>
                        <input type="submit" class="btn1" value="Submit" onclick="Send()">
            
                    </div>
                    
                    
                </div>
            </form>
        </div>


        <script src=" https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function Send(){
                
                Email.send({

                    

                
                    secureToken:"9390d9d8-4e4d-4d40-9516-ceb9de678558",
                    Host:"smtp.gmail.com",
                    Username: "shubhambsf420@gmail.com",
                    Password:"E015D2F0634A8527C6A1C6F31A91E7633853",

                    To : 'shubhambsf098@gmail.com',
                    From : document.getElementById("email").value,
                    Subject : "New Contact From Enquiry",
                    Body : "Name: " + document.getElementById("name").value
                        +"<br> Email: " + document.getElementById("email").value
                        +"<br> Phone: "+ document.getElementById("phone").value
                        +"<br> Message: " + document.getElementById("message").value
                }).then(
                    message => alert("Message sent succcessful")
                );
            }
        </script>
    </body>
</html>

