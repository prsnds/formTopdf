<?php 
session_start();
include "db/connection.php";
    if(isset($_session['submit'])){
        
        $user_id=$_session['user_id'];
        $name=$_session['name'];
        $email=$_session['email'];
        $password=$_session['password'];
       

   $query1 = "INSERT INTO tbl_users (`user_id`, `name`, `email`, `password`) VALUES ('$user_id','$name','$email','$password')";  
   $inserted = mysqli_query($conn,$query1);
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
    table {
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>

<body>
    <form action="user_form_index.php" method="post">
        <div class="id">
            id:<input type="text" name="user_id">
        </div>
        <div class="name">
            name:<input type="text" name="name">
        </div>    
        <div class="email">
            email:<input type="text" name="email">
        </div>
        <div class="password">
            password:<input type="text" name="password">
        </div>
        <input type="submit" name="submit" value="submit">
    </form>
    <br><br><br>
</body>
</html>

<?php 
    $query2="select * from tbl_users order by user_id";
    $result = mysqli_query($conn,$query2);
    ?>
 <table>
     <tr>
         <th>userid</th>
         <th>name</th>
         <th>email</th>
         <th>password</th>
         <th>created time</th>
     </tr>
         <?php
            try {
                while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
              {
               
                  echo "<tr>";
                  echo "<td>".$row['user_id']."</td>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['email']."</td>";
                  echo "<td>".$row['password']."</td>";
                  echo "<td>".$row['created_at']."</td>";
                  echo "</tr>";
              }
               
            } catch (\Throwable $th) {
                echo "there is no data";
            }
                
                
        ?>

