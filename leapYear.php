<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Chris' Leap Year Calculator</title>
</head>
<body>

<form method="POST">
    <h3>Chris' Leap Year Calculator</h3>
    <input type="number" name="userYear" id="input" placeholder="Enter Year">
    <button type="submit">Submit</button>
</form>
<?php

$userYear = ($_POST['userYear']);

if(isset($_POST['userYear'])){

    if($userYear % 4 === 0){
        if($userYear % 100 === 0){
            if($userYear % 400 === 0){
                echo "<h1>" . $userYear . " is indeed a leap year! 🤩" . "</h1>";
            }else{
                echo "<h1>" . $userYear . " is not a leap year 😐" . "</h1>";
            }
        }else{
            echo "<h1>" . $userYear . " is indeed a leap year! 🤩" . "</h1>";
        }
    }else{
        echo "<h1>" . $userYear . " is not a leap year 😐" . "</h1>";
    }

}

?>

</body>


</html>