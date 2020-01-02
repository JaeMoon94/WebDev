<?php
    $url = substr ($_SERVER['PHP_SELF'], 13, -4);
    $title = array('index' => 'Palindrome site', 'palindrome' => 'Palindrome Processor');

    echo '<head>
		<title>'.$title[$url].'</title>
		<link href= "css/style.css" rel = "stylesheet" type = "text/css">
	</head>';
?>