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
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
$staff[] = new StaffMember();
global $committee, $description, $topic1, $topic2,$pp,$shortdesc,$staffp,$placeholder,$bg,$ct;
$placeholder="../../content/logos/logo";

$committee = "Decolonization and Apartheid in Southern Africa";
$committeeshort = "hjcc";
$shortdesc = "The Historical Joint Crisis Committee (HJCC) is the purest form of the Model United Nations experience.";
$description = "The Historical Joint Crisis Committee (HJCC) is the purest form of the Model United Nations experience. In a fast-paced and high stakes committee, there are two opposing blocs beginning at some point in our history. From there, both blocs are tasked with ensuring their victory and disregarding exact historical precedent. Through this unique experience, delegates will have the opportunity to take history into their own hands and craft a world according to their desires, while simultaneously battling other delegates on multiple fronts, from popular support to military action. In the HJCC, delegates are expected to be knowledgeable and advanced in all skills relating to diplomacy, strategy, and problem-solving; the committee is intended for more experienced delegates who are capable of executing quick and creative plans in response to constantly evolving situations. Typical ROP in this crisis committee involves a perpetual moderated caucus, and personal pronouns are permitted. Please join us in an unforgettable experience with some amazing people!";
$topic1 = "Minority Rule"; //Topic One
$topic2 = "African Nationalists"; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="s"; //committee type?

//Director Info
$staff[3]->setName("Kobey Sage-Chew ");
$staff[3]->setPosition("Bloc 1 Director");
$staff[3]->setImg("d1");
$staff[3]->setBio("Kobey Sage-Chew is an effervescent senior enrolled at Juanita High School in the city of Kirkland. Though enrolled at Juanita High, Kobey attends classes at Lake Washington Institute of Technology through the Running Start Program. When not flexing his four day a week school schedule, Kobey is commonly found surfing the “memescape”, volunteering in his community, and finding just about any reason to debate passersby. He cannot wait to top off his four year, 17 conference career as the director of Bloc One of KINGMUN 2019’s Historical Joint Crisis Committee.");

//Chair Info
$staff[4]->setName("Sanya Gupta ");
$staff[4]->setPosition("Bloc 1 Chair");
$staff[4]->setImg("c1");
$staff[4]->setBio("Sanya Gupta is a weary sophomore (though she has been called a freshman an innumerable amount of times) at Interlake High School in her first year of the IB program. She is absolutely elated to be your chair for Bloc One of the Historical Joint Crisis Committee at KINGMUN 2019! After being peer pressured into the world of Model United Nations in her freshman year and actually enjoying the club, she instantly dove into the metaphorical deep end of the MUN pool and has since attended over 15 conferences as a secretariat member, staff member, and delegate. Aside from constantly stressing and overworking herself and those around her with Model UN and schoolwork (and writing bios that are far too long), she can be found trying to lead her Science Olympiad team, participating in FBLA, GOVAA, HOSA, and Key Club (and thus volunteering for countless hours). She also organizes activism events, or even tries to learn new languages (and admittedly fails at doing so). Nevertheless, Sanya hopes you enjoy yourselves at KINGMUN and cannot wait to meet all of you!");

//Ad Info
$staff[5]->setName("Emily Zhao ");
$staff[5]->setPosition("Bloc 1 AD");
$staff[5]->setImg("ad1");
$staff[5]->setBio("Emily Zhao is a sophomore at Tesla STEM High School and is ecstatic to serve as the assistant director for Bloc One of HJCC! After being first introduced to MUN in the 8th grade, Emily has fully immersed herself into the Model United Nations experience and has grown to love it with all her heart. Her favorite part about MUN is the community and being able to meet new people. As a delegate, she has attended a multitude of amazing conferences with her school and her friends. Outside of MUN, Emily plays the drums for her school and for Seattle Youth Symphony Orchestras, drawing, and also enjoys playing softball. In her school, she attends a plethora amount of clubs, including HOSA, FBLA and Key Club, where she and her friends are known for screaming excessively. When she doesn’t have anything productive to do, Emily adores going out with her friends, getting way too immersed into YouTube, crying over KPop, and most importantly, sleeping. ");

//Director Info
$staff[6]->setName("Zachary Forbes ");
$staff[6]->setPosition("Bloc 2 Director");
$staff[6]->setImg("d2");
$staff[6]->setBio("Most commonly found treating his senioritis with RIP Vine compilations, Zachary Forbes is a senior at Bellarmine Preparatory School in Tacoma, Washington. After ignoring all conventions of regular diplomacy, Zach spied and double-crossed his way across many Crisis Committees over his four years as a Model UN delegate, staff, and secretariat member. With the Joint Crisis being lightning speed and an unique opportunity for experienced delegates, Zach is ecstatic to serve as the director of the African Nationalists’ Bloc for KINGMUN 2019’s Historical Joint Crisis Committee. Zach believes that crisis stands out in turning good delegates into great delegates. When not betraying fellow bloc members, Zach can be found annoying his neighbors by belting showtunes at all hours of the day, tap dancing in his garage, studying poisonous phytoplankton, and retweeting Alexandria Ocasio-Cortez on Twitter.");

