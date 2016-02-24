<?php

$selectOption = $_POST['contact_id'];
//$name = $_POST['name'];
//$email = $_POST['email'];
//$subject =$_POST['subject'];

/*if ($selectOption==1) {
  echo "de optie is 1";
}
elseif ($selectOption==2) {
  echo "de optie is 2";
}
elseif ($selectOption==3) {
  echo"de optie is 3";
}
elseif ($selectOption==4) {
  echo"de optie is 4";
}
elseif ($selectOption==5) {
  echo"de optie is 5";
}*/
if(isset($_POST['contact_id'])){
  echo "hij is gevult";
}
else{
  echo "er staat niks in";
}







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







 ?>
