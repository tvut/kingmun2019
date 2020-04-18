<?php
$depth = 1;
$navdark = true;
$title = "About Us";
$desc = "KINGMUN's goal is to offer a new and unprecedented MUN experience that sought not to compete with the established conferences, but instead complement them with a new way of experiencing MUN."
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
<div id="particles-js" style="top: 0;background-image: url(sec.jpg)"></div>
<div class="flex container fullnav">
    <div style="width:100%">
        <h1 style="color:white" class="rellax" data-rellax-speed="-2" data-aos="fade-up">About Us</h1>
        <h2 style="color:white" class="rellax" data-rellax-speed="-2.5" data-aos="fade-up">KINGMUN 2019</h2>
    </div>
</div>
<div class="container">
    <h3 data-aos="fade-up">King County Model United Nations is a high school run MUN conference, which began in 2015,
        and is part of the non-profit organization Model United Nations Northwest. The conference offers 12 small and
        unique committees, with the goal of fostering debate and a better delegate experience. </h3>
    <h3 data-aos="fade-up">The aim of KINGMUN is to be a conference for <i>growth in community</i>. It is meant to be
        affordable, with a delegate cost of $35. As the last major conference in Washington state, it is the perfect
        opportunity for seniors to attend their last conference or middle schoolers to attend their first conference,
        and experience what the King County MUN community has to offer. </h3>
</div>
<?php
//Imports Staff Member Object
function __autoload($class_name)
{
    require_once '../include/' . $class_name . '.php';
}

$sec = true;

//Creates Staff Array
$staff = array();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();


$staff[0]->setName("Roshan Nair");
$staff[0]->setPosition("Secretary General");
$staff[0]->setImg("roshan");
$staff[0]->setBio("Roshan Nair is a senior at Tesla STEM High School and has been a part of the Pacific Northwest Model United Nations circuit for the past 3 years. Previously he has served as a staff member for PACMUN, EDUMUN, and KINGMUN, as well as a Secretariat member for PACMUN 2018 and SeattleMUN 2019. He is excited to serve as one of your Secretary Generals for his last KINGMUN. MUN has played an integral role in his high school career and personal development, and Roshan aims to share the same with more delegates at KINGMUN 2019. Outside of MUN, Roshan enjoys learning about environmental issues, is an avid diver, and enjoys spending time gardening with his chickens. Roshan is excited to see everyone at opening ceremonies!");
$staff[0]->setEmail("sg@kingmun.org");

$staff[1]->setName("Zoe Schenk");
$staff[1]->setPosition("Secretary General");
$staff[1]->setImg("zoe");
$staff[1]->setBio("Zoe Schenk is a Senior at Inglemoor High School. If she’s being honest, she has dedicated an unhealthy amount of time to Model United Nations over the last three years of her life. She has served as the USG of Committees for PACMUN 2017 and KINGMUN 2018, as well as Secretary-General for PACMUN 2018. If she’s not doing something for MUN (unlikely), she’s working on homework, researching, hiking with her dog and family, or petting her blind cat named Frankie. She absolutely loves Model United Nations, and is honored and excited to serve as the Co Secretary-General of KINGMUN 2019!");
$staff[1]->setEmail("sg@kingmun.org");

$staff[2]->setName("Sherveen Mehrvarzan");
$staff[2]->setPosition("Director General");
$staff[2]->setImg("sherveen");
$staff[2]->setBio("Sherveen Mehrvarzan is currently a junior at the International Community School in Kirkland, Washington; and is now participating in his fourth year of Model UN. Time and time again, Sherveen is inspired by the insight, diplomacy, and overall professionality of the Pacific Northwest MUN region. Through his passion for the Model UN world he has been apart of numerous conferences, as a delegate, staff, and even secretariat. Outside of his MUN-filled life, Sherveen is found at his school being the President of Tech Crew, being the Vice-President of FBLA and the Public Relations officer of his MUN club. To have fun, Sherveen plays basketball recreationally, likes to toy with calculus problems, and explores the world of computers. Sherveen is honored to be the Director General of KINGMUN 2019, and is ready to put in the work to make it the best one yet!");
$staff[2]->setEmail("dg@kingmun.org");

$staff[3]->setName("Audri Saulters");
$staff[3]->setPosition("Chief of Staff");
$staff[3]->setImg("audri");
$staff[3]->setBio("Audri Saulters is a current senior at Inglemoor High School. This will be her fourteenth MUN conference and cannot wait to tear up during the closing ceremony knowing a chapter has closed. Apart from MUN, Audri can be found taking photos with her beloved camera or playing guitar. Audri can’t wait for being the Chief of Staff at her final MUN conference.");
$staff[3]->setEmail("cos@kingmun.org");

