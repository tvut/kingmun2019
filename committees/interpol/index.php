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

$committee = "International Criminal Police Organization";
$committeeshort = "interpol";
$shortdesc = "The International Criminal Police Organization (Interpol) will discuss the best ways to stop crime around the world.";
$description = "While other committees bicker broadly about refugees or climate change, the delegates of the International Criminal Police Organization (Interpol) will discuss the best ways to stop crime around the world. Established in 1923, years before the United Nations was established, Interpol is a distinct organization with its own priorities and jurisdiction. While Interpol is sometimes dominated by politics and bureaucracy, like most intergovernmental organizations, it is the common thread of each nation’s alleged dedication to stopping crime through reformation. Delegates must remember the limited power of Interpol; for it is restricted by a small budget, subservience to national sovereignty, and is tasked with managerial responsibilities. Yet at the same time, Interpol is no stranger to controversy, with its databases taken advantage of, policies criticized, and former heads charged for corruption. Regardless, Interpol works in a long-term agenda, promoting permanent change by working with administrative bodies, cooperating with governments, and respecting national sovereignty. As Interpol proceeds, it must put behind its contentious past in solving the new issues of the future.";
$topic1 = "Redefining the Jurisdiction of Interpol"; //Topic One
$topic2 = "Combating Online Black Markets "; //Topic Two
$pp=true; //if committee uses position papers
$bg=true; //if bg is uploaded
$staffp=true; //if staff is available
$ct="i"; //committee type?

//Director Info
//$staff[0]->setName("Michael Li ");
//$staff[0]->setPosition("Director");
//$staff[0]->setImg($placeholder);
//$staff[0]->setBio("Michael Li is a junior at Interlake High School. With multiple delegate experiences, this is his first time as a director at a major conference. Having been to many great conferences, he hopes that he brings the greatest experience possible to KINGMUN, especially to first-time delegates. Outside of MUN, Michael is found watching soccer, doing track, or collapsing under the pressure of everyday life. While disappointed he could not participate as a delegate, Michael is extremely excited to serve as the director of Interpol!");

//Chair Info
$staff[0]->setName("Thomas Trepanier ");
$staff[0]->setPosition("Director");
$staff[0]->setImg("c");
$staff[0]->setBio("Thomas Trepanier is a junior at Interlake High School who is ecstatic to be working as the chair for Interpol. When he isn’t at the boxing gym or working as a volunteer, he can most certainly be found either writing a position paper for his next MUN conference or talking to all the amazing people he’s met through MUN. His best memories at MUN have been debating the rhetoric of the bee movie, filibustering for 10 minutes by reciting puns, and playing tic tac toe to see which resolution paper would pass. When he isn’t participating in MUN, he can be found attempting to single-handedly save the environment, playing his guitar, or attempting to do both at the same time. Thomas looks forward to meeting all of you at KINGMUN 2019.");

//Ad Info
$staff[1]->setName("Alex Chang ");
$staff[1]->setPosition("Chair");
$staff[1]->setImg("ad");
$staff[1]->setBio("Alex Chang is a junior at the International Community School and is excited to be staffing for the first time as the assistant director for Interpol at KINGMUN 2019. Ever since attending PACMUN 2018, he has been drawn to the MUN community for not only its debate, but also the wit and humor of the members comprising it. While not being crushed by the workload of school, swim, or clubs, he can be found watching ForgottenWeapons and Steve1989MREInfo, catching up with seasonal weeb shows, lurking random forums, or talking until the crack of dawn with his friends. Alex is excited to welcome not only Interpol delegates, but everyone at KINGMUN 2019 for making KINGMUN 2019 possible and a great conference.");

//Ad Info
$staff[2]->setName("Mei Houts");
$staff[2]->setPosition("Assistant Director");
$staff[2]->setImg($placeholder);
$staff[2]->setBio("Mei Houts, a sophomore from the International Community School of Kirkland was pulled into this committee rather last minute and has little to no idea of what is going on. Nevertheless, she hopes she can pull through and make this a fun conference for the delegates –– which will not be a hard task seeing that Interpol is such a cool committee. In rare fleeting moments of free time, Mei enjoys long therapy sessions ranting to her cat or reading a good book. She hopes that KINGMUN 2019’s Interpol brings out the inner spy movie fan in everyone and is excited to meet everyone at the conference!");
include "../../include/committees.php";