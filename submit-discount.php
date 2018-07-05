<?php

require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $package = $_POST["package"];
    $message = $_POST["msg"];
    $budget = $_POST["budget"];
    $start_up = $_POST["start-up"];

 if ($_POST['submit']){



 $from = $_POST['email']; //enter your email address
 $to = "promo@donadextechnology.com"; //enter the email address of the contact your sending to
 $subject = "Special Web-design Package"; // subject of your email

$headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

$text = ''; // text versions of email.
$html = "<html><body>First Name: $firstname <br> Last Name: $lastname <br> Email: $email <br> Phone Number: $phone_number <br>Message: $message <br> Budget: $budget <br> Start-Up Date: $start_up <br></body></html>"; // html versions of email.

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

//do not ever try to call these lines in reverse order
$body = $mime->get();
$headers = $mime->headers($headers);

 $host = "localhost"; // all scripts must use localhost
 $username = "promo@donadextechnology.com"; //  your email address (same as webmail username)
 $password = "12@Promo06Sire"; // your password (same as webmail password)

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
'username' => $username,'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
    header("Location: thank-you-redirect-home.php");
echo("<p>Mail Sent. Thank you " . $firstname . ", we will contact you shortly.</p>");
}
  }
?>

<?php

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $package = $_POST["package"];
    $message = $_POST["msg"];
    $budget = $_POST["budget"];
    $start_up = $_POST["start-up"];


include ('include/sqli-connect.php'); 
    
$sqli = "INSERT INTO Promo (First_Name, Last_Name, Email, Phone_Number, Package, Details, Budget, Start_Up)
VALUES ('$firstname', '$lastname', '$email', '$phone_number', '$package', '$message', '$budget', '$start_up')";

if ($conn->query($sqli) === TRUE) {
    echo " You will be contacted via the email entered. ";
} else {
    echo "Error: " . $sqli . "<br>" . $conn->error;
}

$conn->close();

?>
