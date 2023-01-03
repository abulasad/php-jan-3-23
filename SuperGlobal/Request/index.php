<?php

$fname = isset($_REQUEST['fname']) ? $_REQUEST['fname'] : "Md. Abul Asad Zihad";
$lname = isset($_REQUEST['lname']) ? $_REQUEST['lname'] : "Tariq Hasanat";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "maazihadin@gmail.com";


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

   <form action="index.php" method="POST">

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