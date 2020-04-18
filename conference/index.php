<?php
$depth = 1;
$title = "Conference";
$navdark = true;
$desc = "KINGMUN 2019 will be held at Inglemoor High School."
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:width="http://www.w3.org/1999/xhtml">
<head>
    <?php include '../include/head.php'; ?>
    <meta property="og:url" content="<?php echo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>"/>
    <meta name="description" content="<?php echo $desc ?>">
    <meta property="og:title" content="<?php echo $title ?>"/>
    <meta property="og:description" content="<?php echo $desc ?>"/>
    <title><?php echo $title ?></title>
</head>
<body>
<img src="../content/logos/green.svg"
     class="bgimg" style="top:85vh"/>
<?php include '../include/nav.php'; ?>
<div id="particles-js" style="top: 0;background-image: url(inglemoor.jpg)"></div>
<div class="flex container fullnav">
    <div style="width:100%">
        <h1 style="color:white" class="rellax" data-rellax-speed="-2" data-aos="fade-up">Conference</h1>
        <h2 style="color:white" class="rellax" data-rellax-speed="-2.5" data-aos="fade-up">Inglemoor High School</h2>
    </div>
</div>
<div class="container">
    <h3 data-aos="fade-up">King County Model United Nations 2019 will be held at the Northshore School District's
        Inglemoor High School, in Kenmore, Washington. Just minutes from the Lake Washington waterfront and many lunch
        options, Inglemoor High School provides spacious facilities which allow for high quality debate experiences at
        KINGMUN 2019. Additionally, there will be ample parking and free wireless internet connections on site for all
        delegates. If you have any further questions about our venue, please direct an email toward <a
                href="mailto:sg@kingmun.org">sg@kingmun.org</a>.</h3>
    <a class="applybuttonsmall" style="border-color: var(--light-green);" data-aos="fade-up"
       href="https://goo.gl/maps/fpJF3diEX5M2">
        <h2
                style="display: inline-block;text-align: center; font-size: 18px;color:var(--light-green)">Google Maps
            &#8594;</h2></a>
</div>
<div class="row">
    <div class="col" style="padding: 0">
        <img src="1.jpg" style="width:100%">
    </div>
    <div class="col" style="padding: 0">
        <img src="2.jpg" style="width:100%">
    </div>
    <div class="col" style="padding: 0">
        <img src="3.jpg" style="width:100%">
    </div>
</div>
<script>
    function initMap() {
        var uluru = {lat: 47.740680, lng: -122.222970};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB56xH961D9cuVD0yR0cy2eRZKDaHll-o0&callback=initMap" async
        defer>
</script>
<div style='overflow:hidden;width:100vw;margin: 0px;z-index:99'>
    <div style="height:400px;width:100vw" id="map"></div>
</div>
<div class="container">
    <h1>Keynote Speakers</h1>
    <div class="row">
        <div class="col-md-4">
            <h2>John Koeing</h2>
            <img src="john.jpg" style="width: 100%"/>
        </div>
        <div class="col-md-8">
            <h4 style="text-indent: 40px">John Koenig is an instructor at the University of Washington’s Jackson School
                of International Studies,
                teaching courses on American foreign policy, transatlantic relations, European studies and security
                policy. He retired in 2015 after more than three decades in the U.S. Foreign Service, having spent the
                last 20 years in Europe. His last post was as U.S. Ambassador to Cyprus, where he brokered the agreement
                to launch the latest round of UN-sponsored settlement negotiations. He previously served as Political
                Advisor to the NATO Joint Forces Command in Naples, Italy, which oversaw Alliance operations in the
                Mediterranean and Balkans; as Deputy Chief of Mission in Berlin, Germany, during the German EU and G8
                presidencies; and as Deputy Permanent Representative to the U.S. Mission at NATO, as the Alliance
                expanded its Afghanistan operations and intensified outreach to the Middle East. In 2011, he received
                the Presidential Distinguished Service Award in recognition of the policy and leadership roles he played
                in Berlin and at USNATO.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Dow Constantine</h2>
            <img src="dow.jpg" style="width: 100%"/>
        </div>
        <div class="col-md-8">
            <h4 style="text-indent: 40px">A fourth generation Washingtonian and life-long resident of King County,
                Executive Dow Constantine is a proven leader, regional problem solver, and effective advocate for our
                families and communities. Throughout his service in the Legislature, on the King County Council, and as
                King County Executive, Dow has consistently fought for and delivered transportation solutions,
                environmental conservation, public health and safety, fairness, and government efficiency and
                accountability. Dow was born and raised in West Seattle. Dow has been recognized regionally and
                nationally for his leadership in reforming government, defending the rights of women and the LGBTQ
                community, promoting health, child development, and cultural vibrancy, and protecting our air, water and
                climate.</h4>
        </div>
    </div>
</div>
<div class="container">
    <h1>Schedule</h1>
    <h2>Saturday, April 27th</h2>
    <div class="sch" style="min-height:105px">
        <h4>Registration</h4>
        <h6>7:15 - 9:00</h6>
    </div>
    <div class="sch" style="min-height:60px">
        <h4>Opening Ceremony</h4>
        <h6>9:00 - 10:00</h6>
    </div>
    <div class="sch" style="min-height:135px">
        <h4>Session 1</h4>
        <h6>10:15 - 12:30</h6>
    </div>
    <div class="sch" style="min-height:90px">
        <h4>Lunch</h4>
        <h6>12:30 - 2:00</h6>
    </div>
    <div class="sch" style="min-height:120px">
        <h4>Session 2</h4>
        <h6>2:00 - 4:00</h6>
    </div>
    <div class="sch" style="min-height:105px">
        <h4>Head Delegate Meeting/Break</h4>
        <h6>4:00 - 4:30</h6>
    </div>
    <div class="sch" style="min-height:150px">
        <h4>Session 3</h4>
        <h6>4:30 - 6:00</h6>
    </div>
    <h2>Sunday, April 28th</h2>
    <div class="sch" style="min-height:150px">
        <h4>Session 4</h4>
        <h6>8:00 - 10:30</h6>
    </div>
    <div class="sch" style="min-height:15px">
        <h4>Advisor Meeting/Break</h4>
        <h6>10:30 - 10:45</h6>
    </div>
    <div class="sch" style="min-height:135px">
        <h4>Session 5</h4>
        <h6>10:45 - 1:00</h6>
    </div>
    <div class="row">
        <div class="col">
            <div class="sch" style="min-height:90px">
                <h4>Lunch</h4>
                <h6>1:00 - 2:30</h6>
            </div>
        </div>
        <div class="col">
            <div class="sch" style="min-height:30px;margin-top:60px;">
                <h4>Secretariat/Staff Interest Meeting</h4>
                <h6>2:00 - 2:30</h6>
            </div>
        </div>
    </div>
    <div class="sch" style="min-height:120px">
        <h4>Session 6</h4>
        <h6>2:30 - 4:30</h6>
    </div>
    <div class="sch" style="min-height:30px">
        <h4>Delegation Photos</h4>
        <h6>4:30 - 5:00</h6>
    </div>
    <div class="sch" style="min-height:60px">
        <h4>Closing Ceremony</h4>
        <h6>5:00 - 6:00</h6>
    </div>
</div>
<?php include '../include/footer.php'; ?>
</body>
</html>