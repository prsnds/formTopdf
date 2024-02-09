<?php
    session_start();
    include "db/connection.php";   
    if(isset($_POST['submit']))
    {
        
        $user_id=$_POST['user_id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
       

        $query1 = "INSERT INTO tbl_users (`user_id`, `name`, `email`, `password`) VALUES ('$user_id','$name','$email','$password')";  
        $inserted = mysqli_query($conn,$query1);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidates</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    $query2="select * from tbl_users order by user_id ";
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



</body>
</html>