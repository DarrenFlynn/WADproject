<?php
$from="";
$to = "";
$name = Trim(stripcslashes($_POST['name']));
$email = Trim(stripcslashes($_POST['email']));
$message = Trim(stripcslashes($_POST['message']));
$promo = Trim(stripcslashes($_POST['promo']));

$body ="";
$body .="Name: ";
$body.=$name;
$body .= "\n";
$body .="Email: ";
$body.=$email;
$body .="\n";
$body .="Message: ";
$body.=$message;
$body .="\n";
$body .="promo accepted?: ";
$body.=$promo;
$body .="\n";


$go = mail($to, $subject, $body, "From:<$from>");

if($go) {
    print("Sucess");
    
}
else{
    print("unable to send!!");
}


?>