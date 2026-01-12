<?php

// open weather api key
$api_key = 'your_token_here';

// only run when form is submitted
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}

$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key&units=metric";

$json = file_get_contents($url);

$data = json_decode($json, true);

if ($data && $data["cod"] == "200") {
    $temp = $data["main"]["temp"];
    $desc = $data["weather"][0]["description"];
    $icon = $data["weather"][0]["icon"];

    echo "<h2>Weather in $city</h2>";
    echo "<p>The temperature is: $temp.</p>";
    echo "<p>Today:$desc";
    echo "<img src='https://openweathermap.org/img/wn/$icon@2x.png' alt='Weather icon'>";
    } else {
    echo "City not found!";
}




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
    <form class="form-group" method="post">
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
