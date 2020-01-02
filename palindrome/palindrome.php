<?php
    
    include("include/function.php"); 
    //Global variables 
    $wordCount = 0;
    $wordToFind = "";
    $palCount = 0;
    $ec = 0;
    if(!empty($_POST['search-word']) )
    { 
        $wordToFind = $_POST['search-word'];
    }
    else{ $ec += 1;}
    
    if(!empty($_POST['pal-count']))
    {
        $palCount = $_POST['pal-count'];
    }
    else{$ec += 2;}
    if($ec)
    {
        header('location: index.php? w='.$wordToFind.'&pc='.$palCount.'&ec='.$ec);
    }
    
?>

<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
    <body>
    <h1 class = "main-heading"><a herf = "index.php"> The World of Palindrome</h1>
        <?php
            if(!isset($_POST['pal']))
            {
                echo '<form action = "" method = "post">';
                    echo '<input type = "hidden" name = "search-word" value = "'.$wordToFind.'">';
                    echo '<input type = "hidden" name = "pal-count" value = "'.$palCount.'">';
                    
                    for($x = 0; $x < $palCount; $x++)
                    {
                        echo '<input type = "text" name = "pal[]">';
                    }

                    echo '<input type = "reset">';
                    echo '<input type = "submit">';
                echo '</form>';
            }
            else 
            {
                //palindrome Array
                $palindromes = $_POST['pal'];

                display($palindromes,$wordToFind);
                
                //Display instances of word to Find
                echo "<p class = 'footer-message'>The numnber of Palindromes with at least one instances of the word \"". 
                ucfirst($wordToFind) . "\" : $wordCount</p>";
            }
        ?>
    </body>
</html>

<?php

    function display($phrases,$word)
    {
        global $wordCount;
        echo"<div class='facts-wrapper'>";
            for($i = 0; $i < sizeof($phrases); $i++)
            {     
                echo "<div class='facts'>";
                    echo "<h1>Facts about \"$phrases[$i]\"</h1>";
                    echo "<ul>";
                        echo "<li> It is " . strlen($phrases[$i]) . " characters long</li>";
                        echo "<li> It's word count is " .str_word_count($phrases[$i]) . "</li>";
                        echo "<li> Palindrom status : " . (isPalindrome($phrases[$i]) ? "<span class='good'>True</span>" : "<span class = 'bad'>False</span>") ."</li>";
                    echo "</ul>";
                echo "</div>";

                #if(stripos($phrases[$i],$word) !== false) 
                if(stripos(strtolower($phrases[$i]),strtolower($word)) !== false) 
                {
                    $wordCount++;
                }
            }
        echo"</div>";
       
    }

    function isPalindrome($testWord)
    {
        $testWord = str_replace(" ","",$testWord);
        $testWord = str_replace("'","",$testWord);
        $testWord = str_replace("?","",$testWord);
        $testWord = str_replace(".","",$testWord);
        $testWord = str_replace(",","",$testWord);
        $testWord = str_replace("!","",$testWord);

        $testWord = strtolower($testWord);

        $reversedWord = strrev($testWord);
        if($reversedWord == $testWord) return true;
        return false;
    }
?>