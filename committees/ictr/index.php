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

$committee = "International Criminal Tribunal for Rwanda";
$committeeshort = "ictr";
$shortdesc = "The United Nations International Criminal Tribunal for Rwanda (UNICTR) was established by the United Nations Security Council (UNSC) on November 8th, 1994, with the jurisdiction to prosecute people for violating international humanitarian law committed in, or near, Rwandan territory from January 1st to December 31st, 1994.";
$description = "In 1994, ethnic tensions in Rwanda evolved into one of the most devastating genocides in world history, as an estimated 800,000 people were massacred within the span of just three months. The United Nations International Criminal Tribunal for Rwanda (UNICTR) was established by the United Nations Security Council (UNSC) on November 8th, 1994, with the jurisdiction to prosecute people for violating international humanitarian law committed in, or near, Rwandan territory from January 1st to December 31st, 1994. The UNICTR is also unique in that it will be the first international court to prosecute people for genocide committed in the form of rape. The court is directly responsible for bringing those who committed crimes against humanity in Rwanda to justice. In this committee, you will be taking on the role of the original justices of this trial, with the power to make a verdict on this landmark case.";
$topic1 = "Prosecuting Defendants for the 1994 Rwandan Genocide"; //Topic One
$topic2 = ""; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="s"; //committee type?

//Director Info
$staff[0]->setName("Olivia Boysen ");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Olivia Boysen is currently a sophomore at Interlake High School and is extremely excited to be directing the International Criminal Tribunal for KINGMUN 2019! Olivia joined Model UN her freshman year, and KINGMUN will be her sixth time staffing. Outside of MUN, Olivia plays volleyball, teaches sailing, and competes in DECA. Olivia can’t wait meet the delegates and to work with them in the interesting and dynamic environment of an International Criminal Tribunal!");

//Chair Info
$staff[1]->setName("Cali Randall ");
$staff[1]->setPosition("Chair");
$staff[1]->setImg($placeholder);
$staff[1]->setBio("Cali Randall is a currently a junior at Annie Wright Schools. She has been doing MUN for just over 3 years, and last year she went to the world's largest MUN conference in The Hague. Cali is relatively new to the Pacific Northwest region and just moved here from Curitiba, Brazil. In addition to Brazil, she has lived in the U.A.E, Saudi Arabia, Korea, and Poland. She mostly spends her weekends working at her job at Anthony's and hanging out. She is incredibly excited to see the unique debate that will come from this topic and is hoping that delegates get a new perspective on the state of politics and the world. ");

//Ad Info
$staff[2]->setName("Cody Fellinge ");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio("Cody Fellinge is a sophomore at the Attic Learning Community in Woodinville. His first conference was PACMUN 2016, and KINGMUN 2019 will be his seventh Model UN attendance and first time staffing. From his first conference where he spoke no less than three times, to recently fighting for Lesotho’s rights in the Joint Crisis Committee, Cody is looking forward to finally sitting on the other side of the Dais table. Outside of Model UN, Cody can be found fixing something in his car, trying to play golf, or expanding his extensive Steam library. He looks forward to seeing you at KINGMUN!");
include "../../include/committees.php";