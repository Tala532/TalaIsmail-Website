<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tala's website</title>
    <link rel="stylesheet" href="../css/mStyle.css">
        <link rel="stylesheet" href="../css/icons.css">
        <link rel="stylesheet" href="cv.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       
       #userDiv {
           font-family: 'Times New Roman', Times, serif;
           font-size: 35px;
           color: white;
           display: flex;
           align-items: center;
           margin-top: 10px;
       
       }

       #userDiv span {
           margin-left: 10px; 
       }

       #logOut {
           color: dimgray;
           text-decoration: none;
           background-color: grey;
           margin-left: 10px;
          font-size: 30px;
           border-radius: 7px;
           color: red;
           font-weight: bold;
           
       }

       #logOut:hover {
          
           transform: scale(1.05   ); 
       }
   </style>
</head>
<body>
    
    <div class="row center-content" id="header">
        <div id="dropdown-menu">
            <span><i style="margin-top: 13px;"  class="ico burger-ico"  ></i></span>
           
            <div class="dropdown-content">
                <ul>
                    <a href="mainpage.php">
                        <li><i class="ico ico-l homee-ico"></i> <p style="padding-left: 5px; display: inline;">Home</p> </li>
                    </a>
                    <a href="cv.php">
                        <li><i class="ico ico-l user-ico"></i> <p style="padding-left: 5px; display: inline;">My CV</p> </li>
                    </a>
                    <a href="page2.php">
                        <li><i class="ico ico-l wallet-ico"></i><p style="padding-left: 5px; display: inline;">Contact me</p></li>
                    </a>
                    <a href="page3.php">
                        <li><i class="ico ico-l gallery-ico"></i><p style="padding-left: 5px; display: inline;">Gallery</p></li>
                    </a>
                </ul>
            </div>
            
        </div>
        <div style="float: right; color: white; font-size: 35px;">
            <?php
            if (isset($_SESSION["username"])) {
                echo '<div id ="userDiv">Welcome, ' . $_SESSION["fullname"] ;
                echo '<br><a href="/BackEnd/Logout.php" id="logOut">Logout</a></div>';
            }
            ?>
        </div>
       
    </div>
    
   <div class="cont" style="margin-left: 30px;">
    <h1 style="color:#484848;">Contact me</h1>
    <ul>
        <li style="color: dimgray;"> <h3 style="color: #505050; font-weight: bold;">Phone Number:</h3>
            <p style="color: dimgray;"  >+(961) 81090128</p></li>
            <li style="color: dimgray;"><h3 style="color: #505050; font-weight: bold;">Gmail</h3>
                <p ><a href="#" style="text-decoration: none; color:dimgray ;">ismailtala826@gmail.com</a></p></li>
            <li style="color: dimgray;"> <h3 style="color: #505050; font-weight: bold;">Outlook</h3>
                <p ><a href="#" style="text-decoration: none; color:dimgray ;">tala.ismail01@lau.edu</a></p></li> 
    </ul>
    <p style="color: #505050; margin-left: 30px; font-weight: bold;">Or via message on:</p>
    
  


<div style="margin-left: 30px;">
<a href="https://www.facebook.com/tala.ismail11?mibextid=ZbWKwL" class="fa fa-facebook"></a>
<a href="https://instagram.com/talaismaiill?igshid=dnllZzh4bXNmYXU=" class="fa fa-instagram"></a>
<a href="www.linkedin.com/in/
tala-ismail-4212a5216
" class="fa fa-linkedin"></a>

</div>



   </div>
   

  

</body>
</html>