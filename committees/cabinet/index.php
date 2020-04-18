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

$committee = "State Council of the People's Republic of China";
$committeeshort = "cabinet";
$shortdesc = "One of the highest organs of state power in China, the State Council of the People’s Republic of China sits as the chief administrative authority, overseeing the implementation, drafting, and approval of legislative bills that shape China’s domestic and international future. ";
$description = "One of the highest organs of state power in China, the State Council of the People’s Republic of China sits as the chief administrative authority, overseeing the implementation, drafting, and approval of legislative bills that shape China’s domestic and international future. It is comprised of the premier, vice-premiers, state councillors, and several ministers of various departments and commissions. As such, delegates will hold the responsibility of upholding the principles of the Communist Party of China, while addressing issues that vary from foreign affairs and national defense to finance and economy. A fast paced and challenging committee, the State Council will be dictated by non-traditional Rules of Procedure that stay true to the Chinese legislative and decision making process. Although open to anyone, delegates should expect complex debate surrounding the chosen topics; those selected to this prestigious and powerful group must make decisions that guide China through some of its most daunting obstacles yet, in a time of unprecedented economic and population growth. ";
$topic1 = "The Belt and Road Initiative: Expanding China's Economic Influence"; //Topic One
$topic2 = "Addressing Urban Air and Water Pollution through Industry reform "; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="s"; //committee type?
$resolutions=array((array('State Council 32nd Session National Policy: National Administration Regulations ','https://docs.google.com/document/d/1K_-mr1F6z8fjerjMe3kYm4mZ9_E1gpNulaI-kk1bu-I/edit?ts=5cc5ecac')));

//Director Info
$staff[0]->setName("Jackson Kelley ");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Jackson Kelley is a senior at Bellarmine Preparatory School down in Tacoma. KINGMUN 2019 will be Jackson’s 16th and final conference and his fourth time as a staff member, marking the end of the amazing four years he has spent in high school MUN. Outside of MUN, Jackson is an avid tennis player (his 6’8” height helps with this, and no, he doesn’t play basketball), participates in his school’s ASB, and volunteers for Metro Parks Tacoma. Currently, he is basking in the glory of completing college applications and fighting senioritis as he works through his last semester before college. Jackson looks forward to finishing his MUN career strong with a hands-on committee that throws all delegates for a loop.");

//Chair Info
$staff[1]->setName("Anusha Srivastava");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Anusha is a junior at Tesla STEM and this will be her tenth conference as either a delegate or staff as she enters her third year of MUN, which has continually been a source of unforgettable experiences and unique opportunities. Outside of MUN, she’s involved in the Bellevue Youth Symphony, HOSA, and TedX. Although deep in the throes of junior stress, you can otherwise find Anusha hiking, playing tennis, or getting into a good book when she isn’t trying to catch up on some much needed sleep. She looks forward to providing delegates a challenging yet engaging committee experience and (hopefully) some good inside jokes for delegates to take away.");

//Ad Info
$staff[2]->setName("Maia McGrath ");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio("Maia McGrath is a junior at Everett Community College’s Ocean Research College Academy (ORCA) program. This is Maia’s fourth year of Model UN, and she is ecstatic to be serving as the assistant director of the Central Committee at KINGMUN 2019. Aside from schoolwork and Model UN, Maia is a member of ORCA’s Orca Bowl trivia team and the YAYA hiking group. When she’s not plotting “alternative” ways to write papers and singing “Drunken Sailor” at the top of her lungs on a research vessel, Maia can be found hiking and backpacking, illustrating bad puns, cracking jokes, reading horror comic books, and indulging in the occasional polar plunge. Maia can’t wait to see all the creative solutions that delegates come up with and hopes that delegates have a fun, yet educational, blast at KINGMUN 2019!");
include "../../include/committees.php";