<?php
    define("HOST","localhost");
    define("USER","id6987084_pally");
    define("PASS","1234567890");
    define("BASE","id6987084_palindrome");

    $conn = mysqli_connect(HOST,USER,PASS,BASE);
    $sql =  "";
    $option = "";
    if(!empty($_POST['car']))
    {
        $option = $_POST['car'];
    }

    $isSubmitted = false;;
    $showResult = false;
    // 합계를 구하자
    //SELECT sum(COUNT) FROM `webpoll`

    if(isset($_POST['submit']))
    {
        switch ($option) {
            case 'Hyundai':
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Hyundai'";
                break;
            case 'Toyota': 
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Toyota'";
                break;
            case 'Mazda': 
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Mazda'";
                break;
            case 'Honda':
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Honda'";
                break;
            case 'Jeep': 
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Jeep'";
                break;
            case 'Kia':
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Kia'";
                break;
            case 'Nissan':
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Nissan'";
                break;
            case 'Ford': 
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Ford'";
                break;
            case 'Chevrolet': 
                $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Chevrolet'";
                break;
            case 'Subaru': 
            $sql = "UPDATE webpoll Set COUNT = COUNT + 1 WHERE NAME = 'Subaru'";
                break;
        }
        $isSubmitted = true;
        $showResult = true;
    }
    $result = mysqli_query($conn,$sql);

    $sql = "SELECT sum(COUNT) FROM webpoll";
    $result2 = mysqli_query($conn,$sql);

    $sum;

    while($row = mysqli_fetch_row($result2))
    {
        $sum = $row[0];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Poll</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <style>
        p.showResult span.Hyundai
        {
            margin-top: 10px;
            float: right;
            display: inline-block;
            text-align: right;
            width: <?php echo calculate($sum,"Hyundai")."%" ?>;
            background-color: lightyellow;
            line-height: 20px;
        }
        p.showResult span.Toyota
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Toyota")."%" ?>;
            background-color: darkgoldenrod;
            line-height: 20px;
        }
        p.showResult span.Mazda
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Mazda")."%" ?>;
            background-color: salmon;
            line-height: 20px;
        }
        p.showResult span.Honda
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Honda")."%" ?>;
            background-color: pink;
            line-height: 20px;
        }
        p.showResult span.Jeep
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Jeep")."%" ?>;
            background-color: aqua;
            line-height: 20px;
        }
        p.showResult span.Kia
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Kia")."%" ?>;
            background-color: red;
            line-height: 20px;
        }
        p.showResult span.Nissan
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Nissan")."%" ?>;
            background-color: orange;
            line-height: 20px;
        }
        p.showResult span.Ford
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Ford")."%" ?>;
            background-color: violet;
            line-height: 20px;
        }
        p.showResult span.Chevrolet
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Chevrolet")."%" ?>;
            background-color: yellow;
            line-height: 20px;
        }
        p.showResult span.Subaru
        {
            margin-top: 10px;
            display: inline-block;
            float: right;
            text-align: right;
            width: <?php echo calculate($sum,"Subaru")."%" ?>;
            background-color: white;
line-height: 20px;
        }


    </style>
    <script src="main.js"></script>
</head>
<body>


    <div class="<?php echo hide($isSubmitted) ?>">
        <div class="welcome">
            <p class="instruction">
                Which car brand do you like the most?
            </p>
        </div>

        <div class="img1">
            <img src="img/elephant.gif" alt="" width="400">
            <img src="https://media1.tenor.com/images/ba435d46a70948535773d5226b3e83e8/tenor.gif?itemid=12396063" alt="" width="400">
        </div>
        
        <div class="inputStuffs">

            <form action="index.php" method="POST">
                <div class = "options">
                    <input type="radio" name="car" value = "Hyundai"> Hyundai <br>
                    <input type="radio" name="car" value = "Toyota"> Toyota <br>
                    <input type="radio" name="car" value = "Mazda"> Mazda <br>
                    <input type="radio" name="car" value = "Honda"> Honda<br>
                    <input type="radio" name="car" value = "Jeep"> Jeep<br>
                    <input type="radio" name="car" value = "Kia"> Kia<br>
                    <input type="radio" name="car" value = "Nissan"> Nissan<br> 
                    <input type="radio" name="car" value = "Ford"> Ford<br>
                    <input type="radio" name="car" value = "Chevrolet"> Chevrolet<br>
                    <input type="radio" name="car" value = "Subaru"> Subaru<br>
                </div>
            <div class = "buttons">
                <input type="submit" class="subt"  name="submit" value="Submit">
                <input type="reset" class="rebt" value="Reset">
            </div>
            </form>
        </div>
    </div>

    <div class = "<?php echo show($showResult) ?>">
        <div class ="result">
            <p class = "thanks">
                Thanks for your opinion!
            </p>
        </div>

        <div class = "statistic">
            <p class="showResult">
                Hyundai:<span class="Hyundai"><?php echo calculate($sum,"Hyundai")?>%</span><br> 
                Toyota:<span class = "Toyota"><?php echo calculate($sum,"Toyota")?>%</span><br>
                Mazda:<span class = "Mazda"><?php echo calculate($sum,"Mazda")?>%</span><br>
                Honda:<span class = "Honda"><?php echo calculate($sum,"Honda")?>%</span><br>
                Jeep:<span class = "Jeep"> <?php echo calculate($sum,"Jeep")?>%</span><br>
                Kia:<span class = "Kia"><?php echo calculate($sum,"Kia")?>%</span><br>
                Nissan:<span class = "Nissan"><?php echo calculate($sum,"Nissan")?>%</span><br>
                Ford:<span class = "Ford"><?php echo calculate($sum,"Ford")?>%</span><br>
                Chevrolet:<span class = "Chevrolet"><?php echo calculate($sum,"Chevrolet")?>%</span><br>
                Subaru:<span class = "Subaru"><?php echo calculate($sum,"Subaru")?>%</span><br>
            </p>
            <p class = "totalSum">
                Total number of votes : <?php echo $sum ?> 
            </p>
        </div>
    </div>
    
</body>
</html>

<?php

    function calculate($total,$target)
    {
        global $sumResult;
        global $conn;
        $sumResult;
        $sql2 =  "SELECT COUNT FROM webpoll WHERE NAME = '$target'";

        $result = mysqli_query($conn,$sql2);    
        while($row = mysqli_fetch_row($result))
        {
            $sumResult = $row[0];
        }
        return round((($sumResult / $total) * 100),1);
    }

    function hide($bool)
    {
        if($bool) return "hide";
        else return "wrapper";
    }
    function show($bool)
    {
        if($bool) return "wrapper";
        else return"hide";
    }

    

?>
