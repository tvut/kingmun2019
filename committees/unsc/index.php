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

$committee = "The United Nations Security Council";
$committeeshort = "unsc";
$shortdesc = "The United Nations Security Council (UNSC) is arguably the focal point of all UN committees, as its primary goal is maintaining international peace and security. ";
$description = "The United Nations Security Council (UNSC) is arguably the focal point of all UN committees, as its primary goal is maintaining international peace and security. The UNSC was founded in 1946 following the end of World War II as a revised version of its predecessor, the League of Nations, which failed to preserve global peace. The UNSC is comprised of fifteen total members, five permanent members that hold veto power and ten elected members that rotate in two-year terms. The Security Council strives to end all conflict through peaceful means; however, it is the only UN body with the authority to take military action, including issuing ceasefire directives, dispatching peacekeeper forces, or even ordering collective attacks. All Member States of the United Nations must accept and carry out decisions made by the Security Council. As an advanced committee, the UNSC will present a unique series of challenges for experienced delegates as they work together to effectively end some of the most devastating conflicts in history. The resolutions created in committee will stand as the foundation of international relations for many years to come, requiring vigorous debate and the continuous collaboration of all delegates throughout the conference.";
$topic1 = "Maritime Piracy in the Gulf of Guinea"; //Topic One
$topic2 = "Armed Militias in the Central African Republic"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="u"; //committee type?

//Director Info
$staff[0]->setName("Megan Wong");
$staff[0]->setPosition("Director");
$staff[0]->setImg($placeholder);
$staff[0]->setBio("Megan Wong is a junior at Juanita High School and is currently in her third year of Model United Nations. After staffing and participating in numerous conferences, she is ecstatic to be serving as the director for the United Nations Security Council!  When not immersed in intense international debate, you can find her passed out on the couch (for five hours at a time), drowning in the swimming pool, or volunteering through Key Club (go D27!). She loves the diplomatic and collaborative aspect of MUN and is excited to write history with UNSC delegates at KINGMUN 2019!");

//Chair Info
$staff[1]->setName("Shreya Nambi");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Shreya Nambi is a sophomore at Interlake High School and is excited to be your chair for the United Nations Security Council at KINGMUN 2019! Shreya joined MUN in her freshman year and loves attending conferences and engaging in thoughtful debate. She participates in multiple clubs at Interlake, including DECA, Technovation, and TSA. In her free time, she usually watches pointless videos and contemplates life decisions such as joining the dreaded IB Program. She is very excited to meet you all, and hopes you have a great time at KINGMUN 2019!");

//Ad Info
$staff[2]->setName("Siobhan Kenny");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio(" ");
include "../../include/committees.php";