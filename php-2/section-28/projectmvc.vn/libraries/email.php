<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'vendor/autoload.php';
// bạn phải bỏ phần path/to ở phí trước !
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_mail($sent_to_email, $sent_to_fullname, $subject, $content, $option = array())
{
    global $config;
    $config_email = $config['email'];
    $mail = new PHPMailer(true); //Create an instance; passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = $config_email['smtp_host']; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $config_email['smtp_user']; //SMTP username
        $mail->Password = $config_email['smtp_pass']; //SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure']; //Enable implicit TLS encryption
        $mail->Port = $config_email['smtp_port']; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        // chỉnh sửa lỗi uft-8 
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom($config_email['smtp_user'], $config_email['smtp_fullname']);
        $mail->addAddress($sent_to_email, $sent_to_fullname); //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($config_email['smtp_user'], $config_email['smtp_fullname']);
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments (phần thêm hình ảnh or file/ hoặc rename hình ảnh hoặc file đính kèm theo mail)
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
        // echo 'mail đã gửi thành công!';
    } catch (Exception $e) {
        echo "mail không thể gửi. chi tiết lỗi: {$mail->ErrorInfo}";
    }
}
?>