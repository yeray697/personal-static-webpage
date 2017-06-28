<?php
class Project {
    public $img;
    public $title;
    public $link;
    public $description;

    public function __construct($title, $description, $img, $link) {
        $this->title = $title;
        $this->description = $description;
        $this->img = $img;
        $this->link = $link;
    }
    function printProject() {
        echo "
                                        <a href='" . $this->link . "'>
                                            <div class='project-item center'>
                                                <div class='center-item'>
                                                    <img src='" . $this->img . "' alt='" . $this->title . "'/><br>
                                                    <div class='project-item-title'>" . $this->title . "</div><br>
                                                    <div class='project-item-info'>" . $this->description . "</div>
                                                </div>
                                            </div>
                                        </a>";
    }
}
?>