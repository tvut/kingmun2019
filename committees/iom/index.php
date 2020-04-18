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

$committee = "International Organization for Migration";
$committeeshort = "iom";
$shortdesc = "The International Organization for Migration (IOM) is the world’s leading intergovernmental organization in the field of migration. ";
$description = "The International Organization for Migration (IOM) is the world’s leading intergovernmental organization in the field of migration. The organization was founded in 1951 and recently became a United Nations related organization in 2016. The IOM is currently made up of 192 member states from all around the world and “is committed to the principle that humane and orderly migration benefits migrants and society.” To achieve its goals, the IOM works closely with the its member states’ governments to manage the migration process, conduct research, and assist state migration programs by providing information and international services to migrants, internally displaced persons, and refugees. KINGMUN 2019’s IOM committee is best suited for beginner to intermediate level delegates eager to collaborate with a widely diverse cast of countries in order to solve some of the world’s most prevalent problems today.";
$topic1 = "Capacity Building for Refugee Influxes Due to Changing Climate Conditions"; //Topic One
$topic2 = "Ensuring the Wellbeing of Unaccompanied Child Migrants"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="i"; //committee type?

//Director Info
$staff[0]->setName("Anshita Saini ");
$staff[0]->setPosition("Director");
$staff[0]->setImg($placeholder);
$staff[0]->setBio("Anshita Saini is a sophomore at Interlake High School and is thrilled to be serving as your director for the IOM at KINGMUN 2019 in her second year of Model United Nations. She believes that this committee is of extreme significance to the wellbeing of people around the world and hopes that delegates will reflect on current world issues in relation to the chosen topics. Aside from ramming out position papers for upcoming conferences, Anshita can usually be found tossing flips at a meet for her school’s gymnastics team, shopping with her friends, or sleeping when she should be doing homework. She looks forward to action-packed debate and meeting all the delegates at KINGMUN!");

//Chair Info
$staff[1]->setName("Maya Nair ");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Maya Nair is a freshman at Inglemoor High School and this will be her second year involved in the Pacific Northwest Model United Nations circuit. Maya is passionate about current events and is excited to chair debate for the International Organization for Migration (IOM). Maya enjoys spending time with friends and family, playing soccer, and travelling internationally. From her previous experience staffing the UNEP at SeattleMUN 2019, she is excited for her first time staffing a high school committee. She is looking forward to nuanced debate as well as watching delegates work to solve some of the world most pressing issues regarding the movement of peoples. Maya hopes to give new and returning delegates a memorable experience at KINGMUN 2019 and can’t wait to see you in committee session!");

//Ad Info
$staff[2]->setName("Rory McNerney ");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio("Rory McNerney is a sophomore at the International Community School. Currently in his second year of MUN, Rory has so far attended six MUN conferences and is excited to make his staffing debut at KINGMUN 2019 as the assistant director of the Internal Organization for Migration (IOM). Whilst not drafting resolutions, Rory likes to spend his time playing soccer and participating in various school clubs such as Science National Honors Society. Rory is extremely passionate about both economics and political science and can be frequently found studying both subjects in the waning hours of the night. Eager to begin his MUN staffing journey, Rory is anxious to see the partnerships formed between both new and experienced delegates as they tackle the very prevalent and dire problems the IOM must solve today. ");
include "../../include/committees.php";