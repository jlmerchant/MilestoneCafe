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
            <a href='index.php'>Home</a> |
            <a href="breakfast.php">Breakfast</a> |
            <a href="lunch.php">Lunch</a> |
            <a href="dinner.php">Dinner</a> |
            <a href="OurHistory.php">Our History</a> |
            <a href="uAccount.php">User Account</a>
        </nav>
        <aside class = "Lighter">
            <h4>Lighter Dinner</h4>
            <?php 
                $lDinnerFile = fopen("ldinner.txt","r");
                while(!feof($lDinnerFile)) {
                    echo fgets($lDinnerFile) . "<br>";
                }
                fclose($lDinnerFile); 



                #$db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu
                #UNION
                #SELECT mealDesc FROM CafeItems WHERE mealTime='Dinner'
                #UNION
                #SELECT classType FROM Classify WHERE classType='lite fare'");
              
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


                #$db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu
                #UNION
                #SELECT mealDesc FROM CafeItems WHERE mealTime='Dinner'
                #UNION
                #SELECT classType FROM Classify WHERE classType='classic'");
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