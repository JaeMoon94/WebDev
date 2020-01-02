<?php
	function getVariables(){
		global $wvalue;
		global $pcvalue;
		global $ecvalue;

		if(isset($_GET['v']) && $_GET['v'] == 'false'){$displayError=true;}
		else{$displayError=false;}
		
		if(isset($_GET['w'])) $wvalue = $_GET['w']; 
		if(isset($_GET['pc'])) $pcvalue = $_GET['pc'];
		if(isset($_GET['ec'])) $ecvalue = $_GET['ec'];
	}

	function displayError($ec){
		$retval = "";
		switch($ec)
		{
			case 3: $retval .= '<p class="warning">please enter a search term.</p>';
			case 2: $retval .= '<p class="warning">please select a number of palindromes.</p>'; break;
			case 1: $retval .= '<p class="warning">please enter a search term.</p>'; break;
		}
		return $retval;
	}

	function displaySelect($maxpal, $pcvalue){
		$returnStuff = '<select name ="pal-count"><option value=""';
		if (!$pcvalue || $pcvalue > $maxpal) $returnStuff .= ' selected'; 
		$returnStuff .= ' disabled>how many palindromes?</option>';
		for($x = 1; $x <= $maxpal; $x++){
			if($x == 1) $output = 'palindrome'; else $output = 'palindromes';

			if($pcvalue == $x) $returnStuff .= '<option selected value ="'.$x.'">'.$x. ' ' .$output. '</option>';
			else $returnStuff .= '<option value="'.$x.'">'.$x.' '.$output. '</option>';
		}	
		$returnStuff .= '</select>';
		return $returnStuff;
	}			
?>