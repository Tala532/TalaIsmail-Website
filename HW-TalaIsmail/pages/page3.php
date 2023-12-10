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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
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
        
    </div>
    <div id="content" style="padding-left: 10px;  margin-top:10px">


    <section id="gallery">
    <?php
    $jsonfile = '../js/Gallery.json';
    $jsonimg = file_get_contents($jsonfile);
    $jsonData = json_decode($jsonimg, true);
    $images = $jsonData['images'];
    ?>

<div class="gallery" >
    <div class="img-frame">
        <a href="img1.html"> <!-- Link to img1.html -->
            <img src="<?php echo $images[0]['url']; ?>" alt="<?php echo $images[0]['alt']; ?>" class="my-img" tabindex="0">
        </a>
    </div>
    <div class="img-frame">
        <a href="img2.html"> <!-- Link to img2.html -->
            <img src="<?php echo $images[1]['url']; ?>" alt="<?php echo $images[1]['alt']; ?>" class="my-img" tabindex="0">
        </a>
    </div>
    <div class="img-frame">
        <a href="img3.html"> <!-- Link to img3.html -->
            <img src="<?php echo $images[2]['url']; ?>" alt="<?php echo $images[2]['alt']; ?>" class="my-img" tabindex="0">
        </a>
    </div>
</div>
</section>

</div>


  

</body>
</html>