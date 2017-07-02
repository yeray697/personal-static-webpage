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
$profile->softwareskills = array('0' => new SoftwareSkill("Android (Java)"),
'1' => new SoftwareSkill("Java"),
'2' => new SoftwareSkill("C#"),
'3' => new SoftwareSkill("PHP"),
'4' => new SoftwareSkill("HTML y CSS"),
'5' => new SoftwareSkill("Swift y Objective-C"),
'6' => new SoftwareSkill("Wordpress"),
'7' => new SoftwareSkill("SQL y NoSQL"),
'8' => new SoftwareSkill("Git y SVN"));
$profile->languages = array('0' => new Language("Spanish", "img/spanish.svg"),
'1' => new Language("English", "img/english.svg"));
$profile->projects = array('0' => new Project("Deafmute Helper","App Design / App Development","img/deafmutehelper.png","https://play.google.com/store/apps/details?id=com.ncatz.yeray.deafmutehelper"),
'1' => new Project("Babyguard","App Design / App Development","img/babyguard.png","https://play.google.com/store/apps/details?id=com.ncatz.babyguard"));
$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.";
$profile->timeline = array('0' => new TimeLineStudyItem("F.P. Superior Desarrollo de Aplicaciones Multiplataforma",
"Lugar: I.E.S. Portada Alta
<br>
Conocimientos: C#, Unity, HTML, CSS, XML, JSON, PHP, Android, Wordpress (gestión y
creación de plantillas), administración de sistemas (Windows Server 2008),
control de versiones, test unitarios.","2015-2017","Read official gazette...","http://www.juntadeandalucia.es/boja/2011/142/20"),
'1' => new TimeLineWorkItem("DEKRA Testing and Certification","
- Desarrollo de cuatro aplicaciones: dos en Android y dos en iOS (Swift y Objective-C)
<br>
- Despliegue de sockets en C++ entre un ordenador y un dispositivo Android conectado por ADB","Mar-Jun 2017"));
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
                                    <div class="section-title">Software Skills</div>
                                    <?php $profile->printSoftwareskills(); ?>
                                </div>
                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Skills</div>
                                    <?php $profile->printSkills();?>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Language</div>
                                    <?php $profile->printLanguages();?>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Tools</div>
                                    <?php $profile->printTools();?>
                                </div>

                                <div class="col s12">
                                    <div class="section-title margin5">Projects</div>
                                    <div class="projects">
                                        <?php $profile->printProjects(); ?>
                                    </div>
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