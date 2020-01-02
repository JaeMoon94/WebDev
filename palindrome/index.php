<?php
    include('include/function.php');
    getvariables();
    $maxpal = 10;
?>

<!DOCTYPE html>
<html>

    <?php include('include/head.php'); ?>
<body>
    <h1 class = "main-heading"> Welcome to the world of Palindromes</h1>
    <div class = form-wrapper>
        <form method = "post" action ="palindrome.php">
            <input name = "search-word" type = "text" placeholder = "Enter a Search Word" value = "<?php echo $wvalue;?>">
            <?php echo displaySelect($maxpal,$pcvalue);?>
            <input type = "reset">
            <input type = "submit">
        </form>
        <?php 
            echo displayError($ecvalue);
        ?>
        
    </div>
</body>
</html>




