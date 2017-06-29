<?php
class SoftwareSkill {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    function printSoftwareSkill($number) {
        echo "<div class='softwareskill-item grey'>
                                            <div class='softwareskill-item-number circle dark-grey'>" . $number . "</div>
                                            <span>" . $this->name . "</span>
                                        </div>";
    }
}
?>