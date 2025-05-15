
<?php
// Change this email to your own
$your_email = "youremail@example.com";

// Simple captcha verification
if(isset($_POST['captcha']) && $_POST['captcha'] == '7') {

    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST['phone']));
    $message = strip_tags(trim($_POST['message']));

    $subject = "New Contact Form Submission";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if(mail($your_email, $subject, $email_content, $headers)) {
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Sorry, there was a problem sending your message.";
    }

} else {
    echo "Captcha incorrect. Please try again.";
}
?>
