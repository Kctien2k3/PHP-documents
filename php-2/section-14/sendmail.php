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

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tienkcfx21741@funix.edu.vn';                     //SMTP username
    $mail->Password   = 'ddnR4szKMhZY';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       =  587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    // chỉnh sửa lỗi uft-8 
    $mail->CharSet = "UTF-8";

    //Recipients
    $mail->setFrom('tienkcfx21741@funix.edu.vn', 'kc');
    $mail->addAddress('kenkc1999@gmail.com', 'mr tien');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('tienkcfx21741@funix.edu.vn', 'kc');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments (phần thêm hình ảnh or file/ hoặc rename hình ảnh hoặc file đính kèm theo mail)
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'mail được gửi từ kc tien';
    $mail->Body    = 'thông tin được gửi từ tập đoàn kc <b>php master!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'mail đã gửi thành công!';
} catch (Exception $e) {
    echo "mail không thể gửi. chi tiết lỗi: {$mail->ErrorInfo}";
}
?>