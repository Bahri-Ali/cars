<?php
$name = $_POST['Name'];
$email = $_POST['email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];
echo "The following information has been sent successfully <br>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Subject: " . $Subject . "<br>";
echo "Message: " . $Message . "<br>";
?>
