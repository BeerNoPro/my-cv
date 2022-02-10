<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require  './my_cv/sendmail/PHPMailer-master/PHPMailer-master/src/Exception.php';
    require  './my_cv/sendmail/PHPMailer-master/PHPMailer-master/src/OAuth.php';
    require  './my_cv/sendmail/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
    require  './my_cv/sendmail/PHPMailer-master/PHPMailer-master/src/POP3.php';
    require  './my_cv/sendmail/PHPMailer-master/PHPMailer-master/src/SMTP.php';


    function senEmail($fullname, $email, $note) {
        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;          
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'phamviethungqnm@gmail.com';
        $mail->Password   = 'tbyvkmhfahyrmzvg';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // recipients
        $mail->setFrom('phamviethungqnm@gmail.com', 'Hung');
        $mail->addAddress($email);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Hello ' . $fullname;
        $mail->Body    = $note;
        $mail->AltBody = 'xyz';
        $mail->send();
        // echo "Send email success";
    };

?>