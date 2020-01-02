<?php

    $exist = false;
    $wrongcode = false;
    if(isSet($_POST['id']))$userId = $_POST['id'];
    if(isSet($_POST['pass']))$password = $_POST['pass'];
    if(isSet($_POST['scode']))$code = $_POST['scode'];

    define("HOST","localhost");
    define("USER","id6987084_pally");
    define("PASS","1234567890");
    define("BASE","id6987084_palindrome");

    $conn = mysqli_connect(HOST,USER,PASS,BASE);

    if(isset($_POST['input'])){
        $query = "SELECT CODE FROM secretcode WHERE CODE = '" .$code. "';";
        $results = mysqli_query($conn, $query);
        //checks if user input "rawhide"
        if(mysqli_num_rows($results) > 0){
            $isExist = "SELECT USERNAME FROM userInfo WHERE USERNAME = '" .$userId. "';";
            $results = mysqli_query($conn, $isExist);
            //checks if username already exists
            if(mysqli_num_rows($results) > 0){
                $exist = true;
            }
            else {
                $insert = "INSERT INTO userInfo (USERNAME, PASSCODE) values ('".$userId."', password('".$password."'));";
                $results = mysqli_query($conn, $insert);
            }
        }
        else $wrongcode = true;
    }

    mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Creating Account</title>
        <link rel="stylesheet" href="css/style-1.css" type ="text/css">
        <script src="js/main.js"></script>
    </head>
    <body> 

        <div class="gif">
            <img src="https://media.giphy.com/media/l41YouCUUcreUabHW/giphy.gif"  alt="" width="650">
        </div> 
        <div class="wrapper" id="show" >

        <div class="welcome">
            Join US <br>
            <p class="free">It's free and always will be</p>
        </div>

        <form method = "POST" action = <?=$_SERVER['PHP_SELF'];?>>
    
            <div class = "Id">
                <input type = "text" id="idfield" name="id" placeholder="username" value="<?php echo $userId?>">
            </div>

            <div class = "password">
                <input type="password" id="passwordField" name="pass" oninput="validate(this);" placeholder="New Password">
            </div>

            <div class = "verify">                        
                <input type = "password" id="verifyField" name ="vpass" oninput="validatePassword(this);" placeholder="Verify your password">
            </div>

            <div class = "code">
                <input type="password" name="scode" placeholder="Put your Secret Code" value="<?php echo $code?>">
            </div>

            <div class = "buttons">
                <input type="submit" name="input" onclick="hide();" id="submitbutton"  class ="submitBt" value="Create Account" disabled>
                <input type="reset" class ="resetBt" value="Reset">
            </div>
        </form>

        <p id="password"></p>
        <?php 
            showErrorMessage($exist);
            showWrongCode($wrongcode);
        ?>

    </div>
</body>
</html>

<?php

function showErrorMessage($var)
{
    if($var == true)
    echo "<p class = 'exist'> Your user name is already exist </p>";
}
function showWrongCode($var)
{
    if($var == true)
    echo "<p class = 'wrong'> Secret Code is Wrong! </p>";
}
?>
