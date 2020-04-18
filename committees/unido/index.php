<?php
//Imports Staff Member Object
function __autoload($class_name) {
    require_once '../../include/' . $class_name . '.php';
}
//Creates Staff Array
$staff = array();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
global $committee, $description, $topic1, $topic2,$pp,$shortdesc,$staffp,$placeholder,$bg,$ct;
$placeholder="../../content/logos/logo";

$committee = "The United Nations Industrial Development Organization";
$committeeshort = "unido";
$shortdesc = "The United Nations Industrial Development Organization (UNIDO) remains a pivotal facet in promoting and accelerating inclusive and sustainable industrial development within the developing regions of the world. ";
$description = "Established in 1966 as a subsidiary body of the United Nations General Assembly, the United Nations Industrial Development Organization (UNIDO) remains a pivotal facet in promoting and accelerating inclusive and sustainable industrial development within the developing regions of the world. It is this committee that engages 168 member states within the United Nations to derive solutions to the developing world’s most pressing issues . Topics within UNIDO stem from the United Nations Sustainable Development Goals (SDGs) adopted in 2016.";
$topic1 = "Promoting Decentralized Generation of Power in Rural Areas"; //Topic One
$topic2 = "Ensuring Access to Surgical Technology in Developing Regions"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="u"; //committee type?

//Director Info
$staff[0]->setName("Rabeeya Asif");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Rabeeya is a sleep deprived junior in the Cambridge Program at Juanita High School. Three years ago, PACMUN was her first conference as a delegate. Since then, she has staffed many conferences as both a director and a chair of a GA, an ECOSOC, and an EU. She has also served on the PACMUN secretariat as an Under-Secretary-General of Committees for PACMUN 2018, and currently serves as the Director-General of Seattle Model United Nations 2019. When she’s not deliberating international affairs or studying for the dreaded Cambridge exams, you will find her on the tennis court, at a HOSA conference, or in the DECA room. Rabeeya has a strong passion for volunteering through Key Club, National Honors Society, and proudly serves as the Recreation Chair of the Redmond Youth Partnership Advisory Committee (RYPAC). She also loves math, Harry Potter, and Teen Wolf. In her free time, she likes to read, play with her cat-sized rabbit Seymour, go on hikes, and go to the gym. Rabeeya holds faith in the Model UN system and is honored to be a member of the KINGMUN 2019 team, and will work hard to make it an amazing experience for everyone!");

//Chair Info
$staff[1]->setName("Hannah Bahram Pour");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Hannah Bahram Pour is currently a junior at Woodinville High School and is very excited to be a chair her third time staffing this year. She can gladly say that entering the MUN circuit was a pivotal and eye-opening moment in her life; she looks forward to meeting all the delegates and watching them debate pressing issues and mature their diplomacy skills. To this day, she participates in many conferences as a staff member and a delegate, and is also an officer for her schools MUN chapter. Outside of MUN, she is the president of her class, a board member for National Honor Society, a youth leader for March For Our Lives, and a somewhat decent skier.");

//Ad Info
$staff[2]->setName("Nihar Bodicherla");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio("Nihar Bodicherla is a caffeinated, nearly nocturnal junior at the International Community School and is honored to be serving as the assistant director for UNIDO at KINGMUN this year. Immediately drawn to Model UN for its competitiveness and diplomatic nature, it took just one unforgettable PACMUN 2018 for him to fall in love. He believes that MUN is a powerful catalyst for change, while being fun and lighthearted, and hopes that all delegates will “stay classy” during debate. Aside from Model UN, Nihar enjoys the sheer grindfest that is FBLA and can be spotted occasionally at various martial art tournaments. Though rarely when he’s free, he enjoys obsessing over computers, various types of coffee, and the latest engineering marvels.");
include "../../include/committees.php";