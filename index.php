<?php
include_once "php/profile.php";

$profile = new Profile();
$profile->imgProfile="img/me.jpg";
$profile->name = "Yeray Ruiz Juárez";
$profile->birthday = "October 6th, 1997";
$profile->phone = "+34 620 94 10 70";
$profile->email = "yeray.1997.yr@gmail.com";
$profile->web = "ncatz.com";
$profile->github = "https://github.com/yeray697/";
$profile->linkedin = "https://www.linkedin.com/in/yeray-ruiz-ju%C3%A1rez-b7384a11a";
$profile->skills = array('0' => new Skill("Máquina","100"),
'1' => new Skill("Fiera","95"),
'2' => new Skill("Crack","97"),
'3' => new Skill("Mastodonte","98"),
'4' => new Skill("Astronauta","99"),
'4' => new Skill("Feka","0"));
$profile->tools = array('0' => new Tool("Visual Studio","img/visual-studio.svg"),
'1' => new Tool("Android Studio","img/android-studio.svg"),
'2' => new Tool("Unity","img/unity.svg"),
'3' => new Tool("Eclipse","img/eclipse.svg"),
'4' => new Tool("Photoshop","img/photoshop.svg"));
$profile->projects = array('0' => new Project("House of Children","Web Design / Responsive Development","http://www.denisechandler.com/images/houseofchildren.png",""),
'1' => new Project("House of Children","Web Design / Responsive Development","http://www.denisechandler.com/images/houseofchildren.png",""),
'2' => new Project("House of Children","Web Design / Responsive Development","http://www.denisechandler.com/images/houseofchildren.png",""),
'3' => new Project("House of Children","Web Design / Responsive Development","http://www.denisechandler.com/images/houseofchildren.png",""),
'4' => new Project("House of Children","Web Design / Responsive Development","http://www.denisechandler.com/images/houseofchildren.png",""));
$profile->language; //Array

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
                                    <div class="section-title margin5">Projects</div>
                                    <div class="projects">
                                        <?php $profile->printProjects(); ?>
                                    </div>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Language</div>
                                        <ul class="w3-ul w3-card-4">
                                        <li class="w3-padding-16">
                                            <span onclick="this.parentElement.style.display='none'" 
                                            class="w3-button w3-white w3-xlarge w3-right">×</span>
                                            <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
                                            <span class="w3-large">Mike</span><br>
                                            <span>Web Designer</span>
                                        </li>
                                        <li class="w3-padding-16">
                                            <span onclick="this.parentElement.style.display='none'" 
                                            class="w3-button w3-white w3-xlarge w3-right">×</span>
                                            <img src="https://www.w3schools.com/w3css/img_avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
                                            <span class="w3-large">Jill</span><br>
                                            <span>Support</span>
                                        </li>  
                                        <li class="w3-padding-16">
                                            <span onclick="this.parentElement.style.display='none'" 
                                            class="w3-button w3-white w3-xlarge w3-right">×</span>
                                            <img src="https://www.w3schools.com/w3css/img_avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:50px">
                                            <span class="w3-large">Jane</span><br>
                                            <span>Accountant</span>
                                        </li> 
                                    </ul>
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