<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mlid = htmlspecialchars($_POST['mlid']);
    $server = htmlspecialchars($_POST['server']);
    $account = htmlspecialchars($_POST['account']);
    
    $to = "anajaosidmichael99@gmail.com";
    $subject = "Mobile Legends Group Application";
    $message = "ML ID: $mlid\nServer: $server\nAccount Bind: $account";
    $headers = "From: no-reply@yourdomain.com";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
