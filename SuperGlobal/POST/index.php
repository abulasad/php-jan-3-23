<?php

$fname = isset($_POST['fname']) ? $_POST['fname'] : "Md. Abul Asad Zihad";
$lname = isset($_POST['lname']) ? $_POST['lname'] : "Tariq Hasanat";
$email = isset($_POST['email']) ? $_POST['email'] : "maazihadin@gmail.com";


if (isset($_POST['info_submit'])) {
   $sucess = "The form has been Submitted.";
}


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
      <button type="sumbit" name="info_submit">Submit</button>
   </form>

   <?php
   if (isset($sucess)) {
      echo "<p>" . $sucess .  "</p";
   }
   ?>

   <br>
   First Name : <?php echo $fname; ?> <br>
   Last Name : <?php echo $lname; ?> <br>
   Email Address Name : <?php echo $email; ?> <br>


</body>

</html>