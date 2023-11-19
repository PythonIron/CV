<?php
    require '../../vendor/autoload.php';
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['send_mail']) and isset($_POST['name']) and isset($_POST['genre']) and isset($_POST['mail']) and isset($_POST['subject']) and isset($_POST['message'])) {
        $Name = $_POST['name'];
        $genre = $_POST['genre'];
        $email = $_POST['mail'];
        $sujet = $_POST['subject'];
        $message = $_POST['message'];
        ob_start();
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'philibert.gentien.pro@gmail.com';                     //SMTP username
            $mail->Password   = 'kslwoilxapoyqnny';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom($email,'Prise de contact');
            $mail->addAddress('philibert.gentien.pro@gmail.com', 'Philibert Gentien');     //Add a recipient
    
            //Content
            $mail->isHTML(true);              //Set email format to HTML
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $sujet; // Mettre la raison de l'email
            $mail->Body    = '<p>Bonjour une nouvelle personne vous à contacté !</p><ul>   <li><p>Nom : '.$Name.'</p></li>   <li><p>Genre : '.$genre.'</p></li>    <li><p>E-mail : '.$email.'</p></li>    <li><p>Sujet : '.$sujet.'</p></li>     <li><p>Message :</p></li>  <p>'.$message.'</p> <br> <p>Merci et à bientôt</p></ul>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
            $mail->send();
            header("Location: ../../index.php");
            exit();
        } catch (Exception $e) {
            header("Location: ../../index.php");
            exit();
            ob_end_flush();
        }
    }
?>

