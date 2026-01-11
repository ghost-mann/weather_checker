<?php

$city = $_POST["city"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather Checker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Global Weather Checker</h1>

<div class="container">
    <form class="form-group">
        <div class="form-group">
            <label>Enter your City Below<br><input name="city" id="city" placeholder="Enter your city..."></label>
        </div>
        <div class="button-group">
            <button name="submit" id="submit">Submit</button>
        </div>
    </form>
</div>

</body>
</html>
