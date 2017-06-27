<?php
class TimelineItem {
    public $title;
    public $description;
    public $date;
    public $btnText;
    public $btnLink;
    public $circleImg;
    public $circleClass;


    public function __construct($title, $description,$date,$btnText="",$btnLink="") {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->btnText = $btnText;
        $this->btnLink = $btnLink;
    }

    function printTimeLineItem() {
        echo "<div class='cd-timeline-block'>";
        echo "  <div class='cd-timeline-img " . $this->circleClass . "'>
                                        <img src='" . $this->circleImg . "'>
                                    </div> <!-- cd-timeline-img -->

                                    <div class='cd-timeline-content'>
                                        <h2>" . $this->title . "</h2>
                                        <p>" . $this->description . "</p>";
                                        if (isset($this->btnText) && (strlen($this->btnText) > 0)) {
                                            echo "<a href='" . $this->btnLink . "' class='cd-read-more'>" . $this->btnText . "</a>";
                                        }
                                        echo "<span class='cd-date'>" . $this->date . "</span>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->";
    }
}

class TimeLineWorkItem extends TimeLineItem{
    public function __construct($title, $description,$date,$btnText="",$btnLink="") {
        parent::__construct($title, $description,$date,$btnText,$btnLink);
        $this->circleImg = "img/work.svg";
        $this->circleClass = "cd-work";
    }
}

class TimeLineStudyItem extends TimeLineItem{
    public function __construct($title, $description,$date,$btnText="",$btnLink="") {
        parent::__construct($title, $description,$date,$btnText,$btnLink);
        $this->circleImg = "img/study.svg";
        $this->circleClass = "cd-study";
    }
}
?>