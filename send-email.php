<?php

$name=$surname=$email=$message="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=test($_POST['jmeno']);
$surname=test($_POST['prijmeni']);
$email=test($_POST['email']);
$message=test($_POST['message']);
}

$msg="Jméno: "+$name+" Příjmení: "+$surname+" Email: "+$email+" Zpráva: "+$message;


mail("lenkarajnochova@email.cz","Zpráva z webu",$msg);
header("lenka-test.cz");
function test($data){
    $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>