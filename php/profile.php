<?php
include_once "skills.php";
include_once "tools.php";
include_once "timeline.php";
include_once "project.php";
include_once "softwareskill.php";
include_once "language.php";

class Profile {
    public $imgProfile;
    public $name;
    public $birthday;
    public $phone;
    public $email;
    public $web;
    public $github;
    public $linkedin;
    public $skills; //Array
    public $tools; //Array
    public $timeline; //Array
    public $projects; //Array
    public $softwareskills; //Array
    public $languages; //Array

    function printName() {
        if(isset($this->name))
        echo "<div class='name'>" . $this->name . "</div>";
    }

    function printBirthday() {
        if (isset($this->birthday))
            echo "<div class='moreinfo left'>
                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
                    <path d='M12 6c1.11 0 2-.9 2-2 0-.38-.1-.73-.29-1.03L12 0l-1.71 2.97c-.19.3-.29.65-.29 1.03 0 1.1.9 2 2 2zm4.6 9.99l-1.07-1.07-1.08 1.07c-1.3 1.3-3.58 1.31-4.89 0l-1.07-1.07-1.09 1.07C6.75 16.64 5.88 17 4.96 17c-.73 0-1.4-.23-1.96-.61V21c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-4.61c-.56.38-1.23.61-1.96.61-.92 0-1.79-.36-2.44-1.01zM18 9h-5V7h-2v2H6c-1.66 0-3 1.34-3 3v1.54c0 1.08.88 1.96 1.96 1.96.52 0 1.02-.2 1.38-.57l2.14-2.13 2.13 2.13c.74.74 2.03.74 2.77 0l2.14-2.13 2.13 2.13c.37.37.86.57 1.38.57 1.08 0 1.96-.88 1.96-1.96V12C21 10.34 19.66 9 18 9z'/>
                </svg> " . $this->birthday . "
                </div>";
    }
    function printImgProfile() {
        if (isset($this->imgProfile))
                echo "<div class='margin5 center-item'>    
                        <div class='clickable img-circle'>
                            <img src='" . $this->imgProfile . "' alt='Yo' class=''>
                        </div>
                    </div>";
    }

    function printPhone() {
        if (isset($this->phone))
            echo "<div class='moreinfo left'><i class='material-icons'>phone</i> " . $this->phone . "</div>";
    }

    function printMail() {
        if (isset($this->email))
            echo "<div class='moreinfo left'><i class='material-icons'>email</i> " . $this->email . "</div>";
    }

    function printWeb() {
        if (isset($this->web))
            echo "<div class='moreinfo left'><i class='material-icons'>web</i> <a href='" . $this->web . "'>" . $this->web . "</a></div>";
    }

    function printContact() {
        echo "<div class='moreinfo left'>";
        if (isset($this->github))
            echo "  <a href='" . $this->github . "'><img src='img/github-128.png' alt='github' class='img-contact highlight'></img></a>";
        if (isset($this->linkedin))
            echo "  <a href='" . $this->linkedin . "'><img src='img/linkedin-128.png' alt='linkedin' class='img-contact highlight'></img></a>";
        echo "</div>";
    }

    function printAdditionalInfo() {
        echo "<div class='info center-item'>";
        self::printBirthday();
        self::printPhone();
        self::printMail();
        self::printWeb();
        self::printContact();
        echo "</div>";
    }

    function printInfo() {
        self::printImgProfile();
        self::printName();
        self::printAdditionalInfo();
    }

    function printSkills() {
        if (isset($this->skills)){
            foreach ($this->skills as $skill) {
                $skill->printSkill();
            }
        }
    }

    function printTools() {
        if (isset($this->tools)){
            foreach ($this->tools as $tool) {
                $tool->printTool();
            }
        }
    }

    function printTimeline() {
        if (isset($this->timeline)){
            foreach ($this->timeline as $item) {
                $item->printTimeLineItem();
            }
        }
    }

    function printProjects() {
        if (isset($this->projects)){
            foreach ($this->projects as $item) {
                $item->printProject();
            }
        }
    }
    
    function printSoftwareskills() {
        if (isset($this->softwareskills)){
            foreach ($this->softwareskills as $index=>$value) {
                $value->printSoftwareskill(($index + 1));
            }
        }
    }

    
    function printLanguages() {
        if (isset($this->languages)){
            foreach ($this->languages as $value) {
                $value->printLanguage();
            }
        }
    }
}
?>