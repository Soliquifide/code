<?php   

if ($_SERVER["REQUEST_METHOD"]=="POST") {


   $name = $_POST['FullName'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $feedback = $_POST['feedback'];
   $to = "mychoperez949@gmail.com"; //email for keiken ramen
   $header = "Form $email";
 
   if(mail($to,$subject,$feedback,$header)) {
      echo "Email Sent Successfully!!!";
   }else{
      echo "Email Sent Unsuccessfully";
   }
}
?>

