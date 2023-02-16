<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='OurHistory.css'/> 
    <title>Our History</title>
</head>
<body>
<h3>Milestone Cafe</h3>
    <header>Our History!</header>
    <nav>
        <a href='/index.php'>Home</a> |
        <a href="/breakfast.php/">Breakfast</a> |
        <a href="/lunch.php/">Lunch</a> |
        <a href="/dinner.php/">Dinner</a> |
        <a href="/OurHistory.php/">Our History</a>
        </nav>
        <aside class='process'>
            <h4>Our Process</h4>
            <br>
            <?php 
                $processFile = fopen("process.txt","r");
                while(!feof($processFile)) {
                    echo fgets($processFile) . "<br>";
                }
                fclose($processFile); 
            ?>
            <img src="veggies.jpeg" alt="veggies" width="350" height="300" class="w3-round">
        </aside>
        <aside class='story'>
            <h4>Our Story</h4>
            <br>
            <?php 
                $storyFile = fopen("story.txt","r");
                while(!feof($storyFile)) {
                    echo fgets($storyFile) . "<br>";
                }
                fclose($storyFile); 
            ?>
            <img src="hat.jpeg" alt="chef hat" width="350" height="300" class="w3-round">
        </aside>
        <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <img src="wheat.jpeg" alt="wheat" width="350" height="300" class="w3-round">  
        </div>
</body>
</html>