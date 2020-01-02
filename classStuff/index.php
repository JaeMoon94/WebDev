<?php
    include ("include/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set Title</title>
    <link rel="stylesheet" href="css/style.css" type ="text/css">
    <script src="js/main.js"></script>
</head>
<body>  
    <?php

        $seed = "magic";
        //put regax validation with javascript. In case to pretend @#$%!@#^ signs.
        $seed = explode(" ",$seed);
        

        $filestream = fopen('5orange.txt','r') or die ('Unable to read');
        if(filesize())

        define("HOST","localhost");
        define("USER","id6987084_pally");
        define("PASS","1234567890");
        define("BASE","id6987084_palindrome");
    
        $conn = mysqli_connect(HOST,USER,PASS,BASE);
        $wc = [];
        for($i = 0; $i < strlen($seed); $i++)
        {
            $space ="";
            for($j = 0; $j < $i; $j++)
            {
                $space .= "_";
            }
            $sql = 'SELECT word FROM TABLENAME WHERE word like "'.$space.$seed[$i].'%" order by rand() limit 1;';
            $results = mysqli_query($conn, $sql);
        }

        while($rows = mysqli_fetch_array($results,MYSQL_ASSOC))
        {
            $phrase[] = $rows['word']." ";
        }

        $sql ="";
    
        foreach ($fileArray as $f)
        {
            if(srtlen($f) > 1)
            $sql = "INSERT INTO TABLENAME (NAME) VALUES ('$f');";
        }
    ?>
</body>
</html>