<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Volksmusik Lindenberg</title>
</head>
<body>
    <script>
        alert("Sorry, we are currently unavaliable!");
        window.close();
    </script>
    <button onclick='window.open("login.php");window.close();'>Login</button><br>
    <button onclick='window.open("Terminplan.php");window.close();'>Termine</button>
    <p>aktuelle Termine:</p>
    <?php
        //require("termine.php");
        //$termine = $termine->prepare("SELECT * FROM 'Termine' WHERE Active = 1")
        //echo($termine);
    ?>
</body>
</html>