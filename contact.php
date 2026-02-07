<?php
include "config.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$msg = mysqli_real_escape_string($conn,$_POST['message']);

/* Save to DB */
$sql = "INSERT INTO contact(name,email,message)
VALUES('$name','$email','$msg')";
mysqli_query($conn,$sql);

/* Send Email */

$to = "skebrahim712@gmail.com";
$subject = "New Portfolio Message";

$body = "
Name: $name
Email: $email
Message: $msg
";

$headers = "From: $email";

mail($to,$subject,$body,$headers);

/* Redirect */

header("Location: index.php?success=1#contact");

}
?>
