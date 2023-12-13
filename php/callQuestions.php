<?php  
    $numberQuestion = 0;
    function callQuestion($n) {
        include("questions.php");
        return array( $questions[$n] );
    }
?>