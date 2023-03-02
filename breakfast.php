<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='breakfast.css'/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast Menu</title>
</head>
<body>
<h3>Milestone Cafe</h3>
    <header>Breakfast Menu</header>
        <nav>
            <a href='index.php'>Home</a> |
            <a href="breakfast.php">Breakfast</a> |
            <a href="lunch.php">Lunch</a> |
            <a href="dinner.php">Dinner</a> |
            <a href="OurHistory.php">Our History</a> |
            <a href="uAccount.php">User Account</a>
        </nav>
        <aside class = "Lighter">
        <img src="muffin.jpeg" alt="muffin" width="300" height="310" class="w3-round">
            <h4>Lighter Options</h4>
            <?php 
                $lightFile = fopen("light.txt","r");
                while(!feof($lightFile)) {
                    echo fgets($lightFile) . "<br>";
                }
                fclose($lightFile); 



                #$db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu
                #UNION
                #SELECT mealDesc FROM CafeItems WHERE mealTime='Breakfast'
                #UNION
                #SELECT classType FROM Classify WHERE classType='lite fare'");
            ?>
        </aside>
        <aside class = "BigBKF">
            <h4>Big Breakfasts</h4>
            <?php 
                $bigFile = fopen("bBreak.txt","r");
                while(!feof($bigFile)) {
                    echo fgets($bigFile) . "<br>";
                }
                fclose($bigFile); 


                  #$db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu
                #UNION
                #SELECT mealDesc FROM CafeItems WHERE mealTime='Breakfast'
                #UNION
                #SELECT classType FROM Classify WHERE classType='classic'");
            ?>
            <img src="Waffle.jpeg" alt="waffles" width="300" height="310" class="w3-round">
        </aside>
        <aside class='drinks'>
            <h4>Drinks</h4>
            <?php 
                $drinksFile = fopen("drinks.txt","r");
                while(!feof($drinksFile)) {
                    echo fgets($drinksFile) . "<br>";
                }
                fclose($drinksFile); 

                  #$db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu WHERE men_food='Apple Juice'
                #SELECT men_food,price FROM CafeMenu WHERE men_food='Orange Juice'
                #SELECT men_food,price FROM CafeMenu WHERE men_food='Coffee'
                #SELECT men_food,price FROM CafeMenu WHERE men_food='Sprite'
                #SELECT men_food,price FROM CafeMenu WHERE men_food='Diet Pepsi'
                #SELECT men_food,price FROM CafeMenu WHERE men_food='Coke'
                #UNION
                #SELECT mealDesc FROM CafeItems WHERE mealTime='Breakfast'
                #UNION
                #SELECT classType FROM Classify WHERE classType='lite fare'");
            ?>
            <img src="coffee.jpeg" alt="coffee" width="300" height="310" class="w3-round">
        </aside>
    <?php
        ''
    ?>
</body>
</html>