<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Volksmusik Lindenberg</title>
</head>
<body>
    <button onclick='window.open("login.php");window.close();' style="display:flex;justify-self:right;justify-content:right;">Login</button>
    <script>
        /*window.open("updating.php");
        window.close();
        while(true){
            alert("Sorry, we are currently unavailable!");
            window.close();
        }*/
    </script>
    <?php
        $con = mysqli_connect("localhost","Website","1c101d7135024ccf9358366ce2d45fd69aedd23c573f961124c0d0346992edf8","Volksmusik_Termine");
        $result = mysqli_query($con,"SELECT * FROM Termine WHERE Active=1");
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