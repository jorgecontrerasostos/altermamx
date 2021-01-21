<?php

$name = $_POST['name'];
$email = $_POST['email'];
$idea = $_POST['idea'];

$to = 'jorgecontrerasostos@gmail.com'; //admin email
$about = 'Contact from alterma.mx';

$letter = "From: $name \n";
$letter .= "Email: $email \n";
$letter .= "Content: $idea";

mail($to, $about, $letter);
header('Location:modal.php');