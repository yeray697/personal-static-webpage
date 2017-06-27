<?php
class Skill {
    public $name;
    public $percent;
    
    public function __construct($name = "", $percent = "0") {
        $this->name = $name;
        $this->percent = $percent;
    }

    function printSkill() {
        echo "<div class='row'>
            <div class='col m12 l4 xl3'>
                                            " . $this->name . "
                                        </div>
                                        <div class='col m12 l8 xl9'>
                                            <div class='grey progress-bar'>
                                                <div class='dark-grey progress-bar-progress' style='width:" . $this->percent . "%'></div>
                                            </div>
                                        </div>
                                    </div>";
    }
}
?>