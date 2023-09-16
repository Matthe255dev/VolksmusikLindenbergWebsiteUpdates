<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<?php
    if(isset($_POST["submit"])){
        require("main.php");
        $stmt = $main->prepare("SELECT * FROM 'Login' WHERE Username = :user");//Check if User exists
        $stmt->bindParam(":user", $_POST["username"]);//bind User to Text Parameter to avoid SQLInjection
        $stmt->execute();
        $rowc = $stmt->rowCount();//get User Row Count
        if($rowc == 1){
            $entry = $stmt->fetch();
            if(password_verify($_POST["passwd"], $row["Password"])){//check the Password
                echo "Login erfolgreich";
                $instrument = $mysql->prepare("SELECT Instrument FROM 'Login' WHERE Username = :user");
                $instrument->bindParam(":user", $_POST["username"]);
                $instrument->execute();
                session_start();                                //start the session
                $_SESSION["username"] = $row["USERNAME"];       
                header("Location: $instrument");
            }else{
                echo "Wrong Password!";
            }
        }else{
            echo "This User doesn't Exist!";
        }
    }
?>
<main>
    <div class="row">
        <div class="colm-form">
            <div class="form-container">
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="Username" class="input-login">
                    <input type="password" name="passwd" id="password" placeholder="Password" class="input-login">
                    <button class="btn-login" type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>