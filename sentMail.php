<?php
require 'vendor/autoload.php';


$apiKey =  "6330469044e3b3833cfeba4d335752a6-da554c25-cd0cccf0";
$domain =   "newwaycm.com";
$toEmail = "dkmtime440@gmail.com";
$fromEmail = "postmaster@newwaycm.com";
// Initialize Mailgun client
$url = "https://api.mailgun.net/v3/$domain/messages";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        // Create the email content
        $body = "You have received a new message from the contact form:\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Subject: $subject\n\n";
        $body .= "Message: $message";

        // cURL setup
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'from'    => "$name <$fromEmail>",
            'to'      => $toEmail,
            'subject' => $subject,
            'text'    => $body,
        ]);

        // Execute cURL request
        $result = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Handle response
        if ($httpStatus != 200) {
            $errorMsg = $curlError ?: $result;
            throw new Exception("Error sending message: " . htmlspecialchars($errorMsg));
        }

        // Redirect on success
        header("Location: index.php?status=success");
        exit;
    } catch (Exception $e) {
        // Display error message
        echo "<p style='color: red;'>Error: " . $e->getMessage() . "</p>";
    }
}
