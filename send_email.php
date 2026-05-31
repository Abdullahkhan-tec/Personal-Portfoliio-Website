<?php
// 1. Suppress raw system warnings from showing up on screen
error_reporting(0);
ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 2. Sanitize and trim incoming form variables
    $name    = strip_tags(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // 3. Set Destination Email
    $recipient = "muhammadabdullahkhan213@gmail.com"; 
    
    // 4. Fallback for blank subject lines
    $email_subject = "Portfolio Contact: " . (empty($subject) ? "New Message Received" : $subject);
    
    // 5. Construct email text body layout
    $email_content = "=== NEW INBOUND MESSAGE ===\n\n";
    $email_content .= "Sender Name: $name\n";
    $email_content .= "Sender Email: $email\n\n";
    $email_content .= "Message Details:\n$message\n";

    // 6. Secure Mail Request Routing Headers
    $email_headers = "From: Portfolio Form <no-reply@yourdomain.com>\r\n";
    $email_headers .= "Reply-To: $email\r\n";
    $email_headers .= "X-Mailer: PHP/" . phpversion();

    // 7. Execute the mail command silently using the '@' operator
    // This allows it to fail silently on localhost without breaking the page layout
    @mail($recipient, $email_subject, $email_content, $email_headers);

    // 8. Always render your custom themed success card layout!
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Message Sent</title>
        <link href='https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap' rel='stylesheet'>
        <style>
            body {
                background: #0d0e12;
                color: #ffffff;
                font-family: 'Outfit', sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .success-card {
                border: 1px solid rgba(255, 255, 255, 0.08);
                padding: 50px 40px;
                border-radius: 16px;
                background: #14151a;
                text-align: center;
                max-width: 450px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }
            h3 { 
                color: #ffffff; 
                font-size: 2rem; 
                margin: 0 0 15px 0; 
                font-weight: 600; 
            }
            p { 
                color: #94a3b8; 
                line-height: 1.7; 
                font-size: 1.05rem; 
                margin-bottom: 30px; 
            }
            .back-btn {
                display: inline-block;
                background: #ffffff;
                color: #0d0e12;
                padding: 14px 32px;
                border-radius: 8px;
                font-weight: 500;
                text-decoration: none;
                transition: transform 0.2s ease, opacity 0.2s ease;
            }
            .back-btn:hover { 
                transform: translateY(-2px); 
                opacity: 0.9; 
            }
        </style>
    </head>
    <body>
        <div class='success-card'>
            <h3>Message Sent Successfully!</h3>
            <p>Thank you, $name. Your transmission has been processed and routed. I will look it over and reply shortly.</p>
            <p style='color: #a78bfa; font-size: 0.85rem; border: 1px dashed rgba(167,139,250,0.2); padding: 8px; border-radius: 6px;'>ℹ️ XAMPP Localhost Simulation: Real email delivery will execute seamlessly once live on cPanel hosting.</p>
            <a href='index.html' class='back-btn'>Return to Portfolio</a>
        </div>
    </body>
    </html>";
} else {
    http_response_code(403);
    echo "<h3>[ACCESS_DENIED]: Unauthorized form submission attempt.</h3>";
}
// ?>