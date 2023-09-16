<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Volksmusik Lindenberg</title>
</head>
<header>
    <button onclick='window.open("login.php");window.close();' style="display:flex;justify-content:right">Login</button><br>
</header>
<body>
    <script>
        window.open("updating.php");
        window.close();
    </script>
    <?php
        require("termine.php");
        $result = mysqli_query("SELECT * FROM Termine WHERE Active IS 1");
        $data = $result->fetch_all(MYSQLI_ASSOC);     
    ?>
    <button onclick='window.open("Terminplan.php");window.close();'>Termine</button>
    <table>
        <tr>
            <th>aktuelle Termine:</th>
        </tr>
        <?php foreach($data as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['Termine']) ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>