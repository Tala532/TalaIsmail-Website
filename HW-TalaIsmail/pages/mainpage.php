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
    <link rel="stylesheet" href="cv.css">
    <link rel="stylesheet" href="../css/mStyle.css">
    <link rel="stylesheet" href="../css/icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <h1 style="color: #484848;">About me</h1>
    <p style="font-size: 17px; margin-right: 50%; text-align:justify; color: dimgray;">As a senior computer science student enrolled at the Lebanese American University, I am brimming with ambition, determination, and a strong work ethic. My skill set is diverse, encompassing proficiency in Excel spreadsheets, Microsoft Word, assembly language, and hardware languages like Verilog. I am adept at designing databases and possess substantial expertise in Java, C Language, SQL, HTML, CSS, and JavaScript, allowing for effective application management. My capabilities extend to managing Web Development utilizing tools such as Microsoft SQL Server and Visual Studio. I am actively seeking opportunities within companies focused on full-stack website development.</p>
    <h1 style="color: #484848;">For more info about me</h1>
    <p style="font-size: 17px; margin-right: 50%; text-align:justify; color: dimgray;">you can visit my <a href="cv.php" style="text-decoration: none; font-weight: bold; color: dimgray;">CV</a> </p>
</div>
   

  

</body>
</html>