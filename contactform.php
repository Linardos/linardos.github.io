<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form'; 
    $to = 'linardos.akis@gmail.com';
    $subject = 'Message from Contact Demo ';
    $txt = "You have received an email from".$name.".\n\n".$message;
    mail($to, $subject, $txt, $from);
    header('Location: index.html');
}

