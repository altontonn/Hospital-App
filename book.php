<?php
if(isset($_POST['email_data'])){
    require "./vendor/phpmailer/phpmailer/src/PHPMailer.php";
    require "./vendor/phpmailer/phpmailer/src/Exception.php";
    require "./vendor/phpmailer/phpmailer/src/SMTP.php";
    $output = "";
    foreach($_POST['email_data'] as $row){
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP(); 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls';

        $mail->Username = 'altontonnalumasa@gmail.com';  
        $mail->Password = 'newton%%22'; 

        $mail->setFrom($row['user'] ,$row['date']);
        $mail->addAddress('newtonalumasa82@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = "Home Based Care";
        $mail->Body = '<h1>Caregiver</h1><br> Name: '.$row['user']. '<br>Date: '.$row['date']. '<br>Day: '.$row['day']. '<br>Start Time: '.$row['start']. '<br>End Time: '.$row['end'];
        $result = $mail -> send();
        if($result['code'] == '400'){
            $output .= html_entity_decode($result['full_error']);
        }
    }
    if($output == ''){
        echo 'ok';
    }else{
        echo $output;
    }
}