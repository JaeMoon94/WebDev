<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music Database</title>
    <link rel="stylesheet" href="css/style.css" type ="text/css">
</head>
<body>  
    <div class="header">
        Welcome to the Jae's favorite Album Collection
    </div>

    <div class = "pointer">
        Album Lists
    </div>
    <div class ="wrapping">
        <div class = "checkBox">
            <form action = "music.php" method="POST">
                <ul>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="DPR Live - Her" > DPR Live - Her</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="BeenZeeno - 24:26"> BeenZeeno - 24:26</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="Crush - Crush on You"> Crush - Crush On you</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="DPR Live - Coming to you Live"> DPR Live - Coming to you Live</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="Heiz - And July"> Heiz - And July</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="OHHYUK - Bawling"> OHHYUK - Bawling</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="Crucial Star - Midnight"> Crucial Star - Midnight</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="Suran - WINE"> Suran - WINE</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="DEAN - instagram"> DEAN - instagram</li>
                    <li class = "checkboxes"><input type="checkbox" name="album[]" value="Loco - BLEACHED"> Loco - BLEACHED</li>
                </ul>
            <div class = buttons>
                <input type="submit" class="submitBt" value="SUBMIT"/>      
                <input type="reset" class="reset" value="RESET"/>
            </div>
            </form>
        </div>
    </div>
    
</body>
</html>











