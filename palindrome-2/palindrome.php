<?php
	include ('includes/functions.php');
	//Global Variables
	$ec = 0;
	$counter = 0;
	$wordfind = "";
	$palCount = 0;
	if(!empty($_POST['search-word'])){
		$wordfind = $_POST['search-word'];
	}
	else {$ec += 1;}

	if(!empty($_POST['pal-count'])){
		$palCount = $_POST['pal-count'];
	}
	else {$ec += 2;}

	if($ec){
		header('location: index.php?w='.$wordfind.'&pc='.$palCount.'&ec='.$ec);
	}
?>			
<!doctype html>
<html>
	<?php include ('includes/head.php');?>
	<body>
	<?php include ('includes/nav.php');?>
		<h1>Palindromesss</h1>
		<?php
			if(!isset($_POST['pal']))
			{
				echo '<form action="" method="post">';
					echo '<input type="hidden" name="search-word" value="'.$wordfind.'">';
					echo '<input type="hidden" name="pal-count" value="'.$palCount.'">';
						for($x = 0; $x < $palCount; $x++){
							echo '<input type="text" name="pal[]">';
						}
					echo '<input type="submit">';
				echo '</form>';
			}	
			else{
				//makes array
				$palindromes = $_POST['pal'];#array("Bob","Tie It","Madam I'm Adam","Race Car","Senile Felines","I Did, Did I?","Alley Cats","Redivider","Stack Cats");
				//display palindromes
				display($palindromes,$wordfind);
				//display instances of words to find
				echo "<p class='message'>instances of \"".ucfirst($wordfind)."\": $counter</p>";
			}
		?>	
	</body>
</html>

<?php
	function display($phrases,$find){
			global $counter;
			echo "<div class = 'container'>";
				for($i = 0; $i < sizeof($phrases); $i++)
				{
					echo "<div class='facts'>";
						echo "<h1>facts about \"$phrases[$i]\"</h1>";
						echo "<ul>";
							echo "<li>it's ".strlen($phrases[$i])." characters long!</li>";
							echo "<li> its word count is ".str_word_count($phrases[$i])."!</li>";
							echo "<li>palindrome status: " .(isPalindrome($phrases[$i]) ? "<span class='good'>TRUE!</span>" : "<span class='bad'>FALSE!</span>")."</li>";
						echo "</ul>";
					echo "</div>";
					if (stripos($phrases[$i], $find) !==false){$counter++;}
				}	
			echo "</div>";	
	}
	
	function isPalindrome($testword){
				$testword = str_replace(" ", "", $testword);
				$testword = str_replace("'", "", $testword);
				$testword = str_replace(".", "", $testword);
				$testword = str_replace("?", "", $testword);
				$testword = str_replace(",", "", $testword);
				$testword = str_replace("!", "", $testword);
				
				$testword = strtolower($testword);
				
				$revword = strrev($testword);
				if($revword == $testword) return true;
				else return false;
			}
?>