<?php

require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

    $name = $_POST["name"];
    $phone_number = $_POST["phone-number"];
    $email = $_POST["email"];
    $package = $_POST["package"];
    $message = $_POST["message"];
 
 if ($_POST['submit']){



 $from = $_POST['email']; //enter your email address
 $to = "info@donadextechnology.com"; //enter the email address of the contact your sending to
 $subject = "Service Request"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>Name: $name <br> Email: $email <br> Phone Number: $phone_number <br>Message: $message <br></body></html>"; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "info@donadextechnology.com"; //  your email address (same as webmail username)
 $password = "12@Information"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
    header("Location: thank-you.php");
echo("<p>Mail Sent. Thank you " . $name . ", we will contact you shortly.</p>");
}
  }
?>
 
<?php
    $name = $_POST["name"];
    $phone_number = $_POST["phone-number"];
    $email = $_POST["email"];
    $package = $_POST["package"];
    $message = $_POST["message"];


include ('include/sqli-connect.php'); 
    
$sqli = "INSERT INTO Service_Request (Full_Names, Phone_Number, Email, Service_Require, Details)
VALUES ('$name', '$phone_number', '$email', '$package', '$message')";

if ($conn->query($sqli) === TRUE) {
    echo " You will be contacted via the email entered. ";
} else {
    echo "Error: " . $sqli . "<br>" . $conn->error;
}

$conn->close();

?>