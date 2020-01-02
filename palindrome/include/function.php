<?php 
    
    function displayError($ec)
    {
        $retVal = "";
        switch($ec)
        {
            case 3: $retVal .= '<p class = warning">Please enter a search term.</p>';
            case 2: $retVal .= '<p class = warning">Please select a number of palindormes</p>'; break;
            case 1: $retVal .= '<p class = warning">Please enter a search term.</p>'; break;
        }
        
        return $retVal;
    }

    function displaySelect($mp,$pc)
    {

        $returnStuff = '<select name = " pal-count"><option value = ""';
            if(!$pc || $pc > $mp) $returnStuff .= ' selected';
            $returnStuff .= ' disabled> How Many Palindromes </option>';
            for($x = 1; $x <= $mp; $x++)
            {
                if($x == 1) $output = 'Palindrome'; else $output = 'Palindromes';
                if($pcvalue == $x) $returnStuff .= '<option selected value = "'.$x.'">'.$x. ' '. $output. '</option>';
                else $returnStuff .= '<option value = "'.$x.'">'. ' '. $output. '</option>';
            }
            $returnStuff .= "</select>";

        return $returnStuff;
    }

    function getvariable()
    {
        global $wvalue;
        global $pcvalue;
        global $ecvalue;

        if(isset($_GET['v'])) 
        {
            $displayError = true;
        }
        else $displayError = false;

        if(isset($_GET['w'])) $wvalue = $_GET['w'];
        if(isset($_GET['pc']))  $pcvalue = $_GET['pc'];
        if(isset($_GET['ec'])) $ecvalue = $_GET['ec'];
    }


?>