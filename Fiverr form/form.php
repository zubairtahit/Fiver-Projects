<?php
if(isset($_POST['name'])){

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    if(isset($_POST['post'])) {
        $message .= "<tr style='background: #eee;'><td><strong>Post:</strong> </td><td>" . strip_tags($_POST['post']) . "</td></tr>";
    }
    $message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
    if(isset($_POST['phone'])) {
        $message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
    }
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    if(isset($_POST['suburb'])) {
        $message .= "<tr><td><strong>Suburb:</strong> </td><td>" . strip_tags($_POST['suburb']) . "</td></tr>";
    }
    if(isset($_POST['startField'])) {
        $message .= "<tr><td><strong>When Would you like to start:</strong> </td><td>" . strip_tags($_POST['startField']) . "</td></tr>";
    }
    if(isset($_POST['description'])) {
        $message .= "<tr><td><strong>Description:</strong> </td><td>" . $_POST['description'] . "</td></tr>";
    }
    if(isset($_POST['message'])) {
        $message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    }
    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Myreno <webmaster@myreno.com.au>' . "\r\n";
    $to = "info@myreno.com.au";
    $subject = "Contact Form";
    if(isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }

    $result = mail($to,$subject,$message,$headers);
}
?>