//Chair Info
$staff[7]->setName("Beatrice Duchastel de Montrouge ");
$staff[7]->setPosition("Bloc 2 Chair");
$staff[7]->setImg("c2");
$staff[7]->setBio("Beatrice Duchastel de Montrouge is excited to be spending her last Model UN experience of her high school career at KINGMUN 2019! She has spent this year in MUN staffing multiple crisis committees, with this committee being her third JCC she is staffing in her senior year. An IB Student of Inglemoor High School, Beatrice enjoys spending her time being the drum major of the IHS Viking Marching and Pep Bands and being a co-president of the school’s speech and debate club. Outside of school, Beatrice loves volunteering at the MoPOP, drinking lots of bubble tea, and watching too much YouTube. She can’t wait to meet everyone at KINGMUN at this years HJCC!");

//Ad Info
$staff[8]->setName("Katherine Gu ");
$staff[8]->setPosition("Bloc 2 AD");
$staff[8]->setImg("2ad");
$staff[8]->setBio("Katherine Gu is a junior at Juanita High School in the Cambridge Program. She will be your assistant director for the African Nationalist Bloc of the Historical Joint Crisis Committee at KINGMUN 2019. Katherine first joined the MUN community during her sophomore year, and she has since attended five conferences. She can’t wait to see all of you at KINGMUN 2019! When Katherine is not spending an excessive amount of time planning what she has to do instead of actually doing the task, she can be found golfing, reading, or being dragged into a play-fight involving her friend, little children (and their younger siblings), and a whole lot of screaming.");

//Director Info
$staff[0]->setName("Annalisa Mueller-Eberstein ");
$staff[0]->setPosition("Joint Director");
$staff[0]->setImg("jd");
$staff[0]->setBio("Annalisa Mueller-Eberstein can commonly be found attending the International Community School in Kirkland as a seemingly normal junior. She has spent the last four years of winning awards as a delegate, serving as an assistant director, chair, and director of a variety of committees, from DISEC to Senate to HCC. After also working on multiple secretariats, she is excited to work with the rest of the KINGMUN team as the joint-director of the Historical Joint Crisis Committee. One of her favorite things about MUN, besides the wonderful people, is the debate in and out of committee about important issues, like whether a hot dog is a sandwich. Annalisa can't wait to meet you all at KINGMUN 2019 and hopes every delegate has the opportunity to learn while having fun. When not planning for MUN conferences, she can be found watching a show on Netflix, completing a project for FBLA, working as the vice-president of ASB, or most importantly, making bad puns, using horrible pick-up lines, and ignoring homework.");

//Chair Info
$staff[1]->setName("Harshita Bondhi ");
$staff[1]->setPosition("Joint Chair");
$staff[1]->setImg("jc");
$staff[1]->setBio("Harshita Bondhi is a junior at Redmond High School. She is delighted to serve as the joint-chair for KINGMUN 2019’s HJCC and hopes that every delegate loves what the dais puts together. After two years of experiencing incredible KINGMUN committees, she is excited to help put together a committee herself. This is her fourth year of MUN and third year obsessing over how awesome specialized committees are compared to everything else. Outside of Model UN, Harshita loves speech and debate, her job working at a preschool, and spending hours researching random things in preparation for the inevitable nuclear apocalypse. ");

//Ad Info
$staff[2]->setName("Jathin Arjun ");
$staff[2]->setPosition("Joint AD");
$staff[2]->setImg("jad");
$staff[2]->setBio("Jathin Arjun is an exhausted sophomore at Interlake High School in the first year of the IB program. After being introduced to MUN in India in 7th grade, he latched on to the quick thinking and creative ideas that MUN was full of. Since coming to the US, he has attended a total of nine conferences and can’t wait to attend more as well. Outside of school, Jathin is an active member of Key Club, FBLA, and LaunchX, and constantly tries to crowd his schedule with way too many activities to handle. On top of that, he attends piano and vocal music classes and performs at concerts pretty frequently as well. But, in the little free time that he has, he loves to eat as much as humanly possible, exercise in whatever way is practical (which is usually not exercising at all), read anything fantasy-related, and playing cards and watching movies with his family.  Jathin is super excited to meet everyone and wishes them the best of luck for KINGMUN 2019!");
include "../../include/committees.php";