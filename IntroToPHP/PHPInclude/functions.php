<?php

    function checkForClickBait(){
            $click_bait = strtolower($_POST["clickbait_headline"]);

            $a = array(
                "scientists",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "trick",
                "shocked me",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"
            );

            $r = array(
                "so-called scientists",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be surprised by",
                "slightly improve",
                "boring",
                "normal"
            );

            $honest_headline = str_replace($a, $r, $click_bait);   
            //return an array of variables so we can access them globally
            return array($click_bait, $honest_headline);
        }

    function displayHonestHeadline($x, $y){
        echo "<strong class='text-danger'>Original HeadLine</strong>
                          <h4>".ucwords($x)."</h4><hr>";
                    
        echo "<strong class='text-success'>Honest HeadLine</strong>
              <h4>".ucwords($y)."</h4>";
        }
    

?>