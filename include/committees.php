<?php
$navdark = false;
$depth = 2;
if($ct=="s")$type="Specialized and Crisis Committee";
else if($ct=="i")$type="Intergovernmental Organization";
else $type="United Nations"
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include '../../include/head.php'; ?>
    <meta property="og:url" content="<?php echo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $shortdesc ?>">
    <meta property="og:title" content="<?php echo strtoupper($committeeshort) ?>"/>
    <meta property="og:description" content="<?php echo $shortdesc ?>"/>
    <title><?php echo strtoupper($committeeshort) ?></title>
    <style type="text/css">
        @media only screen and (max-device-width: 600px) {
            #mobilehack{
                background-attachment: scroll !important;
            }
        }
    </style>
</head>
<body>
<?php include '../../include/nav.php'; ?>
<div style="background-color: var(--lightest-purple);width:100vw;height:100vh;position: absolute;top:0;left:0;z-index:-999"></div>
<img src="logo.png" class="bgimgcom "/>
<div class="flex container fullnav">
    <div style="width:100%">
        <h1 style="color:white" class="rellax" data-rellax-speed="-2" data-aos="fade-up"><?php echo strtoupper($committee) ?></h1>
        <h5 style="color:white;opacity: .6" class="rellax" data-rellax-speed="-2.25" data-aos="fade-up"><?php echo strtoupper($type) ?></h5>
        <h4 data-aos="fade-up" class="rellax" data-rellax-speed="-2.5"><a style="color:white;opacity: .7" href="mailto:<?php echo ($committeeshort) ?>@kingmun.org"><?php echo ($committeeshort) ?>@kingmun.org</a></h4>
    </div>
</div>
<div class="container">
    <h1 data-aos="fade-up" data-aos-duration="500" style="font-size: 18px">About</h1>
    <h1 data-aos="fade-up" data-aos-duration="700"><?php echo strtoupper($committeeshort) ?></h1>
    <h3 data-aos="fade-up" data-aos-duration="1000"><?php echo $description ?></h3>
    <?php if($bg) echo '<a class="applybuttonsmall" style="border-color: var(--light-green);" data-aos="fade-up" data-aos-duration="1200" href="bg.pdf" download="'.strtoupper($committee).'-Background Guide.pdf"><h2
                        style="display: inline-block;text-align: center; font-size: 18px;">Background Guide
                    &#8594;</h2></a>';
    if($committeeshort=="treaty"||$committeeshort=="cabinet"||$committeeshort=="hjcc"||$committeeshort=="ictr") echo '<a class="applybuttonsmall" style="border-color: var(--light-green);" data-aos="fade-up" data-aos-duration="1200" href="rop.pdf" download="'.strtoupper($committee).'-ROP.pdf"><h2
                        style="display: inline-block;text-align: center; font-size: 18px;">Rules of Procedure
                    &#8594;</h2></a>';
    ?>