$staff[4]->setName("Tristan Stevens");
$staff[4]->setPosition("USG of Technology");
$staff[4]->setImg("tristan");
$staff[4]->setBio("Tristan Stevens is a junior at Tesla STEM High School. This is his fourth year of doing MUN after getting involved at SkyMUN in eighth grade. He fell in love with MUN and went on to participate in over six conferences during his Freshman year and another four sophomore year. Outside of Model UN, he can be found taking photographs, coding or doing robotics. He can’t wait to make KINGMUN 2019 the best one yet!");
$staff[4]->setEmail("tech@kingmun.org");

$staff[5]->setName("Athena Ho");
$staff[5]->setPosition("USG of Delegate Affairs");
$staff[5]->setImg("athena");
$staff[5]->setBio("Athena Ho nurses a crippling addiction to caffeine and currently attends the International Community School as a junior. Since her first time participating as a delegate two years ago in the PACMUN 2017 Senate, she has nurtured her burning passion for spreadsheets, scrunchies, and the ukulele. You can often find her working on bad poetry, cramming frantically for APCS, or planning her next trip to her hometown of Austin, Texas (go Longhorns). Whether it be Cars 2 fanfiction or a Harry Potter filibuster, MUN has provided Athena with irreplaceable memories and friendships. Athena is thrilled to be serving as a USG of Delegate Affairs for KINGMUN 2019, and hopes to provide all delegates attending KINGMUN an unforgettable experience!");
$staff[5]->setEmail("da@kingmun.org");

$staff[6]->setName("Alicen Han");
$staff[6]->setPosition("USG of Delegate Affairs");
$staff[6]->setImg("alicen");
$staff[6]->setBio("Alicen Han is a boba-obsessed and constantly stressed junior attending Newport High School. Since joining Model UN in her sophomore year, she has participated in 6 conferences. Whether it be UberEating Sharetea with her committee or frantically organizing delegates into their positions, Model UN has provided Alicen with opportunities not available elsewhere. Apart from Model UN, she also participates in school clubs, like Key Club or Days for Girls, and is heavily involved in music as part of her school’s Philharmonic Orchestra and the Seattle Youth Symphony Orchestra Programs. She also plays tennis for the varsity team at Newport. Alicen is ecstatic to serving as a USG of Delegate Affairs for KINGMUN 2019, and hopes to provide all delegates attending KINGMUN an unforgettable experience! ");
$staff[6]->setEmail("da@kingmun.org");

$staff[7]->setName("Suma Kandikonda");
$staff[7]->setPosition("USG of Marketing");
$staff[7]->setImg("suma");
$staff[7]->setBio("Suma Kandikonda is a current senior at International Community School, and a member of MUN since her freshman year. Having been a member of PACMUN Media Team the past few years she is excited to bring her experiences into this upcoming conference. This is her first time as a member of secretariat and she is extremely excited to get the ball rolling for her last conference. If you are ever wondering where she is during a conference, it’s probably behind a camera, or drinking a little too much coffee while still working on MUN. She’s elated to see her final conference come to fruition as well as hear the gavel hit the table closing out this chapter in her life.");
$staff[7]->setEmail("marketing@kingmun.org");

$staff[8]->setName("Spring Chenjp");
$staff[8]->setPosition("USG of Committees for the United Nations");
$staff[8]->setImg("spring");
$staff[8]->setBio("Spring Chenjp is a sophomore at Tesla STEM High School, and is thrilled to serve as your Undersecretary-General of United Nations Committees! Her first conference was KINGMUN 2017, and she has since fell in love with Model UN due to the rapid-fire debate, deep bonds formed with other delegates, and meaningful discussion about world issues. She has staffed twice and is ecstatic to take the reins in her first Secretariat position. In her spare time, she practices and teaches taekwondo, sings in her school choir, and hopes to pass her next AP Bio test. Spring had a great time selecting committees, training staff, and ensuring that delegates will have the best time possible at KINGMUN 2019!");
$staff[8]->setEmail("un@kingmun.org");

$staff[9]->setName("Nils Berzins");
$staff[9]->setPosition("USG of Committees for Intergovernmental Organizations");
$staff[9]->setImg("nils");
$staff[9]->setBio("Nils Berzins is a current junior at International Community School in Kirkland, WA. He’s now in his second year of participating at MUN. Nils enjoys spending time alone in his room playing with his dog and on the computer. He’s very lame and only eats potatoes. He calls himself a “Latvian”, but that country doesn’t actually exist, and is a part of the glorious United Socialist Soviet Republic. And can often be seen carrying a pink backpack. And also wears flamboyant socks to hide his frail leg fisique which cannot be seen by the naked eye due to the ridiculous standards of WBA. Comment on Nils’s socks, and he may even get you a candy gram for the next committee session with an extremely unnecessary fact that can be easily found on factslides.com. Furthermore, if anyone were to muster up the courage to follow Nils to his green 2000 Toyota Tundra with a towing capacity of up to 1 ton, they would find him rapping to one of his many playlists on spotify (his account name is BalticBoy01 so go and follow).");
$staff[9]->setEmail("igo@kingmun.org");

