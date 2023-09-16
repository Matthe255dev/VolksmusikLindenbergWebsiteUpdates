<?php
$host = "localhost";
$database = "Volksmusik_Termine";
$user = "Website";
$password = "1c101d7135024ccf9358366ce2d45fd69aedd23c573f961124c0d0346992edf8";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$database;", $user, $password);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
    window.alert("SQL Error: ".$e->getMessage(););
}
?>