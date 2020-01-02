<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jae's best top 10 albums</title>
    <link rel="stylesheet" href="css/style.css" type ="text/css">
</head>
    <body class = "music"> 
    <?php 
        echo "<div class = 'head2'> List of the Albums </div>";
            
                $albumLists = array();
                    $albumLists = $_POST['album'];
                showList($albumLists);

         
        echo "<div class = 'imgcontainer'>";
            //img1
            echo "<div class = 'slides fade'>";
                echo"<img src ='img/whale.jpg' style = 'width : 100%' alt='whale img'>";
            echo "</div>";
            //img2
            echo "<div class = 'slides fade'>";
                echo"<img src ='img/moon.jpg' style = 'width : 100%' alt='moon img'>";
            echo "</div>";
            //img3
            echo "<div class = 'slides fade'>";
                echo"<img src ='img/firework.jpg' style = 'width : 100%' alt='fireword img'>";
            echo "</div>";
            //img4
            echo "<div class = 'slides fade'>";
                echo"<img src ='img/bird.jpg' style = 'width : 100%' alt='bird img'>";
            echo "</div>";
        echo "</div>";
    ?>
    <script src="js/script.js"></script>
    </body>
</html>


<?php

    function showList($albums)
    {
        echo "<div class = 'list'>";
            echo "<table>";
                for($i = 0; $i < sizeof($albums); $i++)
                {
                    echo"<tr>";
                    echo"<td>$albums[$i]</td>";
                    echo"</tr>";
                }
            echo"</table>";
        echo "</div>";
    }
?>


