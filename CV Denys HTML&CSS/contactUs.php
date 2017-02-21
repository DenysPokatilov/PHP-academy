<?php
/**
 * Created by PhpStorm.
 * User: Denys
 * Date: 19.02.2017
 * Time: 23:54
 */
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 10.02.2017
 * Time: 18:59
 */

$errorMessages = [];
$fileName = 'userComments.dat';

if ($_POST) {
    if (empty($_POST['uName'])) {
        $errorMessages[] = 'Username is empty!';
    }
    if (empty($_POST['uMail'])) {
        $errorMessages[] = 'User email is empty!';
    } elseif (!filter_var($_POST['uMail'], FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = 'User email has wrong forat!';
    }
    if (empty($_POST['uComment'])) {
        $errorMessages[] = 'User comment is empty!';
    }
    if (empty($errorMessages)) {
        setComments($_POST);
    }
}

function getComments()
{
    global $fileName;
    if (file_exists($fileName)) {
        return file_get_contents($fileName);
    }
}

function setComments($data)
{
    global $fileName;
    $prevComments = getComments();
    if (($prevComments !== false) && (!empty($prevComments))) {
        $aPrevData = unserialize($prevComments);
    } else {
        $aPrevData = [];
    }
    $data['addedDate'] = date('Y-m-d H:i:s');
    $aNewData = array_merge([$data], $aPrevData);
    echo '<p>Debug all comments: </p><pre>' . var_export($aNewData, 1) . '</pre>';
    $sData = serialize($aNewData);
    file_put_contents($fileName, $sData);
}

function getErrorMessages()
{
    global $errorMessages;
    if (! empty($errorMessages)) {
        foreach ($errorMessages as $error) {
            echo '<p class="error">' . $error . '</p>';
        }
    }
}

function displayComments()
{
    $sComm = getComments();
    if ($sComm !== false) {
        $aComm = unserialize($sComm);
        if (!empty($aComm)) {
            foreach ($aComm as $comm) {
                echo '<div class="comment">' .
                    '<p><span class="date">' . $comm['addedDate'] . '</span> by <a href="mailto:' . $comm['uMail'] . '">' . $comm['uName'] . '</a>:</p>' .
                    '<div class="comment-text">' . antimat($comm['uComment']) . '</div>'.
                    '</div>';
            }
        }
    }
}

function antimat($str)
{
    return str_replace([
        'Choko',
        'test',
    ], [
        'Ch***',
        't***',
    ], $str);
}



require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'denyspokatilov@gmail.com';                 // SMTP username
$mail->Password = 'Sydak2009';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


