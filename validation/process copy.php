<?php
    $contactNumb = $_POST[contact];
    $mailAddress = $_POST[Email];
    $isContactMatch = true;
    $isEmailMatch = true;

    if(!preg_match("/([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/",$_POST[Email])) $isEmailMatch = false;
    if(!preg_match("/[(]\d\d\d[)]-\d\d\d-\d\d\d\d$/",$_POST[contact])) $isContactMatch = false;

    if($isContactMatch == false && $isEmailMatch == false)   
    {
        header('location: index.php?M='.$_POST[Email].'&im=invaildEmail&C='.$_POST[contact].'&ic=invaildContact');
    }

    else if($isEmailMatch == false )
    {
        header('location: index.php?&C='.$_POST[contact].'&M='.$_POST[Email].'&im=invaildEmail');
    }

    else if($isContactMatch == false)
    {
        header('location: index.php?C='.$_POST[contact].'&ic=invaildContact&M='.$_POST[Email]);
    }
    
    if(empty($contactNumb)&&empty($mailAddress))
    {
        header('location: index.php?v=nullfields');
    }

    else if(empty($contactNumb))
    {
        if($isEmailMatch == false)
        {
            header('location: index.php?v=nullContact&M='.$_POST[Email].'&M='.$_POST[Email].'&im=invaildEmail');
        }
        else header('location: index.php?v=nullContact&M='.$_POST[Email]);
    }
    else if(empty($mailAddress))
    {
        if($isContactMatch == false)
        {
            header('location: index.php?v=nullMail&C='.$_POST[contact].'&ic=invaildContact');
        }
        else header('location: index.php?v=nullMail&C='.$_POST[contact]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Process</title>
    <link rel="stylesheet" href="css/style-1.css" type ="text/css">
    <script src="main.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="hacker">
            <img src="img/Hacker.jpg" alt="">
        </div> 
        <?php
            echo "<div class = 'contactField'>";

                echo"<div class = 'instruction-1'>";
                    echo "Your Contact Number:";
                echo"</div>";

                echo"<p class = 'showcontact'>";
                echo "$contactNumb";
                echo "</p>";
            echo "</div>";

            echo "<div class ='mailField'>";
                echo"<div class = 'instruction-2'>";
                    echo "Your E-Mail Address:";
                echo"</div>";


                echo"<p class = 'showMail'>";
                echo "$mailAddress";
                echo"</p>";
            echo"</div>";

            echo "<div class = 'validate'>";
                echo "<p> Thanks for your personal information. </p>";
                echo "<div class = 'start'> Your E-mail account will be hacked by us</div>";
            echo "</div>";
        ?>

        <div class="back">
            <a href="index.php"><h1>OH NO! TAKE ME BACK!!</h1></a>
        </div>
    </div>
</body>
</html>

