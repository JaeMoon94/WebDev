Halo

<?php

//Define Some constats
define("HOST","localhost");
define("USER","id6987084_pally");
define("PASS","1234567890");
define("BASE","id6987084_palindrome");



//Connect to the database
$conn = mysqli_connect(HOST,USER,PASS,BASE);

//WRITE A QUERY
$sql = "CREATE TABLE palindrome (ID INT AUTO_INCREMENT PRIMARY KEY, palindrome varchar(255));";
$sql = "INSERT INTO palindrome (palindrome) values('bob'),('race car').('stack cats'), ('senile felines');";
#$sql = "SELECT * FROM palindrome";



//RUN THE QUERY BY PASSING IT AND THE CONNECTION TO THE DB
$results = mysqli_query($conn,$sql);
    echo($results ? 'Yay!':'NOPE!');
    echo'<br><br>';
    
//IF NEEDED LOOP THROUGH THE RESULTS
    // while($rows = mysqli_fetch_array($results,MYSQLI_ASSOC))
    // {
    //     echo'Here is one of the palindromes: ' . $rows['palindrome']. '<br>';
    // }

?>
