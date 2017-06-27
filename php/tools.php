<?php
class Tool {
    public $img;
    public $name;
    
    public function __construct($name = "", $img = "") {
        $this->img = $img;
        $this->name = $name;
    }
    
    function printTool() {
        echo "<span class='tools-item'>
                                        <div><img class='tools-img' src='" . $this->img . "' alt='" . $this->name . "'><span class='tools-img-caption'>" . $this->name . "</span></div>
                                    </span>";
    }
}
?>