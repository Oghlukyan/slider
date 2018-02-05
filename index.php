<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css"/>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <div id="sliderID">
            <div class="left" onclick="changePicture(false)"><img src="images/left.png"></div>
            <div class="sliderImageContainer"><img id="sliderImageID"/></div>
            <div class="right" onclick="changePicture(true)"><img src="images/right.png"></div>
        </div>
        <?php include ('main.php'); ?>
    </body>
</html>