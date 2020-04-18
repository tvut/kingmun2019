<?php
$depth = 0;
$title = "KINGMUN";
$desc = "KINGMUN is a two day Model UN conference run entirely by high school students in Kirkland, Washington!"
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'include/head.php'; ?>
    <meta property="og:url" content="<?php echo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $desc ?>">
    <meta property="og:title" content="<?php echo $title ?>"/>
    <meta property="og:description" content="<?php echo $desc ?>"/>
    <title><?php echo $title ?></title>
</head>
<body>
<?php include 'include/nav.php'; ?>

<img src="content/logos/green.svg" class="bgimg"/>
<div class="fullnav container" style="margin-top:0">
    <div style="width:100vw" class="flex homediv">
        <div style="width:100%">
            <h1 style="color:var(--main-green);z-index: -3;font-size:8vw" class="rellax" data-rellax-speed="-2"
                data-aos="fade-up">KINGMUN</h1>
            <h2 style="color:var(--main-green);z-index: -3" class="rellax" data-rellax-speed="-2.5" data-aos="fade-up">
                April 27th and 28th</h2>
            <h5 style="color:var(--main-green);z-index: -3" class="rellax" data-rellax-speed="-2.75" data-aos="fade-up">
                Inglemoor High School</h5>
            <a class="applybuttonsmall rellax" data-rellax-speed="-3" style="border-color: var(--light-green);" data-aos="fade-up"
               href="handbook.pdf">
                <h2
                        style="display: inline-block;text-align: center; font-size: 18px;color:var(--light-green)">Delegate Handbook
                    &#8594;</h2></a>
        </div>
    </div>
</div>
<h3 class="rellax bgtext" data-rellax-speed="10">2019</h3>
<div style="background-color: var(--dark-green);width:100%">
    <div class="container">
        <h3 style="color:white" data-aos="fade-up">Dear Delegates, Advisors, and Chaperones,</h3>
        <h4 style="color:white" data-aos="fade-up">We are honored to be serving as your Co-Secretary Generals for KINGMUN 2019. We cannot wait for this
            conference, which holds a special place in our hearts. It is the last conference of the year, and it
            provides the perfect opportunity for seniors to be a delegate one last time, and for middle schoolers to
            attend their first conference. </h4>
        <h4 style="color:white" data-aos="fade-up">Model United Nations offers students the ability to develop their skills through debate, writing, and
            research. KINGMUN in particular promotes these ideals, as we aim to focus on the community, with small
            committees that allow for in-depth debate and delegate growth. The conference offers 12 unique committees,
            many of which have never been seen in the Washington Model United Nations circuit, such as the Paris Peace
            Conference and the International Criminal Police Organization. Additionally, KINGMUN serves as a chance to
            wrap up a year of MUN and reminisce on connections and memories made. </h4>
        <h4 style="color:white" data-aos="fade-up">This year will be the fourth iteration of KINGMUN. When this conference began, it was a small conference of
            only 150 delegates. This year, we expect to host 300 delegates, with a staff team of 42, and a secretariat
            of 11. KINGMUN would not be possible without each of these amazing, dedicated high school students, and we
            cannot wait for you to experience the culmination of their hours of work at KINGMUN 2019. </h4>
        <h4 style="color:white" data-aos="fade-up">KINGMUN will take place the weekend of April 27th and 28th. If you have any questions, please do not
            hesitate to reach out to us at <a style="color:white" href="mailto:sg@kingmun.org">sg@kingmun.org! </a></h4>
        <h3 style="color:white" data-aos="fade-up">Yours truly, </h3>
        <div class="row" data-aos="fade-up">
            <div class="col">
                <h3 style="color:white">Roshan Nair</h3>
                <img style="width:60%;text-align:right;" src="content/roshan.png"/>
            </div>
            <div class="col">
                <h3 style="color:white">Zoe Schenk</h3>
                <img style="width:60%;text-align:right;" src="content/zoe.png"/>
            </div>
        </div>
    </div>
<!--</div>-->
<!--<div class="full flex" style="background-color: var(--main-purple);background-image:url('content/logos/whitelogo.png')">-->
<!--    <div>-->
<!--        <div class="tableinfo">-->
<!--            <div class="row" style="margin: 0 !important;">-->
<!--                <div class="col-sm" data-aos="fade-up" data-aos-duration="900">-->
<!--                    <h2>300</h2>-->
<!--                    <h3>Delegates</h3>-->
<!--                </div>-->
<!--                <div class="col-sm" data-aos="fade-up" data-aos-duration="700">-->
<!--                    <h2>12</h2>-->
<!--                    <h3>Committees</h3>-->
<!--                </div>-->
<!--                <div class="col-sm" data-aos="fade-up" data-aos-duration="500">-->
<!--                    <h2>$35</h2>-->
<!--                    <h3>Delegate Cost</h3>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <script type="text/javascript">-->
<!--            var countDownDate = new Date("Apr 27, 2019 8:00:00").getTime();-->
<!--            var x = setInterval(function () {-->
<!--                var now = new Date().getTime();-->
<!--                var distance = countDownDate - now;-->
<!--                var days = Math.floor(distance / (1000 * 60 * 60 * 24));-->
<!--                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));-->
<!--                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));-->
<!--                var seconds = Math.floor((distance % (1000 * 60)) / 1000);-->
<!--                document.getElementById("d").innerHTML = days;-->
<!--                document.getElementById("h").innerHTML = hours;-->
<!--                document.getElementById("m").innerHTML = minutes;-->
<!--                document.getElementById("s").innerHTML = seconds;-->
<!--                if (distance < 0) {-->
<!--                    clearInterval(x);-->
<!--                    document.getElementById("countdown").innerHTML = "<h1>KINGMUN 2019 IS OVER</h1>";-->
<!--                }-->
<!--            }, 1000);-->
<!--        </script>-->
<!--        <div class="countdown" style="width: 100vw;">-->
<!--            <div class="flex" id="countdown">-->
<!--                <div class="circle" data-aos="fade-up" data-aos-duration="500">-->
<!--                    <div class="flex" style="height:100%">-->
<!--                        <div>-->
<!--                            <h3>Days</h3>-->
<!--                            <h1 id="d"></h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="circle" data-aos="fade-up" data-aos-duration="700">-->
<!--                    <div class="flex" style="height:100%">-->
<!--                        <div>-->
<!--                            <h3>Hours</h3>-->
<!--                            <h1 id="h"></h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="circle" data-aos="fade-up" data-aos-duration="900">-->
<!--                    <div class="flex" style="height:100%">-->
<!--                        <div>-->
<!--                            <h3>Minutes</h3>-->
<!--                            <h1 id="m"></h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="circle" data-aos="fade-up" data-aos-duration="1100">-->
<!--                    <div class="flex" style="height:100%">-->
<!--                        <div>-->
<!--                            <h3>Seconds</h3>-->
<!--                            <h1 id="s"></h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php include 'include/footer.php'; ?>
</body>
</html>