<?php

    //Declare vars;
    $emptyID = false;
    $emptyPassword = false;
    $isMatch = false;
    $isUnMatch = false;
    $infoList = array();

    //Database Stuffs
    //Define Some constats
    define("HOST","localhost");
    define("USER","id6987084_pally");
    define("PASS","1234567890");
    define("BASE","id6987084_palindrome");


    //Connect Data Base
    $conn = mysqli_connect(HOST,USER,PASS,BASE);


    //Create the Table
    //$sql = "CREATE TABLE userInfo (ID INT AUTO_INCREMENT PRIMARY KEY, USERNAME varchar(255), PASSCODE varchar(255));";


    //Run the query
    

    //inserting to Table
        // $sql = "INSERT INTO userInfo (USERNAME, PASSCODE) values
        //     ('beavis','password'),
        //     ('butthead','password2'),
        //     ('dana','alien'),
        //     ('fox','believe');";

    //$results = mysqli_query($conn,$sql);

    //-------------------hold values parts---------------------------//

    //declare array;
    $ID = array();
    $password = array();

    //put values into the array;

    $infosql = "SELECT * FROM userInfo";
    $result = mysqli_query($conn,$infosql);

    while($val = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        array_push($ID,$val['USERNAME']);
        array_push($password,$val['PASSCODE']);
    }

    //catch either of fields are empty or not
    catchEmpty();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $inputID = $_POST['userID'];
        $inputPassword = $_POST['password'];
    
    }

    for($i = 0; $i < sizeof($ID); $i++)
    {
        $infoList += array($ID[$i] => $password[$i]);
    }


    $str = $infoList[$inputID];
    $str2 = $inputPassword;


    if(!empty($inputID) and !empty($inputPassword))
    {
        if($str == $str2) $isMatch = true;
        else $isUnMatch = true;
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insecure</title>
    <link rel="stylesheet" href="css/style.css" type ="text/css">
</head>
    <body>
        <div class ="img2">
            <img src="img/star.jpg" width="300" alt="">
        </div>
        <div class= "img1"><img src="img/sponge.jpg" width = '300' alt=""></div>
        <div class="Wrapper">
            <?php showDenied($isUnMatch,$isMatch) ?>
            <div <?php hide($isMatch) ?>>
                
                <div class="main" >
                    <p class="main-instruction">
                        Please put your User ID and Password
                    </p>
                </div>
                <form method="POST" action=<?=$_SERVER['PHP_SELF'];?>>
                    <div class = "fields">
                        <div class="Id">
                            USER ID : <input type="text" class="IdField" name="userID" placeholder="User ID" value ="<?php echo $inputID;?>">
                        </div>

                        <div class = "Password">
                            PASSWORD : <input type="text" class="passwordField" name="password" placeholder="Password" value="<?php echo $inputPassword;?>">
                        </div>
                    </div>

                    <div class ="buttons">
                        <input type="submit" class ="submitBt" value="SUBMIT">
                        <input type="reset" class ="resetBt" value="RESET">
                    </div>

                    <button class="creatAccount" type="button" onclick="location.href = 'create-account.php'"> Create Account </button>
                </form>

                <?php showErrorMessage($emptyID, $emptyPassword); ?>
            </div>
        </div>
        
    </body>
</html>

<?php


    function catchEmpty()
    {
        global $emptyID;
        global $emptyPassword;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST['userID']) ) 
            {
                $emptyID = true;
            }
            if(empty($_POST['password'])) 
            {
                $emptyPassword = true;
            }
        }
    }

    function showErrorMessage($var1, $var2)
    {
        if($var1 and $var2)
        {
            echo "<p class = 'emptyID'> Your ID field is empty please put your user ID </p>";
            echo "<p class = 'emptyPassword'> Your Password field is empty please put your Password </p>";
        }
        else if($var1)
        {
            echo "<p class = 'emptyID'> Your ID field is empty please put your user ID </p>";
        }
        else if($var2)
        {
            echo "<p class = 'emptyPassword'> Your Password field is empty please put your Password </p>";   
        }
    }

    function hide($var)
    {
        if($var){
            echo "class='hide'";
        }
        else
            echo "class ='show'";
    }

    function showDenied($var,$var2)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
        if($var == true)
            echo "<div class = 'showDenied'> <p class = 'denied'> ACCESS DENIED! </p> </div>";
        else if($var2 == true)
            {
                echo "<div class = 'showGranted'> <p calss = 'granted'> ACCESS GRANTED! </p> </div>";
                echo "<img class = 'goodimg' src='http://i.imgur.com/BXEfg1O.gif'width = '500'>";  
            }
            
        }
    }

?>
