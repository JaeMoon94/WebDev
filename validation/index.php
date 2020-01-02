<?php
    $emptyContact = false;
    $emptyMail = false;

    holdValue();
    catchEmpty();

    isValidate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Validation</title>
    <link rel="stylesheet" href="css/style.css" type ="text/css">
    <script src="main.js"></script>
</head>
<body>
    <div class = "home">
        <a href="index.php"><h1 class="hometitle"> DATA validation </h1></a>
    </div>
    <div class="wrapper">
        <div class="instruction-1">
            <p class="number">
                Please type your contact number <br>
                Followed by this format<br>
                (xxx)xxx-xxxx
            </p>
        </div>
        <form method="POST" action="process.php">
            <div class="numberField">
                Phone number :
                <input type="text" name ="contact" <?php isContactValidate() ?> placeholder="(000)000-0000" value="<?php echo $contactNumber;?>">
            </div>
            <div class="instruction-2">
                <p class="email">
                    Please put your email
                </p>
            </div>
            <div class="mailField">
                E-mail address:
                <input type = "text" name="Email" <?php isEmailValidate()?> value="<?php echo $EmailAddress;?>">
            </div>
            <?php
                echo "<div class = 'errorMessage'>";
                    showErrorMessage($emptyContact,$emptyMail);
                    if(!$isEmailValidate) echo "<p class = 'invalidEmail'> Your E-mail is invalid. </p>";
                    if(!$isContactVlaidate) echo "<p class = invalidContact> Your Contact is invalid. </p>";
                echo "</div>"
            ?>
            <div class ="buttons">
                <input type="submit" class ="submitBt" value="SUBMIT" >
                <input type="reset" class ="resetBt" value="RESET" >
            </div>
            
        </form>
    </div>
    
</body>
</html>

<?php
    function showErrorMessage($val1,$val2)
    {
        if($val1 == true && $val2 == true)
        {
            echo "<p class = 'emptyContact'> Your Contact field is Empty please put contact number. </p>";
            echo"<p class = 'emptyEmail'> Your E-mail field is Empty please put Email Address. </p>";
        }
        else if($val1)
        {
            echo "<p class = 'emptyContact'> Your Contact field is Empty please put contact number. </p>";
        }
        else if($val2)
        {
            echo"<p class = 'emptyEmail'> Your E-mail Field is Empty please put Email Address. </p>";
        }
    }

    function catchEmpty()
    {
        global $emptyContact;
        global $emptyMail;
        if($_GET['v'] == 'nullfields') 
        {
            $emptyContact = true;
            $emptyMail = true;
        }
        else if($_GET['v'] == 'nullContact') 
        {
            $emptyContact = true;
        }
        else if($_GET['v'] == 'nullMail') 
        {
            $emptyMail = true;
        }
    }

    function holdValue()
    {
        global $contactNumber;
        global $EmailAddress;
        if(isSet($_GET['C'])) $contactNumber = $_GET['C']; 
        if(isSet($_GET['M'])) $EmailAddress = $_GET['M']; 
    }


    function isEmailValidate()
    {
        if($_GET['im'] == 'invaildEmail') echo "class = 'invalidMailField'";
    }
    function isContactValidate()
    {
        if($_GET['ic'] == 'invaildContact') echo "class = 'invalidContactField'";
    }

    function isValidate()
    {
        global $isContactVlaidate;
        global $isEmailValidate;

        if($_GET['ic'] == 'invaildContact') $isContactVlaidate = false; 
        else $isContactVlaidate = true;
        if($_GET['im'] == 'invaildEmail') $isEmailValidate = false;
        else $isEmailValidate = true;
    }
?>


