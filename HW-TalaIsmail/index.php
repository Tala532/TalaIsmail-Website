<?php 
session_start();
session_unset();
session_destroy();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tala's website</title>
    <link rel="stylesheet" href="cv.css">
    <link rel="stylesheet" href="../css/mStyle.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="background-color:#E8E8E8">
<div class="row center-content" id="header">
        <div id="dropdown-menu">
            <span><i style="margin-top: 13px;"  class="ico burger-ico"  ></i></span>
            
            <div class="dropdown-content">
                <ul>
                    <a href="pages/mainpage.php">
                        <li><i class="ico ico-l homee-ico"></i> <p style="padding-left: 5px; display: inline;">Home</p> </li>
                    </a>
                    
                    <a href="pages/cv.php">
                        <li><i class="ico ico-l user-ico"></i> <p style="padding-left: 5px; display: inline;">My CV</p> </li>
                    </a>
                    <a href="pages/page2.php">
                        <li><i class="ico ico-l wallet-ico"></i><p style="padding-left: 5px; display: inline;">Contact me</p></li>
                    </a>
                    <a href="pages/page3.php">
                        <li><i class="ico ico-l gallery-ico"></i><p style="padding-left: 5px; display: inline;">Gallery</p></li>
                    </a>
                </ul>
            </div>
           
        </div>
    </div>

    

    <div id="content" style="padding-left: 150px; padding-right: 150px;margin-top: 100px; ">


        <section id="work" style="text-align: center;">
            <div class="work">
                <h1 id="header_1" style="text-align: center; color:#505050; font-size:35px">
                    Welcome to my personal portfolio!
                </h1>
             
                <div class="inn" >
                    <form action = "BackEnd/Login.php" method = "POST" id="login-form">
                    <br>
                    <label id="user" for="user" style="color:#505050; font-size:24px;"> <b>Username</b></label>
                    <br>
                    <input style ="border-radius: 10px; border:solid 3px #505050;padding: 12px;font-size:large" type="text" placeholder=" Enter Username" name="username" required>
                    <br><br>
                    <label style="margin: 10px;  color:#505050; font-size:24px;" id="password" for="password"> <b>Password</b></label>
                    <br>
                    <input style ="border-radius:  10px; border: solid 3px #505050;padding: 12px;font-size:large" id="pass" type="password" placeholder=" Enter Password" name="password" required>
                    <br><br>
                    <input type="button" style="border-radius: 10px; color: black; font-size:23px;" id="loginBtn" value ="Login" onclick ="login()">
                    <br>
                    <p style = "color:#505050; font-weight:bold;font-size:20px"> Don't have an account? <a style="color:red;text-decoration:none " href="pages/SignUp.html">Sign Up</a></p>
                </div>
        
        
        </section>
    </div>


    <script>
    function login(){
        var un=document.getElementById("user").value;
        var pass=document.getElementById("pass").value;
        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("user").value="";
        document.getElementById("pass").value="";
    }
</script>
</body>
</html>