$staff[10]->setName("Simran Tandon");
$staff[10]->setPosition("USG of Committees for Specialized and Crisis Committees");
$staff[10]->setImg("simran");
$staff[10]->setBio("Simran Tandon is a vertically challenged and MUN-obsessed junior at Eastlake High School. You can often find her drinking far too much caffeine for anyone under the age of 35, taking Ls in her AP classes, or yelling at anyone and everyone who will listen to what she has to say. She doesn’t actually have much of a life outside of MUN, but her teachers and MUN roles make sure that she never has free time. In her four years of MUN, she has been to so many conferences that she has stopped keeping track, and she has loved each and every one of them. No matter what variety of committees Simran has staffed, her heart will always be in specialized committees. Particularly because she no longer remembers how regular committees work, but that is besides the point. She has had an amazing time coming up with and helping plan the unique committees that KINGMUN 2019 will be presenting this year, and she hopes that delegates have the time of their life at the conference!");
$staff[10]->setEmail("sc@kingmun.org");

echo '<div id="p" style="background-color: var(--main-green); color:white">
        <div class="container" style="padding-top: 10vh;padding-bottom: 10vh;max-width:1300px">
            <h1 data-aos="fade-up" style="width:100%;text-align: center; color:white">The 2019 Secretariat</h1>
            <div class="row" style="padding: 20px">';
foreach ($staff as &$mem) {
    echo '<div class="col-sm" style="min-width:300px;max-width:300px;margin-left:auto;margin-right:auto;margin-bottom:20px;margin-top:20px" data-fancybox data-src="#';
    $mem->printID();
    echo '" data-touch="false" href="javascript:;">
                    <img data-aos="fade-up" src="';
    $mem->printImg();
    echo '.jpg" style="width:100%"/>
                    <div data-aos="fade-up" style="padding-top: 8px">
                    <h3 style="text-align: center;margin-bottom: 5px">';
    $mem->printName();
    echo '</h3>
                    <h5 style="text-align: center; color: white">';
    $mem->printPosition();
    echo '</h5>
<h5 style="text-align: center;"><a style="color:white;opacity: .7" href="mailto:';
    $mem->printEmail();
    echo '">';
    $mem->printEmail();
    echo '</a></h5>
                    </div>
                </div>
                    ';
    echo '
                        <div class="modalstaff" id="';
    $mem->printID();
    echo '">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div style="background-image: url(';
    $mem->printImg();
    echo '.jpg);" class="modalimage"></div>
                                </div>
                                <div class="col-lg-6">
                                    <h2>';
    $mem->printName();
    echo '</h2>
                                    <h3>';
    $mem->printPosition();
    echo '</h3>
                                    <h4>';
    $mem->printBio();
    echo '
                                    </h4>
                                </div>
                            </div>
                        </div>';
}
echo '</div>
            </div>
</div>';
?>
<div style="width:100%;">
    <div class="container">
        <div class="row">
            <div class="col-sm" data-aos="fade-up"><h1>Board of Directors</h1></div>
        </div>
        <div class="row">
            <div class="col-sm" style="padding-bottom: 20px">
                <h2 data-aos="fade-up">Monisha<br> Weerasundara</h2>
                <h3 data-aos="fade-up"><strong>President</strong></h3>
            </div>
            <div class="col-sm" style="padding-bottom: 20px">
                <h2 data-aos="fade-up">Subramanian<br> Ramachandran</h2>
                <h3 data-aos="fade-up"><strong>Chairman</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h3 data-aos="fade-up">Trevor Mueller</h3>
                <h3 data-aos="fade-up">Arun Solanky</h3>
                <h3 data-aos="fade-up">EJ Velasco</h3>
                <h3 data-aos="fade-up">Shawdi Mehrvarzan</h3>
            </div>
            <div class="col-sm">
                <h3 data-aos="fade-up">Paige Chickering</h3>
                <h3 data-aos="fade-up">Kelsey Braford</h3>
                <h3 data-aos="fade-up">Angie McNally</h3>
            </div>
        </div>
    </div>
</div>
<?php include '../include/footer.php'; ?>
</body>
</html>