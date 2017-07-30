<?php
$title = "Elérhetőségeink";
include "_partials/header.php"
?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="well" style="margin-top: 10%;">
            <h3>Send me a message</h3>
            <form role="form" id="contactForm" data-toggle="validator" class="shake" method="post">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="name" class="h4">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                        <div class="help-block with-errors"></div>
                    </div>
<!--                    <div class="form-group col-sm-6">-->
<!--                        <label for="email" class="h4">Email</label>-->
<!--                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>-->
<!--                        <div class="help-block with-errors"></div>-->
<!--                    </div>-->
                </div>
                <div class="form-group">
                    <label for="message" class="h4 ">Message</label>
                    <textarea id="message" class="form-control" rows="5"  name="message" placeholder="Enter your message" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

<?php
//require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
//
//$mail = new PHPMailer;
//
////$mail->SMTPDebug = 3;                               // Enable verbose debug output
//
//$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp.trollnalja.sk';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                           // Enable SMTP authentication
//$mail->Username = 'brthong@trollnalja.sk';                 // SMTP username
//$mail->Password = 'trollnalja2017';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 25;                                    // TCP port to connect to
//
////$mail->setFrom('from@example.com', 'Mailer');
//$mail->addAddress('trollnaljaoffcial@gmail.com', 'B RT');     // Add a recipient
////$mail->addAddress('ellen@example.com');               // Name is optional
////$mail->addReplyTo('info@example.com', 'Information');
////$mail->addCC('cc@example.com');
////$mail->addBCC('bcc@example.com');
////
////$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
////$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
////$mail->isHTML(true);                                  // Set email format to HTML
//
//$mail->Subject = 'Here is the subject';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//} else {
//    echo 'Message has been sent';
//}
//?>
<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->setFrom('brthong@trollnalja.sk', 'BR Thong');
$mail->addAddress('brthong@trollnalja.sk', $_POST['name']);
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = $_POST['message'];
if(!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}
?>



<?php
include "_partials/footer.php";