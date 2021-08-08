<?php
$mysqli = new mysqli('localhost', 'root', '', 'crudbasic');
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $mysqli->query("INSERT INTO data (name, location) VALUES ('$name', '$location')") or die($mysqli->error);
    header("Location: index.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id = $id") or die($mysqlii->error());
    header("Location: index.php");
}