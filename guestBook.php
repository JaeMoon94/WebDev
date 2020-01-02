<?php

define("HOST","localhost");
define("USER","id6987084_pally");
define("PASS","1234567890");
define("BASE","id6987084_palindrome");

$conn = mysqli_connect(HOST,USER,PASS,BASE);

if(!empty($_POST['guestName']) && !empty($_POST['address'])){
    $username = $_POST['guestName'];
    $mailAddress = $_POST['address'];


    $sql = "INSERT INTO register(USERNAME, email) VALUES ('$username','$mailAddress');";
    $result = mysqli_query($conn,$sql);

    
}
$selectQuery = "SELECT * FROM register;";
$result_2 = mysqli_query($conn,$selectQuery);



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Guest BOOK</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style-1.css" />
</head>
<body>
    <div class="welcome">
        <h1>Welcome! <?php echo $username ?><h1>
        <h2>Thanks for visiting my web page!<h2><br>
        <h1> List of people who visited!</h1>
    </div>
    <div class="list">
        <ul>
            <?php showList($result_2);?>
        </ul>
    </div>
    <div class="return">
        <button type="button"><a href="index.php">Go Back!</a></button>
    </div>
    <embed src="shooting_stars.mp3" autostart="true" loop = "true">
</body>
</html>

<?php
    function showList($sql)
    {
        while($val = mysqli_fetch_array($sql,MYSQLI_ASSOC))
        {
            echo '<li> '.$val['USERNAME'].' | '.$val['email'].'</li>';
        }
    }

?>