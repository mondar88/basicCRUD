<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once('process.php'); ?>
<?php
    $mysqli = new mysqli('localhost', 'root', '', 'crudbasic') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data");
    $row = $result->fetch_assoc();
    $row =$result->fetch_assoc();
?>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
        </tr>
        </thead>
    </table>

<form action="process.php" method="POST">
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter name"></input>
    <label for="">Location</label>
    <input type="text" name="location" placeholder="Enter location"></input>
    <button type="submit" name="save" >Submit</button>
</form>
    
</body>
</html>