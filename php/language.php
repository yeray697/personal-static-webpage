<?php
class Language {
    public $language;
    public $img;

    public function __construct($language, $img) {
        $this->img = $img;
        $this->language = $language;
    }

    function printLanguage() {
        echo "<div class='language-item'>
                                        <div class='text-box'>
                                            <h4>" . $this->language . "</h4>
                                        </div>
                                        <img src='" . $this->img . "'/>
                                    </div>";
    }
}
?>