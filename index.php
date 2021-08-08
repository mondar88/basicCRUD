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
?>
<div class="container">
  <div class="row justify-content-center">
  <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Controls</th>
        </tr>
        </thead>
        <?php while($row =$result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td>
              <a class="btn btn-info">Edit</a>
              <a class="btn btn-danger" href="process.php?delete=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile ?>
    </table>
  </div>
  <div class="container">
  <div class = "row justify-content-center">
<form action="process.php" method="POST">
    <div class="form-group">
        <label class="form-label">Name</label>
        <input type="text" name="name" placeholder="Enter name" class="form-control"></input>
    </div>
    <div class="form-group">
        <label class="form-label">Location</label>
        <input type="text" name="location" placeholder="Enter location" class="form-control"></input>
    </div>
    <div class="form-group">
        <button type="submit" name="save" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>

  </div>

  </div>
    
</body>
</html>