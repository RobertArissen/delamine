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
$selectOption = $_POST['contact_id'];
if ($selectOption == 1) {
  $ontvanger = "Sales department";
}
elseif ($selectOption == 2 ) {
  $ontvanger = "Technical Support and Regulatory affairs";
}
elseif ($selectOption == 3 ) {
  $ontvanger = "Customer Service Department";
}
elseif ($selectOption == 4 ) {
  $ontvanger = "Purchasing Department";
}
elseif ($selectOption == 5 ) {
  $ontvanger = "Other Questions";
}



  if (!isset($_POST["name"])||!isset($_POST["subject"])||!isset($_POST["email"])||!isset($_POST["text"])||!isset($_POST["contact_id"])) {
      echo "1";
    }else{
    $to = "peperstuf@gmail.com"; // this is your Email address
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $ontvanger;
    $text =  $name." "."Wrote:". "\n\n".$_POST['text'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['text'];

    $headers = "From:" . $email;
    $headers2 = "From:" . $to;
    mail($to,$subject,$text,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    //header('Location: home/newpenguins/public_html/delamine/contact.html');
    echo "2";
  }


 ?>
