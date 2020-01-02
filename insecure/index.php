<?php 

$textholder;
openFile();
$ID0; $ID1; $ID2; $ID3;
$search_array;

$emptyID = false;
$emptyPassword = false;

$isMatch = false;
catchEmpty();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ID = $_POST['userID'];
    $Password = $_POST['password'];

}
$str = $search_array[$ID];
$str2 = $Password;
if(!empty($ID) and !empty($Password)){
    if($str == $str2)
    {
        $isMatch = true;
    }
}

// if(!empty($ID) and !empty($Password))
// {
//     header('location: index.php?Id='.$ID.'&Pw='.$Password);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inescure</title>
    <link rel="stylesheet" href="css/style.css" type ="text/css">
</head>
<body>
    <div class="Wrapper">
        <?php showDenied($isMatch) ?>
        <div <?php hide($isMatch) ?>>
            
            <div class="main" >
                <p class="main-instruction">
                    Please put your User ID and Password
                </p>
            </div>
            <form method="POST" action=<?=$_SERVER['PHP_SELF'];?>>
                <div class="Id">
                    USER ID : <input type="text" class="IdField" name="userID" placeholder="User ID" value ="<?php echo $ID;?>">
                </div>

                <div class = "Password">
                    PASSWORD : <input type="text" class="passwordField" name="password" placeholder="Password" value="<?php echo $Password;?>">
                </div>

                <div class ="buttons">
                    <input type="submit" class ="submitBt" value="SUBMIT">
                    <input type="reset" class ="resetBt" value="RESET">
                </div>
            </form>

            <?php showErrorMessage($emptyID, $emptyPassword); ?>
        </div>
    </div>
</body>
</html>

<?php
function openFile()
{
    global $textholder;
    $fileStream = fopen('includes/users.txt', 'r') or die("unable to read");
    $filetext = fread(($fileStream), filesize('includes/users.txt'));

    $textholder = explode('||>><<||', $filetext);

    global $ID0;
    global $ID1;
    global $ID2;
    global $ID3;

    $ID0 = explode(',', $textholder[0]);
    $ID1 = explode(',', $textholder[1]);
    $ID2 = explode(',', $textholder[2]);
    $ID3 = explode(',', $textholder[3]);

    global $search_array;
    $search_array = array($ID0[0] => $ID0[1], $ID1[0] => $ID1[1],$ID2[0] => $ID2[1], $ID3[0] =>$ID3[1]);

    

    fclose($fileStream);

}

function catchEmpty()
{
    global $emptyID;
    global $emptyPassword;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['userID'])) 
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
        echo "class = 'show'";
}

function showDenied($var)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    if($var == false)
        echo "<div class = 'showDenied'> <p class = 'denied'> ACCESS DENIED! </p> </div>";
    else if($var == true)
        {
            echo "<div class = 'showGranted'> <p calss = 'granted'> ACCESS GRANTED! </p> </div>";
            echo "<img src='img/bumb.jpg'>";  
        }
        
    }
}




    
   

?>
