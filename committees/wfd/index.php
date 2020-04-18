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

$committee = "World Forum for Democracy";
$committeeshort = "wfd";
$shortdesc = "The World Forum for Democracy, established in 2012, is a yearly forum hosted by the Council of Europe in Strasbourg, France with the purpose of gathering political leaders, professors, business leaders, and other influential individuals to discuss the emerging challenges of modern democracy. ";
$description = "The World Forum for Democracy, established in 2012, is a yearly forum hosted by the Council of Europe in Strasbourg, France with the purpose of gathering political leaders, professors, business leaders, and other influential individuals to discuss the emerging challenges of modern democracy. The Forum’s concept is that the challenges of modern democracy should be tackled through harnessing the power of networked communication as well as social and political innovation from the grassroots. Each year, the World Forum for Democracy focuses on one specific theme, usually in light of current world issues, as last year’s forum was dedicated to gender equality and women’s rights in the wake of the #MeToo movement. At KINGMUN 2019’s iteration of the World Forum for Democracy, our theme will be “Democracy in the Digital Age.” As a committee, the World Forum for Democracy is unique as it consists of both representatives of countries and distinguished individuals in a variety of fields. Moreover, every delegate is there by choice. The World Forum for Democracy values the diverse perspectives of influential members of the democratic community, and as such, the World Forum for Democracy held at KINGMUN 2019 welcomes advanced delegates who hold an interest in intricate economic and business issues. To simulate the actual forum, rules of procedure will slightly differ from the norm and will be published on the website.";
$topic1 = "Freedom of Information in the \"Age of Terror\""; //Topic One
$topic2 = "Access to Cyber Information"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="i"; //committee type?

//Director Info
$staff[0]->setName("Ariana Haji ");
$staff[0]->setPosition("Director");
$staff[0]->setImg("d");
$staff[0]->setBio("Ariana Haji is a senior at Juanita High School. MUN has played an integral role in Ariana’s life over the past four years, having given her the opportunity to participate as a delegate, staff, and secretariat member. Ariana has previously served as the Under-Secretary-General of Committees for General Assemblies at PACMUN 2018 and as Secretary-General for SeattleMUN 2019. She is excited for KINGMUN 2019 and to watch delegates come together with a shared passion for international affairs to harness their diplomacy skills and form innovate solutions to some of the world’s most pressing issues. The international community shares a common destiny, and she admires how MUN allows delegates to take the first steps in improving the quality of life of people everywhere. Outside of KINGMUN, Ariana serves as President on her National Honors Society and MUN boards, plays tennis, and loves to read. Ariana cannot wait to see everyone at opening ceremonies! ");

//Chair Info
$staff[1]->setName("Nicole Turtle ");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("c");
$staff[1]->setBio("Nicole Turtle is a currently a senior at Inglemoor High School and will be serving as the chair to the the World Forum of Democracy at this year’s KINGMUN. Currently co-president of the Inglemoor Model United Nations club, she has been a part of the MUN family for three years, starting at PACMUN 2016. Nicole believes that MUN provides delegates fresh opportunities to explore and debate international matters as well as bring students closer together from across the nation. She is thrilled to staff the WFD at KINGMUN 2019 and hopes that delegates will enjoy researching their countries and topics, debating with fellow delegates, and working together to not just create resolutions but new memories.");

//Chair Info
$staff[2]->setName("Luke Jouflas ");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg($placeholder);
$staff[2]->setBio("Luke Jouflas is a sophomore at Bellarmine Preparatory School. This will be his 13th MUN conference and fourth conference staffing, and he feels honored to be serving on the WFD with his fellow dais. During his spare time, Luke enjoys skiing and climbing and just about anything related to the outdoors. When he’s not in the outdoors, Luke enjoys consuming dangerous amounts of coffee and attempting to convince the MUN committee that China has never done anything wrong. Overall, Luke enjoys MUN because he gets to meet new and interesting people and debate interesting topics all the while being absolutely exhausted. ");

include "../../include/committees.php";