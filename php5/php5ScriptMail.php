
<?php
$firstname = $_POST['fnamn'];
$Lastname = $_POST['enamn'];
$Email = $_POST['email'];
$Message = $_POST['comment'];
$Price = $_POST['price'];

$Till = "Robin19972012@hotmail.se";
$Subject = "Nytt Meddelande";

mail ($Till, $Subject, $Message, "Pris " . $Price, "From: " . $firstname .  $Lastname);
if(mail){
  echo "Ditt meddelande har blivit skickad";
}

 ?>
