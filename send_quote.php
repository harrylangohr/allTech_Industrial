<?php

$myemail = "harrylangohr@gmail.com";

$fullname = htmlspecialchars($_POST['fullname']);

$email = htmlspecialchars($_POST['email']);

$company = htmlspecialchars($_POST['company']);

$message = htmlspecialchars($_POST['message']);

$item = htmlspecialchars($_POST['item']);

$material = htmlspecialchars($_POST['material']);

$weight = htmlspecialchars($_POST['weight']);

$quantity = htmlspecialchars($_POST['quantity']);

$subject = "Someone submitted a quote request";

$emailBody = "You have been contacted by

Name: $fullName
E-mail: $email
Company: $company

Message: 
$message

Item: $item
Material: $material
Weight: $weight
Quantity: $quantity";

mail($myemail, $subject, $emailBody);

//header('Location: /alltech_industrial/contact.php');

?>

<html>
<h1><?php echo $myemail ?></h1>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

