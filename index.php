<?php 
session_start();
include "db/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>form</title>
    <style>
  </style>
</head>

<body>
    <div class="container mt-5">
        <form action="showTable.php" method="post">
            <div class="form-group mb-3">
               id:<input class="input-group-text" type="text" name="user_id">
            </div>
            <div class="form-group mb-3">
            name: <input class="input-group-text" type="text" name="name">
            </div>
            <div class="form-group mb-3">
            email:<input class="input-group-text" type="text" name="email">
            </div>
            <div class="form-group mb-3">
         password:<input class="input-group-text" type="text" name="password">
            </div>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    <br><br><br>
</body>
</html>

