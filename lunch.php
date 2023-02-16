<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='lunch.css'/>
    <title>Lunch Menu</title>
</head>
<body>
<h3>Milestone Cafe</h3>
    <header>Lunch Menu</header>
    <nav>
            <a href='index.php'>Home</a> |
            <a href="breakfast.php">Breakfast</a> |
            <a href="lunch.php">Lunch</a> |
            <a href="dinner.php">Dinner</a> |
            <a href="OurHistory.php">Our History</a>
        </nav>
        <aside class = "Lighter">
            <h4>Lighter Lunch</h4>
            <?php 
                $lLunchFile = fopen("lLunch.txt","r");
                while(!feof($lLunchFile)) {
                    echo fgets($lLunchFile) . "<br>";
                }
                fclose($lLunchFile); 
            ?>
            <img src="skewer.jpeg" alt="kebab" width="350" height="300" class="w3-round">
        </aside>
        <aside class = "BigLunch">
            <h4>Big Lunches</h4>
            <?php 
                $bLunchFile = fopen("bLunch.txt","r");
                while(!feof($bLunchFile)) {
                    echo fgets($bLunchFile) . "<br>";
                }
                fclose($bLunchFile); 
            ?>
            <br> 
            <img src="pasta.jpeg" alt="pasta salad" width="350" height="300" class="w3-round">
        </aside>
        <aside class='apps'>
            <h4>Appetizers</h4>
            <img src="truffles.jpeg" alt="truffles" width="300" height="310" class="w3-round">
            <br> 
            <?php 
                $appsFile = fopen("apps.txt","r");
                while(!feof($appsFile)) {
                    echo fgets($appsFile) . "<br>";
                }
                fclose($appsFile); 
            ?>
        </aside>
</body>
</html>