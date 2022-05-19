<?php
require "../connect.php";
if(isset($_POST['email_data'])){
    require "../vendor/phpmailer/phpmailer/src/PHPMailer.php";
    require "../vendor/phpmailer/phpmailer/src/Exception.php";
    require "../vendor/phpmailer/phpmailer/src/SMTP.php";
    $output = "";
    foreach($_POST['email_data'] as $row){
        $query = "INSERT INTO `caregiver_appointment` VALUES ('', '".$row['user']."','".$row['caregiver']."', '".$row['contact']."', '".$row['date']."', '".$row['start']." - ".$row['end']."', '".$row['day']."')";
        if($query_run = mysqli_query($con, $query)){
            echo "Success";
        }else{
            echo "error";
        }


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
        $mail->Subject = "Home Based Care / Caregiver Appointment";
        $mail->Body = '<p>You have a new booking appointment, Please see the patients details:</p><p>Name: '.$row['user'].'</p> <p>Date: '.$row['date'].'</p> <p>Day: '.$row['day'].'</p> <p>Start Time: '.$row['start']. '</p> <p>End Time: '.$row['end'].'</p>';
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