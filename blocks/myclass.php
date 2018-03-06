<?php

class Adminka 
{ 

public function send($client_id, $post_title_vk, $vk_post_img_code)
      {  
        include ("php.php");   
        $result = mysqli_query($db,"UPDATE clientsGlobals_onModeration 
                               SET post_title_vk = '$post_title_vk', vk_post_img_code = '$vk_post_img_code'
                               WHERE client_id = $client_id "); 
        if (!$result) { return 'Пост не отправлен на модерацию!';exit;}    
        else { $client_name = Adminka::getClientName($client_id); 
          $to1      = 'info@etowifi-detka.com';
          $to2      = 'vites@outlook.com';
          $subject = "Новый пост на модерацию от $client_name";
          $message = "Новый пост на модерацию от $client_name: ".$post_title_vk;
          $headers = "From: moderation@etowifi-detka.com" . "\r\n" .
                     "Reply-To:vites@outlook.com" . "\r\n" .
                     "X-Mailer: PHP/" . phpversion();
          mail($to1, $subject, $message, $headers); 
          mail($to2, $subject, $message, $headers); 
          return 'Пост отправлен на модерацию!'; exit; 
        } 
      }


    }
    ?>