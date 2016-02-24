<?php

/*$selectOption = $_POST['contact_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject =$_POST['subject'];
$text = $_POST['text'];
$email_to=   "peperstuf@gmail.com";
switch ($selectOption) {
    case '1': echo "de keuze is 1";
    break;
    case '2': echo "de keuze is 2";
    break;
    case '3': echo "de keuze is 3";
    break;


  default:
  echo "er is niks geselecteerd";
}


mail($email_to, $name,$email,$subject,$text);
if(mail==true){
  echo "het heeft gewerkt";
}
else{
  echo "er is niks gestuurt";
}*/

if(isset($_POST['submit'])){
    $to = "peperstuf@gmail.com"; // this is your Email address
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['first_name'];
    $subject = "Form submission";
    $text = $name . " " . " wrote the following:" . "\n\n" . $_POST['text'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['text'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$text,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

 ?>
