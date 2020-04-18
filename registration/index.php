<?php
$depth = 1;
$navdark = false;
$title = "Registration";
$desc = "Register for KINGMUN!"
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
        <h1 style="color:white" class="rellax" data-rellax-speed="-2" data-aos="fade-up">Registration</h1>
        <h2 style="color:white" class="rellax" data-rellax-speed="-2.5" data-aos="fade-up">
            <?php
            if (time() < strtotime(("2019/2/17 23:00:00"))) echo("Opens February 18th");
            else if (time() < strtotime(("2019/4/26 23:00:00"))) echo("Open for KINGMUN 2019");
            else echo("Is closed")
            ?>
        </h2>
    </div>
</div>
<div class="container">
    <h3 data-aos="fade-up">Welcome to KINGMUN 2019 Registration! Please refer to pricing and specific instructions below to register.</h3>
    <h3 data-aos="fade-up">Registration opens February 18th. Please feel free to reach out to our delegate affairs team
        at <a href="mailto:da@kingmun.org">da@kingmun.org</a> if you have any questions.</h3>
    <a class="applybuttonsmall" style="border-color: var(--light-green);" data-aos="fade-up"
       href="https://docs.google.com/spreadsheets/d/18vNhWWkr6KB1MbSMCgY8ABINGkO6c81wOaTz29ZcfIc/edit#gid=1779766227">
        <h2
                style="display: inline-block;text-align: center; font-size: 18px;color:var(--light-green)">Country Matrix
            &#8594;</h2></a>
</div>
<div style="background-color: var(--dark-green)">
    <div class="container">
        <div style="width:50%;height:10px;background-color: white;margin-bottom:20px;max-width: 75px"></div>
        <h1 style="color:white">Registration Instructions</h1>
        <h3 style="color:white">All delegates can register as part of a delegation or as independent delegates. Advisors
            should complete the
            <strong>Delegation Registration Form </strong>if they wish to attend KINGMUN as a delegation. After advisors
            register their delegations, each delegate will register individually by completing the <strong>Delegate
                Registration Form</strong>. </h3>
        <h3 style="color:white">After completing the delegate registration form, delegates should receive a confirmation
            email within 24 hours,
            and a position assignment email within 72 hours of registration. In the case that a delegate would like to
            switch their position or committee, they must email our Delegate Affairs team at <a
                    href="mailto:da@kingmun.org">da@kingmun.org</a>, with their
            request.</h3>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="<?php if (time() > strtotime(("2019/2/17 23:00:00"))) echo("https://www.cognitoforms.com/PacificModelUnitedNations/kingmun2019delegationregistration"); ?>">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Delegation
                Registration
                &#8594;</h2></a>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="<?php if (time() > strtotime(("2019/2/17 23:00:00"))) echo("https://www.cognitoforms.com/PacificModelUnitedNations/kingmun2019delegateregistration"); ?>">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Delegate
                Registration
                &#8594;</h2></a>
    </div>
</div>
<div style="background-color: var(--main-purple)">
    <div class="container">
        <div style="width:50%;height:10px;background-color: white;margin-bottom:20px;max-width: 75px"></div>
        <h1 style="color:white">7th and 8th Grade Registration</h1>
        <h3 style="color:white">KINGMUN 2019 welcomes middle-school delegates! In order to attend the conference,
            all 7th and 8th Grade delegates must submit a completed delegate form. If attending as an independent, a completed
            chaperone form must be submitted in addition to the delegate form. </h3>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="<?php if (time() > strtotime(("2019/2/17 23:00:00"))) echo("https://www.cognitoforms.com/PacificModelUnitedNations/kingmun2019delegationregistration"); ?>">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Delegation
                Registration
                &#8594;</h2></a>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="<?php if (time() > strtotime(("2019/2/17 23:00:00"))) echo("https://www.cognitoforms.com/PacificModelUnitedNations/kingmun2019delegateregistration"); ?>">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Delegate
                Registration
                &#8594;</h2></a>
        <a class="applybuttonsmall" data-aos="fade-up"
           href="form.pdf" download="MiddleSchoolChaperone.pdf">
            <h2
                    style="display: inline-block;text-align: center; font-size: 18px;color:white">Chaperone Contract
                &#8594;</h2></a>
    </div>
</div>
<?php include '../include/footer.php'; ?>
</body>
</html>