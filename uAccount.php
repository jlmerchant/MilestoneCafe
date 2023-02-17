<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='FormStyles.css'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
<h3>Milestone Cafe</h3>
    <header>User Information</header>
        <nav>
            <a href='index.php'>Home</a> |
            <a href="breakfast.php">Breakfast</a> |
            <a href="lunch.php">Lunch</a> |
            <a href="dinner.php">Dinner</a> |
            <a href="OurHistory.php">Our History</a> |
            <a href="uAccount.php">User Account</a>
        </nav>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    First Name:<input type="text" name="fname" >
    Last Name:<input type="text" name="lname">
    Email:<input type="text" name="email">
    Password:<input type="password" name="pword" 
    pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
    title="Must contain at least one number and one uppercase and 
    lowercase letter, and at least 8 or more characters" required>
    <input type="submit">
    </form> 
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //collect value of input field 
            $fname = $_POST['fname'];
            if (empty($fname)) {
                echo "Name is empty <br />";
            } else {
                echo "First Name: $fname <br />" ; 
            }
            $lname = $_POST['lname'];
            if (empty($lname)) {
                echo "Name is empty <br />";
            } else {
                echo "Last Name: $lname <br />";
            }
            $email = $_POST['email'];
            if (empty($email)) {
            } else {
                echo "Email: $email <br />";
            }
            $pword = $_POST['pword'];
            if (empty($pword)) {
                echo "Password is empty <br />";
            } else {
                $hash = password_hash($pword, PASSWORD_DEFAULT);
                echo "Password is a secret <br />"; 
            }
        }
    ?>
</body>
</html>