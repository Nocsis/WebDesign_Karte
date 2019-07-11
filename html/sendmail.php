<?php

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $mailFrom = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "nicoslentzsch@web.de"; //info@tornachzion.de
    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=utf-8";
    $headers[] = "From: ".$mailFrom;
    $txt = $name." schreibt über das Überleben-Kontaktformular:\n\n".$message;

    mail($mailTo, $subject, $txt, implode("\r\n",$headers));
    header("Location: contact.php?sent");
}