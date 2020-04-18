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

$committee = "Paris Peace Conference";
$committeeshort = "treaty";
$shortdesc = "The Paris Peace Conference is a unique committee in which delegates will assume the roles of historical countries who were influential in the creation of the Treaty of Versailles. ";
$description = "The Paris Peace Conference is a unique committee in which delegates will assume the roles of historical countries who were influential in the creation of the Treaty of Versailles. This committee serves as an opportunity for you to rewrite history and potentially prevent some of the many issues that resulted from the creation of the original treaty. A once in a lifetime opportunity to fix the past, this committee will allow you to explore the many facets of WWI, conflict resolution, and diplomacy in a completely new way. With the ultimate goal of passing a treaty that may actually have positive results and solve global issues, committee session will function with a unique set of Rules of Procedure centered around the creation of the treaty. This committee is most suitable for advanced delegates who want to experience non-traditional debate and cooperation in an environment outside of the traditional MUN format. ";
$topic1 = "Treaty of Versailles (1919)"; //Topic One
$topic2 = ""; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="s"; //committee type?

//Director Info
$staff[0]->setName("Emily Compton");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Emily Compton is a sleep deprived senior at Tesla STEM High School. She is thrilled to be the director of the Paris Peace Conference of 1919. Emily has been doing MUN for three years now and thinks crisis committees are the best. She loves history and is excited for this topic and the committee discussions. Other than MUN, she spends her time working at a veterinary hospital and kennel; playing basketball, soccer, and tennis; and pretends to do homework (senioritis is real). Emily is working to become a veterinarian specializing in radiology. She hopes all delegates enjoy this year’s first historical treaty summit at KINGMUN 2019!");

//Chair Info
$staff[1]->setName("Eric Xia ");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Eric Xia is a sophomore at Lakeside High School and is psyched to be staffing KINGMUN 2019 as the chair of the Paris Peace Conference. Ever since he discovered how exciting crisis committees were at PACMUN 2018, he became eager to help in the creation of one. Some of the things Eric enjoys include working on his Eagle Scout project, helping out his IGEM biology competition team, and attempting to beat his high score on low-budget browser games. Eric hopes this committee will be an enjoyable and memorable experience for all delegates of the Paris Peace Conference.");

//Ad Info
$staff[2]->setName("Pranathi Ramesh ");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg("ad");
$staff[2]->setBio("Pranathi Ramesh is a sophomore in the Cambridge Program at Juanita High School. She has participated in four conferences since freshman year, and she is very excited to have her first staffing experience at KINGMUN! Outside of school and MUN, Pranathi plays the viola for the Bellevue Youth Symphony, the Seattle Conservatory of Music, and another non-profit orchestra. When she’s not doing homework or practicing, you can find her listening to music, sleeping, or watching episodes of Brooklyn Nine-Nine and The Office. She hopes that the delegates in this committee will have an enjoyable and unique experience in this committee!  ");
include "../../include/committees.php";