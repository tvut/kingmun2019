<?php
$depth = 1;
$navdark = false;
$title = "Resources";
$desc = "Important documents for KINGMUN!"
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
        <h1 style="color:white" class="rellax" data-rellax-speed="-2" data-aos="fade-up">Resources</h1>
    </div>
</div>
<div class="container">
    <h3 data-aos="fade-up">Welcome to the KINGMUN resources page. Here you will find all of the important documents regarding KINGMUN.</h3>
</div>
<div style="background-color: var(--dark-green)">
    <div class="container">
        <div style="width:50%;height:10px;background-color: white;margin-bottom:20px;max-width: 75px"></div>
        <h1 style="color:white">Conference Information</h1>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="../handbook.pdf">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Delegate Handbook
                &#8594;</h2></a>
    </div>
</div>
<div style="background-color: var(--main-purple)">
    <div class="container">
        <div style="width:50%;height:10px;background-color: white;margin-bottom:20px;max-width: 75px"></div>
        <h1 style="color:white">Committee Information</h1>
        <h2 style="color:white">Committee ROP</h2>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="../committees/treaty/rop.pdf">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Treaty
                &#8594;</h2></a>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="../committees/cabinet/rop.pdf">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Cabinet
                &#8594;</h2></a>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="../committees/ictr/rop.pdf">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">ICTR
                &#8594;</h2></a>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="../committees/treaty/rop.pdf">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Treaty
                &#8594;</h2></a>
    </div>
</div>
<?php include '../include/footer.php'; ?>
</body>
</html>