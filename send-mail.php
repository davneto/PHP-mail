<?php

    // Pear Mail Library
    require_once "Mail.php";

    $from = '<example@gmail.com>';
    $to = '<example@gmail.com>';
    $subject = 'Testing mailer script';
    $body = "This message was automatically generated";

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'example@gmail.com',
        'password' => 'examplepassword'
    ));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        echo('<p>' . $mail->getMessage() . '</p>');
    } else {
        echo('<p>Message successfully sent!</p>');
    }

?>