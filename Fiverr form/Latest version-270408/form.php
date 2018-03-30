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
    if(isset($_POST['service'])) {
        $message .= "<tr><td><strong>Service:</strong> </td><td>" . $_POST['service'] . "</td></tr>";
    }
    if(isset($_POST['description'])) {
        $message .= "<tr><td><strong>Description:</strong> </td><td>" . $_POST['description'] . "</td></tr>";
    }
    if(isset($_POST['message'])) {
        $message .= "<tr><td><strong>Message:</strong> </td><td>" . strip_tags($_POST['message']) . "</td></tr>";
    }
    if(isset($_POST['comments'])) {
        $message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
    }

    if(isset($_FILES) && !empty($_FILES["image"]["type"])) {
        for($i=0; $i<count($_FILES["image"]["type"]); $i++)
        {
            $fileName = time() . '_' . $_FILES['image']['name'][$i];
            $valid_extensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["image"]["name"][$i]);
            $file_extension = end($temporary);
            if ((($_FILES["image"]["type"][$i] == "image/png") || ($_FILES["image"]["type"][$i] == "image/jpg") || ($_FILES["image"]["type"][$i] == "image/jpeg")) && in_array($file_extension, $valid_extensions)) {
                $sourcePath = $_FILES['image']['tmp_name'][$i];
                $targetPath = "assets/uploads/" . $fileName;
                if (move_uploaded_file($sourcePath, $targetPath)) {
                    $uploadedFile =  "http://" . $_SERVER['SERVER_NAME']."/" . strip_tags($targetPath);
                    $titleCount = $i+1;
                    $message .= "<tr><td><strong>Image ".$titleCount.":</strong> </td><td><a target='_blank' href='" . $uploadedFile . "'><img style='width: 100px;' src='" . $uploadedFile . "'></a></td></tr>";
                }
            }
        }
    }

    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Myreno <webmaster@myreno.com.au>' . "\r\n";
    $to = "info@myreno.com.au";
    //$to = "zubairtahir98@gmail.com";
    $subject = "Contact Form";
    if(isset($_POST['subject'])) {
        $subject = $_POST['subject'];
    }

    $result = mail($to,$subject,$message,$headers);
}
?>