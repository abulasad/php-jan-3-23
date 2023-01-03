<?php

$fname = isset($_GET['fname']) ? $_GET['fname'] : "Md. Abul Asad Zihad";
$lname = isset($_GET['lname']) ? $_GET['lname'] : "Tariq Hasanat";
$email = isset($_GET['email']) ? $_GET['email'] : "maazihadin@gmail.com";


?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Super Global</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">

</head>

<body>

   <form action="index.php" method="GET">

      <input type="text" name="fname" id="" placeholder="First Name">
      <input type="text" name="lname" id="" placeholder="Last Name">
      <input type="email" name="email" id="" placeholder="Email Address">
      <button type="sumbit">Submit</button>


   </form>
   <br>

   First Name : <?php echo $fname; ?> <br>
   Last Name : <?php echo $lname; ?> <br>
   Email Address Name : <?php echo $email; ?> <br>


</body>

</html>