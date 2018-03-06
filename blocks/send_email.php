<?php 

  $sender_name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'] ;

  try {   
         mail( "info@vdstudio.net.ua", "Лист з сайту vdstudio.net.ua", $message, "From:  ".$email."<".$sender_name.">" );
         mail( "vites@outlook.com", "Лист з сайту vdstudio.net.ua", $message, "From:  ".$email."<".$sender_name.">" );
       }
  catch (Exception $e) {
         header("HTTP/1.1 301 Moved Permanently");                    
         header("Location: ../index.php&error=Лист не надіслано - ".$e->getMessage());  
         exit;
       }
  header("HTTP/1.1 301 Moved Permanently");                    
  header("Location: ../index.php&result=Лист надіслано успішно!");  
  exit;


?>