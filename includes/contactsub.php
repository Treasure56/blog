<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$next = $_POST['next'];
$option = $_POST['option'];

try {
    sendMail($email, $name);
adminMail($email, $name, $subject, $message, $option);
header("location: ../$next?success=successful, we will get back to you shortly");
} catch (\Throwable $th) {
    header("location: ../$next?error=sorry an error occured");
}



function sendMail($email, $name)
{
    $mailcontent = '
                        <div>
                            <h3 style="color: green; text-align: center;">blog website</h3>
                            <p>Good Day ' . $name . '....</p>
                            <p>You are getting this mail because you filled in the contact form on our website ......... Please be patient with us while we process your request and get back to you...</p><br><br><br>
                            <p>blog</p>
                            <p style="text-align: center;">2023 &copy; blog All Rights Reserved</p>
                        </div>
                    ';
    $subject = 'Successful Contact';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <support@blog.com>" . "\r\n";
    mail($email, $subject, $mailcontent, $headers);
    return false;
}

function adminMail($email, $name, $subject, $message, $option ="")
{
    $adminemail = 'support@estateagency.com';
    $mailcontent = '
                        <div>
                            <img src="https://www.estaeagency.com/assets/img/logo.png" width="50" height="50">
                            <h3 style="color: green; text-align: center;">blog webite</h3>
                            <p>Customer Name: ' . $name . '....</p>
                            <p>Customer Email: ' . $email . '....</p>
                            <p>i Knew you from: ' . $option . '....</p>
                            <p>Message:<br>' . $message . '</p>
                            <br><br><br>
                            <p>blog</p>
                            <p style="text-align: center;">2023 &copy; blog All Rights Reserved</p>
                        </div>
                    ';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <support@blog.com>" . "\r\n";
    mail($adminemail, $subject, $mailcontent, $headers);
    return false;
}

?>