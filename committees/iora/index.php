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

$committee = "Indian Ocean Rim Association";
$committeeshort = "iora";
$shortdesc = "The Indian Ocean Rim Association (IORA), established in 1997, is an intergovernmental organization based in Mauritius that was created to improve issues pertaining to the Indian Ocean.";
$description = "The Indian Ocean Rim Association (IORA), established in 1997, is an intergovernmental organization based in Mauritius that was created to improve issues pertaining to the Indian Ocean, such as maritime safety and security, trade investment and facilitation, fishery management, disaster risk management, tourism and cultural exchange, science and technology, the blue economy, and women’s economic empowerment. IORA’a apex body is the Council of Foreign Ministers, which meets annually to discuss such issues. Consisting of 21 member states and seven dialogue partners, this committee of senior officials meets twice a year to establish IORA’s agenda and discuss ways to improve the lives of those living among the committee’s member states. IORA welcomes all delegates, whether they are new or experienced delegates, who look to improve their diplomacy and debate skills.";
$topic1 = "Improving Maritime Security to Prevent Armed Robberies and Terrorism at Sea"; //Topic One
$topic2 = "Combating Man-made Hazards in the World Hazard Belt"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="i"; //committee type?

//Director Info
$staff[0]->setName("Rithikaa Prakash ");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Rithikaa Prakash is a sophomore at the International Community School. This is her second year in MUN, and she has loved every second of it. She is very excited to be staffing KINGMUN this year as it has been one of her favorite conferences, and this is also her first time directing. Outside of MUN and her stressful school life, she is a member of GGBC, STAMP, and serves as one of the lead photographers for her school yearbook. She hopes that delegates find the topics fun and hopes to make KINGMUN an unforgettable experience for everyone. She asks delegates to prepare well, and work hard during debate, but most importantly have fun. ");

//Chair Info
$staff[1]->setName("Aaliyah Wu ");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Aaliyah Wu is a junior at the International Community School. She started her MUN career three years ago and has enjoyed it ever since her first conference, PACMUN 2016. She’s super excited for KINGMUN 2019 and being chair for the Indian Ocean Rim Association. When she’s not doing things for MUN, you can find her studying for AP Biology and Art History, scrolling aimlessly through Instagram, or trying to be productive with STAMP or FBLA. She hopes that all delegates enjoy the conference, and she is excited to meet all of you in person. ");

//Ad Info
$staff[2]->setName("Khushi Tawde ");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio("Khushi Tawde is a sophomore in the Cambridge Program at Juanita High School. This is Khushi’s second year in Model United Nations, and she is very excited to be staffing KINGMUN this year. In her free time, when she is not stressing out about procrastinating all of her homework, Khushi enjoys playing soccer for her high school and club, competing in HOSA, and watching Netflix whenever she gets the time. She expects the delegates to enjoy the process of debate and resolution writing. Khushi also hopes that this KINGMUN conference will be a stepping stone and help delegates build what could be a successful MUN future. She hopes to see you all at the conference! ");
include "../../include/committees.php";