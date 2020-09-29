<?php

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $msg = $_POST['msg'];

    $email_subject = "Nauja Žinutė";
    $to = "test@mmdogs.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "Atsiųsta žinutė nuo ". $name.".\n\n".$msg;

    mail($to, $email_subject, $txt, $headers);
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Jūsų žinutė gauta. Susisieksime su Jumis artimiausiu metu.');
        window.location.href='index.html';</SCRIPT>");
    header("Location: index.html");
?>