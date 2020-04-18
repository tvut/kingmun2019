<?php
$depth = 1;
$title = "Media";
$desc = "Photos and videos from the conference."
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include '../include/head.php'; ?>
    <meta property="og:url" content="<?php echo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $desc ?>">
    <meta property="og:title" content="<?php echo $title ?>"/>
    <meta property="og:description" content="<?php echo $desc ?>"/>
    <title><?php echo $title ?></title>
</head>
<body>
<?php include '../include/nav.php'; ?>
<div id="particles-js" style="top: 0;background-image: url(bg.jpg)"></div>
<div class="flex container fullnav">
    <div style="width:100%">
        <h1 style="color:white" class="rellax" data-rellax-speed="-2" data-aos="fade-up">Media</h1>
        <h2 style="color:white" class="rellax" data-rellax-speed="-2.5" data-aos="fade-up">Photos and Videos</h2>
    </div>
</div>
<div class="container">
    <div class="container">
        <h1>Secretariat Members</h1>
        <div style="width:50%;height:10px;background-color: var(--main-green);margin-bottom:20px;max-width: 75px"></div>
        <h3>Suma Kandikonda and Tristan Stevens</h3>
        <a href="../about#p">
            <div class="row">
                <div class="col">
                    <img style="width:100%" src="suma.jpg"/>
                </div>
                <div class="col">
                    <img style="width:100%" src="tristan.jpg"/>
                </div>
            </div>
        </a>
    </div>
</div>
<div style="background-color: var(--dark-green)">
    <div class="container">
            <h1 style="color:white">Media Team</h1>
            <div style="width:50%;height:10px;background-color: white;margin-bottom:20px;max-width: 75px"></div>
            <h3 style="color:white">Lisa Sun, Mohammed Suhail Shammer, Sean Lindsey, Shaaz Charania, and Violette Tran</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col" style="padding: 0">
        <img src="../media/media1.jpg" style="width:100%">
    </div>
    <div class="col" style="padding: 0">
        <img src="../media/media2.jpg" style="width:100%">
    </div>
    <div class="col" style="padding: 0">
        <img src="../media/media3.jpg" style="width:100%">
    </div>
</div>
<?php include '../include/footer.php'; ?>
</body>
</html>