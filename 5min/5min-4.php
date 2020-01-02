<!DOCTYPE html>
<html>
<head>
    <title>5min-4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        echo "<ul>";
            for($i = 0; $i < 100; $i++)
            echo"<li> item".$i."</li>";
        echo "</ul>";
    ?>
</body>
</html>