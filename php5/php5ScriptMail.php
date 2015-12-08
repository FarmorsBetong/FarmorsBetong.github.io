<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
$firstname = $_POST['fnamn'];
$Lastname = $_POST['enamn'];
$Email = $_POST['email'];
$Message = $_POST['comment'];

$Till = "Robin19972012@hotmail.se";
$Subject = "Nytt Meddelande";

mail ($Till, $Subject, $Message, "From: " . $firstname .  $Lastname);
echo "Ditt meddelande har blivit skickad";
 ?>
</body>
</html>
