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
    <link rel="stylesheet" href="style.css">
    <title>form</title>
    
</head>

<body>
    <div class="container">
        <form action="showTable.php" method="post">
            <table class="form_table">
                <thead>master's registration form</thead>
                
                <tr>
                    <td>honors reg no</td>
                    <td><input type="text" name="" id=""></td>
                    <td>hons class/cgpa</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
                
                <tr>
                    <td>honors reg no</td>
                    <td><input type="text" name="" id=""></td>
                    <td>hons class/cgpa</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
                
                <tr>
                    <td>honors reg no</td>
                    <td><input type="text" name="" id=""></td>
                    <td>hons class/cgpa</td>
                    <td><input type="text" name="" id=""></td>
                </tr>
                
            

            </table>
           
            
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    <br><br><br>
</body>
</html>

