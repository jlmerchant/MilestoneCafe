<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='MilestoneCafe.css'/>
    <title>Milestone Cafe</title>
</head>
<body>
    <h3>Milestone Cafe</h3>
    <header>Welcome to the Milestone Cafe</header>
        <nav>
            <a href='index.php'>Home</a> |
            <a href="breakfast.php">Breakfast</a> |
            <a href="lunch.php">Lunch</a> |
            <a href="dinner.php">Dinner</a> |
            <a href="OurHistory.php">Our History</a> |
            <a href="uAccount.php">User Account</a>
        </nav>
        <aside class = "specials">
            <h4>Special of the Day</h4>
            <?php
                $specialFile = fopen("special.txt","r");
                while(!feof($specialFile)) {
                    echo fgets($specialFile) . "<br>";
                }
                fclose($specialFile); 

               # $db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu WHERE men_food='Breakfast Special'
                #SELECT men_food,price FROM CafeMenu WHERE men_food='Lunch Special'
                #SELECT men_food,price FROM CafeMenu WHERE men_food='Dinner Special'
                #UNION
                #SELECT mealDesc FROM CafeItems
                #UNION
                #SELECT classType FROM Classify'");
            ?>
            </p>
        </aside>
        <aside class="img1">
        <img src="cherry.jpeg" alt="cherry" width="300" height="310" class="w3-round">
        </aside>
        <aside class = "extraText">
        <img src="cutlery.jpeg" alt="fork and spoon" width="200" height="250" class="w3-round">
            <h4>Cafe Info</h4>
            <?php 
                $infoFile = fopen("cafeinfo.txt","r");
                while(!feof($infoFile)) {
                    echo fgets($infoFile) . "<br>";
                }
                fclose($infoFile); 
            ?>
            <img src="burger.jpeg" alt="Cheese Burger" width="200" height="250" class="w3-round">
        </aside>
</body>
</html>