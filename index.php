<?php include_once "php/profile.php"; 
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
$profile->skills; //Array
$profile->tools; //Array
$profile->projects; //Array
$profile->language; //Array
$profile->interests; //Array
$profile->timeline; //Array
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
                    <!-- <div class="margin5 center-item">    
                        <div class="clickable img-circle">
                            <img src="img/me.jpg" alt="Yo" class="">
                        </div>
                    </div>
                    <div class="name">Yeray Ruiz Juárez</div>
                    <div class="info center-item">
                        <div class="moreinfo left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M12 6c1.11 0 2-.9 2-2 0-.38-.1-.73-.29-1.03L12 0l-1.71 2.97c-.19.3-.29.65-.29 1.03 0 1.1.9 2 2 2zm4.6 9.99l-1.07-1.07-1.08 1.07c-1.3 1.3-3.58 1.31-4.89 0l-1.07-1.07-1.09 1.07C6.75 16.64 5.88 17 4.96 17c-.73 0-1.4-.23-1.96-.61V21c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-4.61c-.56.38-1.23.61-1.96.61-.92 0-1.79-.36-2.44-1.01zM18 9h-5V7h-2v2H6c-1.66 0-3 1.34-3 3v1.54c0 1.08.88 1.96 1.96 1.96.52 0 1.02-.2 1.38-.57l2.14-2.13 2.13 2.13c.74.74 2.03.74 2.77 0l2.14-2.13 2.13 2.13c.37.37.86.57 1.38.57 1.08 0 1.96-.88 1.96-1.96V12C21 10.34 19.66 9 18 9z"/>
                            </svg> October 6th, 1997
                        </div>
                        <div class="moreinfo left"><i class="material-icons">phone</i> +34 620 94 10 70</div>
                        <div class="moreinfo left"><i class="material-icons">email</i> yeray.1997.yr@gmail.com</div>
                        <div class="moreinfo left"><i class="material-icons">web</i> <a href="https://ncatz.com">ncatz.com</a></div>
                        <div class="moreinfo left">
                            <a href="https://github.com/yeray697/"><img src="img/github-128.png" alt="github" class="img-contact highlight"></img></a>
                            <a href="https://www.linkedin.com/in/yeray-ruiz-ju%C3%A1rez-b7384a11a/"><img src="img/linkedin-128.png" alt="linkedin" class="img-contact highlight"></img></a>
                        </div>
                    </div>
                    -->
                </div>
                <div class="col s12 m9 right-container border-dotted-left">
                    <div class="row">
                        <div class="col m12 l6">
                            <div class="section-title">Education and experience</div>
                            <section id="cd-timeline" class="cd-container">
                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-work">
                                        <img src="img/work.svg" alt="work">
                                    </div> <!-- cd-timeline-img -->

                                    <div class="cd-timeline-content">
                                        <h2>Title of section 1</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                        <a href="#0" class="cd-read-more">Read more</a>
                                        <span class="cd-date">Jan 14</span>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-study">
                                        <img src="img/study.svg" alt="study">
                                    </div> <!-- cd-timeline-img -->

                                    <div class="cd-timeline-content">
                                        <h2>Title of section 2</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                        <a href="#0" class="cd-read-more">Read more</a>
                                        <span class="cd-date">Jan 18</span>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-work">
                                        <img src="img/work.svg" alt="work">
                                    </div> <!-- cd-timeline-img -->

                                    <div class="cd-timeline-content">
                                        <h2>Title of section 3</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                                        <a href="#0" class="cd-read-more">Read more</a>
                                        <span class="cd-date">Jan 24</span>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-work">
                                        <img src="img/work.svg" alt="work">
                                    </div> <!-- cd-timeline-img -->

                                    <div class="cd-timeline-content">
                                        <h2>Title of section 4</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                        <a href="#0" class="cd-read-more">Read more</a>
                                        <span class="cd-date">Feb 14</span>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-study">
                                        <img src="img/study.svg" alt="study">
                                    </div> <!-- cd-timeline-img -->

                                    <div class="cd-timeline-content">
                                        <h2>Title of section 5</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                                        <a href="#0" class="cd-read-more">Read more</a>
                                        <span class="cd-date">Feb 18</span>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->

                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-study">
                                        <img src="img/study.svg" alt="study">
                                    </div> <!-- cd-timeline-img -->

                                    <div class="cd-timeline-content">
                                        <h2>Final Section</h2>
                                        <p>This is the content of the last section</p>
                                        <span class="cd-date">Feb 26</span>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->
                            </section> <!-- cd-timeline -->
                        </div>
                        <div class="col m12 l6 border-dotted-left-two">
                            <div class="row">
                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Skills</div>
                                    <div class="row">
                                        <div class="col m12 l4 xl3">
                                            Skill #1
                                        </div>
                                        <div class="col m12 l8 xl9">
                                            <div class="grey progress-bar">
                                                <div class="dark-grey progress-bar-progress" style="width:25%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m12 l4 xl3">
                                            Skill #2
                                        </div>
                                        <div class="col m12 l8 xl9">
                                            <div class="grey progress-bar">
                                                <div class="dark-grey progress-bar-progress" style="width:55%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col m12 l4 xl3">
                                            Skill #3
                                        </div>
                                        <div class="col m12 l8 xl9">
                                            <div class="grey progress-bar">
                                                <div class="dark-grey progress-bar-progress" style="width:75%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Tools</div>
                                    <span class="tools-item">
                                        <div><img class="tools-img" src="img/visual-studio.svg" alt="Visual studio"><span class="tools-img-caption">Visual Studio</span></div>
                                        
                                    </span>
                                    <span class="tools-item">
                                        <div><img class="tools-img" src="img/android-studio.svg" alt="Android studio"><span class="tools-img-caption">Android studio</span></div>
                                    </span>
                                    <span class="tools-item">
                                        <div><img class="tools-img" src="img/unity.svg" alt="Unity"><span class="tools-img-caption">Unity</span></div>
                                    </span>
                                    <span class="tools-item">
                                        <div><img class="tools-img" src="img/eclipse.svg" alt="Eclipse"><span class="tools-img-caption">Eclipse</span></div>
                                    </span>
                                    <span class="tools-item">
                                        <div><img class="tools-img" src="img/photoshop.svg" alt="Photoshop"><span class="tools-img-caption">Photoshop</span></div>
                                    </span>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Projects</div>
                                </div>

                                <div class="col s12 border-dotted-bottom">
                                    <div class="section-title">Language</div>
                                </div>

                                <div class="col s12">
                                    <div class="section-title">Interests</div>
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