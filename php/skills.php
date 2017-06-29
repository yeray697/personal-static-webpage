<?php
class Skill {
    public $name;
    public $percent;
    
    public function __construct($name = "", $percent = "0") {
        $this->name = $name;
        $this->percent = $percent;
    }

    function printSkill() {
        echo "
                                    <div class='row'>
                                        <div class='col s12 m12 l4 xl3'> 
                                            " . $this->name . "
                                        </div> <!-- <div class='col s12 m12 l4 xl3'> -->
                                        <div class='col s12 m12 l8 xl9'>
                                            <div class='light-grey progress-bar'>
                                                <span class='dark-grey progress-bar-progress' style='width:" . $this->percent . "%'></span>
                                            </div> <!-- <div class='light-grey progress-bar'> -->
                                        </div> <!-- <div class='col s12 m12 l8 xl9'> -->
                                    </div> <!-- <div class='row'> -->";
    }
}
?>