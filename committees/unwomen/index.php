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

$committee = "The United Nations Entity for Gender Equality and the Empowerment of Women";
$committeeshort = "unwomen";
$shortdesc = "The United Nations Entity for Gender Equality and the Empowerment of Women, known as UN Women, was created in 2010 and is dedicated to gender equality and the empowerment of women. ";
$description = "In the #MeToo Era, women’s rights are more frequently being brought into the spotlight. The United Nations Entity for Gender Equality and the Empowerment of Women, known as UN Women, was created in 2010 and is dedicated to gender equality and the empowerment of women. Gender equality, not only a human right, is critical in creating a functioning society, and its achievement brings incredible social and economic ramifications. The committee’s main tasks include supporting intergovernmental organizations (IGOs), leading member states by providing solutions and guidelines to implement, and leading the UN in all of their tasks surrounding gender equity. This committee will be a stimulating and critical committee at KINGMUN 2019, and we look forward to seeing you there!";
$topic1 = "Education for Preventative Measures Against Domestic Violence"; //Topic One
$topic2 = "Improving Quality of Maternal and Infant Healthcare"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="u"; //committee type?

//Director Info
$staff[0]->setName("Charlotte Gunn ");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Charlotte Gunn is a junior at Bellarmine Preparatory School and an active member of her school’s Model UN Program as well as a part of the core leadership team for the second year in a row. KINGMUN 2019 will be Charlotte’s 16th MUN conference and third KINGMUN! Aside from Model UN, Charlotte enjoys traveling, volunteering, spending her summers at YMCA Camp Orkila, and complaining about the Washington State Ferry System that she uses every day to get to school from the mossy rock of Vashon Island that she inhabits! ");

//Chair Info
$staff[2]->setName("Maya Bar ");
$staff[1]->setPosition("Chair");
$staff[2]->setImg("c");
$staff[2]->setBio("Maya Bar is a freshman at the International Community School. When she is not rushing to meet a Mock Trial deadline, Maya can be found frantically studying before the upcoming spanish test (there is always an upcoming spanish test). In the rare moments that Maya is not (1) paralyzed by NHD stress or (2) staring silently into the beyond, she likes to kickbox and binge-watch SNL. Maya is also an expert TV show watcher and an obsessed Marvel fan who will literally debate you on every single topic in history. At the end of the day, Maya loves MUN and is really looking forward to seeing everyone at KINGMUN 2019!");

//Ad Info
$staff[1]->setName("Van Monday ");
$staff[2]->setPosition("Assistant Director");
$staff[1]->setImg("ad");
$staff[1]->setBio("Van Monday is a junior at Tesla STEM High School. This is his second year participating in MUN and his first time staffing. Outside of MUN, Van plays soccer for both Greater Seattle Surf and Juanita High School, and he enjoys getting overly obsessed with specific things and forcing his friends to listen to him talk extensively about said things. Though previously he has mainly participated in crisis committees, Van is very excited to give delegates the best experience possible at KINGMUN 2019. ");
include "../../include/committees.php";