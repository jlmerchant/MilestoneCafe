<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='dinner.css'/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner Menu</title>
</head>
<body>
<h3>Milestone Cafe</h3>
    <header>Dinner Menu</header>
    <nav>
            <a href='index.php/'>Home</a> |
            <a href="breakfast.php/">Breakfast</a> |
            <a href="lunch.php/">Lunch</a> |
            <a href="dinner.php/">Dinner</a> |
            <a href="OurHistory.php/">Our History</a>
        </nav>
        <aside class = "Lighter">
            <h4>Lighter Dinner</h4>
            <?php 
                $lDinnerFile = fopen("lDinner.txt","r");
                while(!feof($lDinnerFile)) {
                    echo fgets($lDinnerFile) . "<br>";
                }
                fclose($lDinnerFile); 
            ?>
            <img src="soup.jpeg" alt="soup" width="350" height="300" class="w3-round">
        </aside>
        <aside class = "BigDinner">
            <h4>Big Dinner Options</h4>
            <?php 
                $bDinnerFile = fopen("bDinner.txt","r");
                while(!feof($bDinnerFile)) {
                    echo fgets($bDinnerFile) . "<br>";
                }
                fclose($bDinnerFile); 
            ?>
            <img src="chicken.jpeg" alt="chicken" width="350" height="300" class="w3-round">
        </aside>
        <aside class='sweets'>
            <h4>Sweets</h4>
            <img src="pie.jpeg" alt="key lime pie" width="350" height="300" class="w3-round">
            <br>
            <?php 
                $sweetsFile = fopen("sweets.txt","r");
                while(!feof($sweetsFile)) {
                    echo fgets($sweetsFile) . "<br>";
                }
                fclose($sweetsFile); 
            ?>
        </aside>
</body>
</html>