</div>
<?php if($topic1 == ""){
    echo("<!-- no topics posted -->");
}
else if ($topic2 == "") {
    echo('<div id="mobilehack" style="background-size:cover;background-image: url(a.jpg);background-position: center center;background-attachment: fixed;">
                    <div class="flex" style="height:100vh;padding-left: 30px;padding-right: 30px">
                        <div style="width:100%">
                            <div class="container" style="width:100%;text-align: left;">
                                <h1 style="font-size:20px;color:white" data-aos="fade-up" data-aos-duration="500">Topic</h1>
                                <h2 data-aos="fade-up" data-aos-duration="700" style="color:white">'.$topic1.'</h2>');
    echo('
                            </div>
                        </div>
                </div>
            </div>');
} else {
    echo('<div id="mobilehack" style="background-size:cover;background-image: url(a.jpg);background-position: center center;background-attachment: fixed;">
                    <div class="flex" style="height:100vh;padding-left: 30px;padding-right: 30px">
                        <div style="width:100%">
                            <div class="container" style="width:100%;text-align: right;">
                                <h1 style="font-size:20px;color:white" data-aos="fade-up" data-aos-duration="500">');if(($committeeshort=="ictr"))echo("Case");else if(!($committeeshort=="hjcc"))echo("Topic A");else echo("Bloc 1");echo('</h1>
                                <h2 data-aos="fade-up" data-aos-duration="700" style="color:white">'.$topic1.'</h2>');
    echo('
                            </div>
                        </div>
                </div>
            </div>');
    echo('<div id="mobilehack" style="background-size:cover;background-image: url(b.jpg);background-position: center center;background-attachment: fixed;">
                    <div class="flex" style="height:100vh;padding-left: 30px;padding-right: 30px">
                        <div style="width:100%">
                            <div class="container" style="width:100%;text-align: left;">
                                <h1 style="font-size:20px;color:white" data-aos="fade-up" data-aos-duration="500">');if(!($committeeshort=="hjcc"))echo("Topic B");else echo("Bloc 2");echo('</h1>
                                <h2 data-aos="fade-up" data-aos-duration="700" style="color:white">'.$topic2.'</h2>');
    echo('
                            </div>
                        </div>
                </div>
            </div>');
}
?>
if (array_key_exists('resolutions', get_defined_vars())){
    echo'<div style="background-color: var(--main-purple)"><div class="container">
            <h1 style="color: white">Resolutions</h1>';
            foreach ($resolutions as &$resolution) {
                echo'<a class="applybuttonsmall" data-aos="fade-up"
                   href="'.$resolution[1].'">
                    <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">'.$resolution[0].'
                &#8594;</h2></a>';
                }
                echo'</div></div>';
};
<?php
if ($staffp) {
    if($topic1=="") echo('<div class="container" style="padding-bottom:0"><div style="width:50%;height:10px;background-color: var(--main-green);margin-bottom:20px;max-width: 75px"></div></div>');
echo '<div class="container" style="padding-top: ';
    if($topic1=="") echo("0"); else echo("10"); echo'vh;padding-bottom: 10vh">
            <h1 data-aos="fade-up">The Dais</h1>
            <div class="row" style="padding: 20px">';
    foreach ($staff as &$mem) {
        if($committeeshort=="hjcc") echo '<div class="col-sm bio" style="min-width:300px;max-width:300px;margin-left:auto;margin-right:auto;margin-bottom:20px;margin-top:20px" data-fancybox data-src="#';
            else echo '<div class="col-sm bio" data-fancybox data-src="#';
        $StaffMember->{$mem->printID()};
        echo'" data-touch="false" href="javascript:;">
                    <img data-aos="fade-up" src="';
        $StaffMember->{$mem->printImg()};
        echo '.jpg" style="width:100%"/>
                    <div style="padding-top: 8px">
                    <h3 data-aos="fade-up" style="text-align: center;margin-bottom: 5px">';
        $StaffMember->{$mem->printName()};
        echo '</h3>
                    <h5 data-aos="fade-up" style="text-align: center;">';
        $StaffMember->{$mem->printPosition()};
        echo '</h5>
                    </div>
                </div>
                    ';
        echo'
                        <div class="modalstaff" id="';
        $StaffMember->{$mem->printID()};echo'">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div style="background-image: url(';$StaffMember->{$mem->printImg()};echo'.jpg);" class="modalimage"></div>
                                </div>
                                <div class="col-lg-6">
                                    <h2>';$StaffMember->{$mem->printName()};echo'</h2>
                                    <h3>';$StaffMember->{$mem->printPosition()};echo'</h3>
                                    <h4>';$StaffMember->{$mem->printBio()};echo'
                                    </h4>
                                </div>
                            </div>
                        </div>';
    }
    echo'</div>
</div>';
}?>
<?php include '../../include/footer.php'; ?>
</body>
</html>