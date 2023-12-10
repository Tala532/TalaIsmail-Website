<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location: index.php");
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
       <!-- <div style="float: right; color:white; font-size:35px; margin-top:0px; line-height:21.5px; padding-left:15px;padding-right:5px;">
        <form action = "BackEnd/Logout.php" method = "POST" id="logout-form">
        <input type="button" style="border-radius: 5px; color: black" id="logoutBtn" value ="Logout" onclick ="logout()">
        </form>
        </div>-->
        
    
    <div class="container" style="margin-top: 1%;">
    <div class="grey-sideborder " >
        <img src="../images/talapic.png" alt="profile-photo" height="183px" weight="183px">
        <p class="p1">Contact</p>
        <hr style="border: 2px solid #DCDCDC ;margin-left: 13.5%; ">
        <p class="small-titles">Phone</p>
        <p class="text"><i class="fa fa-phone" style="padding-right: 3%; padding-left: 0%;"></i>+(961) 7898874</p>
        <p class="small-titles">Email</p>
        <p class="text"><i class="fa fa-envelope" style="padding-right: 3%; padding-left: 0%;"></i>tala.ismail01@lau.edu</p>
        <p class="small-titles">Address</p>
        <p class="text"><i class="fa fa-map-marker" style="font-size:1.2em; padding-right: 3%;"></i>Beirut,Hamra Street</p>
        <p class="p1">Education</p>
        <hr style="border: 2px solid #DCDCDC ;margin-left: 13.5%; ">
        <p class="text1">2006-2021</p>
        <p class="small-titles1">Lebanese baccalaureate - LS</p>
        <p class="text2">Al-Mayadine International School</p>
        <p class="text1">2021-2024</p>
        <p class="small-titles1">BS in Computer Science </p>
        <p class="text2">Lebanese American University</p>  
        <p class="p1">Languages</p>
        <hr style="border: 2px solid #DCDCDC ;margin-left: 13.5%; ">
        <p class="small-titles">Arabic</p>
        <p class="text">Native Language</p>
        <p class="small-titles">English</p>
        <p class="text">Bilingual Proficiency (C1);</p>
        <p class="small-titles">French</p>
        <p class="text">Bilingual Proficiency (C1)</p>
        <p class="p1">Interests</p>
        <hr style="border: 2px solid #DCDCDC ;margin-left: 13.5%; ">
        <ul>
        <li class="text3">Tennis</li>
        <li class="text3">Writing songs</li>
        <li class="text3">Reading</li>
    </ul>
    </div>
    <div class="white-container">
        <div class="lightgrey-sideborder">
            <p style="padding-left: 8.3%; padding-top: 3.5%; font-size: 3.2em; color:dimgray; letter-spacing: 2px; margin-bottom: 0%; font-weight: bold; ">TALA ISMAIL</p>
            <p style="padding-left: 8.7%;  color:dimgray; letter-spacing: 2px; margin-top: 0%; font-size: 0.9em; padding-bottom: 3.6%;" >COMPUTER SCIENCE STUDENT</p>
        </div>
        <div style="margin-top: 6.3%;">
        <p class="Title-white">Objective</p>
        <hr style="border: 2px solid #DCDCDC ; margin-left: 8.3%; width: 100% ">
        <p class="paragraph1" style="width: 83.2%;">Being an undergraduate student at the Lebanese American University majoring in computer science
            and interested in exploring software development, and Database Management, securing a Job is
            necessary to further expand my education and experience.</p>
        <p class="Title-white">Projects</p>
        <hr style="border: 2px solid #DCDCDC ; margin-left: 8.3%; width: 100% ">
        <ul>
            <li class="paragraph1" style="font-weight: bold; padding-top: 1.6%; font-size: 1.1em;">Computer Organization Project<p class="paragraph1" style="float: right; margin-right: 9.2% ; font-weight: bold; font-size: 0.8em; margin-top: 0%;">LAU, Fall 2022</p></li>

            <p class="paragraph1" style="width: 83.2%;">The objective of this project is to design a simple RISC processor that can perform basic 
                arithmetic and logical operations, as well as load and store data from/to memory. The 
                processor has 8 registers and a program counter (PC) register. Then as a team, we designed a 
                functional processor that can execute instructions stored in program memory and manipulate 
                data stored in data memory.
                </p>
            <li class="paragraph1" style="font-weight: bold; padding-top: 1.6%; font-size: 1.1em;"><p class="paragraph1" style="float: right; margin-right: 9.2% ; font-weight: bold; font-size: 0.8em; margin-top: 0%;">LAU, Spring 2023</p>Database Management Project</li>

            <p class="paragraph1" style="width: 83.2%;" >The object of this project is to create a car dealership database.it's a database with entities such as cars, buyers, sellers,
                Salespeople, and financing. The relationships between entities include
                Tracking of car sales, financing terms, and salesperson performance. The
                queries range from simple searches for available cars or financing options,
                to more complex queries such as identifying the top-selling car models or
                calculating the total revenue generated by a specific salesperson</p>
            <li class="paragraph1" style="font-weight: bold; padding-top: 1.6%; font-size: 1.1em;"><p class="paragraph1" style="float: right; margin-right: 9.2% ; font-weight: bold; font-size: 0.8em; margin-top: 0%;">LAU, Summer 2023</p>Project for a Web Development Company</li>
                <p class="paragraph1" style="width: 83.2%;" >During my internship, I had the incredible opportunity to craft a website entirely from the ground up for a Web development company, which is yet to be launched. Employing a skillful blend of HTML, CSS, and JavaScript, I designed and developed a dynamic online platform that aligns seamlessly with the company's vision and objectives. This project demanded a profound understanding of web development principles, user experience design, and responsive design techniques.</p>
        </ul>
        <p class="Title-white">Experience</p>
        <hr style="border: 2px solid #DCDCDC ; margin-left: 8.3%; width: 100% ">
        <ul>
            <li class="paragraph1" style="font-size: 1.1em; padding-top: 1.6%; font-weight: bold;"><i class="fa fa-calendar"  style="font-size:1.1em"></i> May 21,2023 - August 15,2023</li>
            <p class="paragraph1" style="margin-top: 0%; margin-bottom: 0%; font-size: 1em;"><i class="fa fa-map-marker" style="font-size:1.6em;margin-left: 0.2%;"></i> WzTechno | Tayouneh, Kanatir Bldg, 6th Floor in Beirut, Lebanon</p>
            <p class="paragraph1" style="font-weight: bold; margin-top: 1%; font-size: 1.1em;margin-bottom: 0; ">Internship at WzTechno</p>
            <p class="paragraph1" style="width: 83.2%; margin-top: 1%;">I completed a training program at WzTechno, a prominent mobile and website development company located in Lebanon.
                Throughout the training period, I exhibited a strong commitment to their professional growth and development. The comprehensive instruction in WordPress development included a wide range of skills, such as creating WordPress themes from scratch using HTML, CSS, and JavaScript, performing online edits, and troubleshooting issues on various websites. I worked with WzTechno for approximately 250 hours during the training program.
            </p> 
        </ul>
        <p class="Title-white">Skills</p>
        <hr style="border: 2px solid #DCDCDC ; margin-left: 8.3%; width: 100% ">
        <ul>
            <li class="paragraph1" style="font-weight: bold; padding-top: 1.6%; font-size: 1.1em;"><i class="fa fa-lightbulb-o" style="font-size: 1.4em; margin-right: 0.5%;"></i>Soft Skills</li>
            <div style="display: inline-flex; position: relative; left: 8.3%; padding-bottom: 1%;"><p class="paragraph2" style="margin-bottom: 0.2%; padding-bottom: 0%;" >Quick Learner</p>
            <p class="paragraph2" style="margin-bottom: 0.2%; padding-bottom: 0%;" >Imagining Alternatives</p>
            <p class="paragraph2" style="margin-bottom: 0.2%; padding-bottom: 0%;" >Time Management</p>
            <p class="paragraph2" style="margin-bottom: 0.2%; padding-bottom: 0%;" >Accepting Responsibility</p>
            <p class="paragraph2" style="margin-bottom: 0.2%; padding-bottom: 0%;" >Team Work</p>
              
        </div>
           <li class="paragraph1" style="font-weight: bold; padding-top: 1.6%; font-size: 1.1em;">
            <i class="fa fa-desktop" style="font-size:1em; margin-right: 0.5%;" ></i>Computer Skills</li>
            <div style="width: 40%; margin-left: 6.2%; ">
            
            <div style="display: inline-flex; ">
            <p class="paragraph1" style="font-weight: bold; margin-bottom: 0%; padding-bottom: 0%; margin-top: 8%;">Java</p>
            <div class="toto" style="margin-left: 12%; margin-bottom: 0%; ">
            <div class="loading-lightgrey" style="margin-bottom: 0%; " >
                <div class="loading-darkgrey" style="width: 90%;">
                  
                </div>
            </div> 
        </div>
         </div>
        
         <div style="display: inline-flex; ">
            <p class="paragraph1" style="font-weight: bold; margin-top: 8%; margin-bottom: 0%;">Python</p>   
            <div class="toto" style="margin-left: 4.3%; margin-bottom: 0px;  ">
            <div class="loading-lightgrey">
                <div class="loading-darkgrey" style="width: 90%;">
                   
                </div>
            </div>
        </div>  
         </div>
         <div style="display: inline-flex; ">
            <p class="paragraph1" style="font-weight: bold; margin-top: 8%; margin-bottom: 0%;">HTML</p>   
            <div class="toto" style="margin-left: 4.3%; margin-bottom: 0%; ">
            <div class="loading-lightgrey" >
                <div class="loading-darkgrey" style="width: 90%;">
                    
                </div>
            </div>
        </div>  
         </div>
         <div style="display: inline-flex; ">
            <p class="paragraph1" style="font-weight: bold; margin-top: 8%; margin-bottom: 0%;">CSS</p>   
            <div class="toto" style="margin-left: 14%; margin-bottom: 0%; ">
            <div class="loading-lightgrey">
                <div class="loading-darkgrey" style="width: 90%;">
                   
                </div>
            </div>
        </div>  
         </div>
         <div style="display: inline-flex; ">
            <p class="paragraph1" style="font-weight: bold; margin-top: 8%; padding-right: 5.5%; margin-bottom: 0%;">SQL</p>   
            <div class="toto" style="margin-left: 7%; margin-bottom: 0%; ">
            <div class="loading-lightgrey">
                <div class="loading-darkgrey" style="width: 70%;">
                    
                </div>
            </div>
        </div>  
         </div>
         <div style="display: inline-flex; ">
            <p class="paragraph1" style="font-weight: bold; margin-top: 8%; padding-right: 12.3%;">C</p>   
            <div class="toto" style="margin-left: 12%; margin-bottom: 0%; ">
            <div class="loading-lightgrey">
                <div class="loading-darkgrey" style="width: 80%;">
                   
                </div>
            </div>
        </div>  
         </div>
        </div>
         
        </div>
        
    </ul>  
    </div>

</div>
<script>
    function logout() {
        console.log("Logout button clicked");
        document.getElementById('logout-form').submit();
    }
</script>
  

</body>
</html>