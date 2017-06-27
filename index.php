<?php
include_once "php/profile.php";
include_once "php/skills.php";
include_once "php/tools.php";
include_once "php/timeline.php";

$profile = new Profile();
$profile->imgProfile="img/me.jpg";
$profile->name = "Yeray Ruiz Juárez";
$profile->birthday = "October 6th, 1997";
$profile->phone = "+34 620 94 10 70";
$profile->email = "yeray.1997.yr@gmail.com";
$profile->web = "ncatz.com";
$profile->github = "https://github.com/yeray697/";
$profile->linkedin = "https://www.linkedin.com/in/yeray-ruiz-ju%C3%A1rez-b7384a11a";
//TODO
$profile->skills = array('0' => new Skill("Máquina","100"),
'1' => new Skill("Fiera","100"),
'2' => new Skill("Crack","100"),
'3' => new Skill("Mastodonte","100"),
'4' => new Skill("Astronauta","100"));

$profile->tools = array('0' => new Tool("Visual Studio","img/visual-studio.svg"),
'1' => new Tool("Android Studio","img/android-studio.svg"),
'2' => new Tool("Unity","img/unity.svg"),
'3' => new Tool("Eclipse","img/eclipse.svg"),
'4' => new Tool("Photoshop","img/photoshop.svg"));
$profile->projects; //Array
$profile->language; //Array
//$title, $description,$date,$btnText="",$btnLink=""
$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.";

$profile->timeline = array('0' => new TimeLineStudyItem("Title of section 1",$description,"Jan 14"),
'1' => new TimeLineWorkItem("Title of section 2",$description,"Jan 15","Read more...","https://www.google.es"),
'2' => new TimeLineStudyItem("Title of section 3",$description,"Jan 16","Read more...","https://www.google.es"),
'3' => new TimeLineWorkItem("Title of section 4",$description,"Jan 17"),
'4' => new TimeLineStudyItem("Title of section 5",$description,"Jan 18","Read more...","https://www.google.es"));
?>
<html>  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
	    <script src="https://codyhouse.co/demo/vertical-timeline/js/modernizr.js"></script> <!-- Modernizr -->
    </head>
    <body>
        <div class="main">
            <div class="row">
                <div class="col s12 m3 left-container center">
                    <?php $profile->printInfo();?>
                </div>
                <div class="col s12 m9 right-container border-dotted-left">
                    <div class="row">
                        <div class="col m12 l6">
                            <div class="section-title">Education and experience</div>
                            <section id="cd-timeline" class="cd-container">
                                <?php $profile->printTimeline();?>
                            </section> <!-- cd-timeline -->
                        </div>
                        <div class="col m12 l6 border-dotted-left-two">
                            <div class="row">
                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Skills</div>
                                    <?php $profile->printSkills();?>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Tools</div>
                                    <?php $profile->printTools();?>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Projects</div>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Language</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/main.js"></script> <!-- Resource jQuery -->
    </body>
</html>