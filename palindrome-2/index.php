<?php
	include ('includes/functions.php');
	getVariables();
	//helper variables 
	$maxpal = 15;
?>
<!doctype html>
<html>
	<?php include ('includes/head.php');?>
	<body>
	<?php include ('includes/nav.php');?>
		<h1>Palindromesss</h1>
		<div class="form">
		<form method="post" action="palindrome.php">
			<input name="search-word" type="text" placeholder="Enter Word!" value="<?php echo $wvalue;?>">
			<?php echo displaySelect($maxpal, $pcvalue); ?>
			<input type="reset">
			<input type="submit">
		</form>
		<?php echo displayError($ecvalue); ?>
		</div>
	</body>
</html>
