<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='Lunch.css'/>
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
            <a href="OurHistory.php">Our History</a> |
            <a href="uAccount.php">User Account</a>
        </nav>
        <aside class = "Lighter">
            <h4>Lighter Lunch</h4>
            <?php 
                $lLunchFile = fopen("lLunch.txt","r");
                while(!feof($lLunchFile)) {
                    echo fgets($lLunchFile) . "<br>";
                }
                fclose($lLunchFile); 



                #$db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu
                #UNION
                #SELECT mealDesc FROM CafeItems WHERE mealTime='Lunch'
                #UNION
                #SELECT classType FROM Classify WHERE classType='lite fare'");
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


                #$db = new PDO('/Users/jordynmerchant/Desktop/Locker/School/2022-2023/Spring 2023/Web Programming Techniques/MilestoneCafe/JordynCafe.session.sql', 'steverq1_jordyn', 'steverq1_jordyn');
                #$db->query("SELECT men_food,price FROM CafeMenu
                #UNION
                #SELECT mealDesc FROM CafeItems WHERE mealTime='Lunch'
                #UNION
                #SELECT classType FROM Classify WHERE classType='classic'");
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