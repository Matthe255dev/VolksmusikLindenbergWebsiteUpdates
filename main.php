<?php
$host = "%";
$database = "Volksmusik_User";
$user = "Website";
$password = "";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$database;", $user, $password);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
    window.alert("SQL Error: ".$e->getMessage(););
}
?>