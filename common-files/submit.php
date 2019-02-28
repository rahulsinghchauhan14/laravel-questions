<?php 
  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $mobile = $_POST['phone']; 
    $message = $_POST['message'];
    
    if ($email !='' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      if($mobile !='' && preg_match("/^[0-9]{10}+$/", $mobile)){
         sendMailAdmin($name,$email,$mobile,$message); 
      }else{
          echo "Please enter valid phone number.";
      }
    } else {
      echo "Please enter valid email address";
    }
}else{
    echo "Invalid URL";
}

function sendMailAdmin($name='',$mail='',$phone='',$messages='')
{
    $to = "info@jountcity.com";
    $subject = "New Inquery from Jountcity";
    
    $message = "
    <html>
    <head>
    <title>New Inquery from Jountcity</title>
    </head>
    <body>
    <p>New Inquery from Jountcity</p><br>
    <address>
        <b>First Name: </b>".$name."<br> 
        <b>Email ID: </b>".$mail."<br>
        <b>Phone Number: </b>".$phone."<br> 
        <b>Message: </b>".$messages."<br>
    </address> 
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <info@jountcity.com>' . "\r\n"; 
    
    $mail_submit = mail($to,$subject,$message,$headers);
    if($mail_submit){
        echo 1;
    }else{ 
       echo 0;
    }
} 