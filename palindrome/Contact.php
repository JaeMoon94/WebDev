<?php
    $fileStream = fopen('something.txt', 'r') or die('Unable to read File');

    while(!feof($fileStream))
    {
        echo "<p>";
            echo fgets($fileStream);
        echo"</p>";

    }
    fclose($fileStream);
?>

