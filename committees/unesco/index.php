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

$committee = "The United Nations Educational, Scientific and Cultural Organization";
$committeeshort = "unesco";
$shortdesc = "The United Nations Educational, Scientific, and Cultural Organization (UNESCO) plays a unique role in strengthening the foundations of peace, and equitable and sustainable development around the world. ";
$description = "Formed on November 16th, 1945 as a successor of the League of Nations International Committee on Intellectual Cooperation, the United Nations Educational, Scientific, and Cultural Organization (UNESCO) plays a unique role in strengthening the foundations of peace, and equitable and sustainable development around the world. To do so, UNESCO works to guarantee that every child has access to quality education, stands up for freedom of expression, fosters scientific programs, and promotes cultural heritage and equal dignity of all cultures. UNESCO maintains lasting peace and equal development in the world and is a key player in ensuring that every nation has a chance at educational, scientific, and cultural advancements.";
$topic1 = "Using Education to Prevent Alt-Right Extremism"; //Topic One
$topic2 = "Promoting Sustainable Tourism"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="u"; //committee type?

//Director Info
$staff[0]->setName("Pragnath Chintalapati");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Pragnath Chintalapati is a junior at Interlake High School and is pursuing his IB Diploma. He joined MUN early in the 8th Grade and having moved to Bellevue during the summer 2018, KINGMUN 2019 is only his 3rd conference in the Northwest MUN circuit but has been to multiple conferences before. Apart from stressing on his IB Diploma score and GPA, you can find Pragnath cooking, playing FIFA, badminton, soccer, and going out on long drives when he must be studying. Pragnath is super excited to be your director and cannot wait to meet all the new and fun people he is going to come across at KINGMUN 2019. ");

//Chair Info
$staff[1]->setName("Naisha Garg");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Naisha Garg is currently a sophomore at Interlake High School and is delighted to be serving as the chair for the esteemed KINGMUN 2019! She has attended countless conferences, both international and local, since the beginning of her MUN career and is constantly inspired by the diplomacy and determination that is affiliated with MUN. Naisha can be found at other clubs at Interlake such as DECA, Speech and Debate, and Amnesty. Outside of school, she usually spends any free time apart from homework and studying by procrastinating over homework, volunteering, stressing over life, and simply enjoying the beauty of the Pacific Northwest. Naisha is honored to welcome all delegates, staff and secretariat alike to KINGMUN 2019 and is looking forward to productive debate!");

//AD Info
$staff[2]->setName("Aisling McGurl");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio("Aisling McGurl is a junior at The Center School. She has attended multiple local Model UN conferences since sophomore year, and has really enjoyed the experience of MUN. She absolutely loves the diplomacy and debate as well as building understanding of global issues. Apart from MUN you can find Aisling watching Marvel movies, learning makeup tips, or at her school’s intersectional feminist club. Aisling is honored to be your Assistant Director for UNESCO and cannot wait to welcome delegates to KINGMUN 2019!");

include "../../include/committees.php";