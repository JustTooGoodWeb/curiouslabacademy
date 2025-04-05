<?php
// process-contact.php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Company email details
        $companyEmail = "info@curiouslabacademy.com";
        $companySubject = "New Contact Form Submission: " . $subject;
        
        // User confirmation email details
        $userSubject = "Thank you for contacting CuriousLab Academy";
        
        // Email headers
        $headers = "From: CuriousLab Academy <noreply@curiouslabacademy.com>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        // Company email content
        $companyContent = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #005BBB; color: white; padding: 10px; text-align: center; }
                .content { padding: 20px; }
                .footer { margin-top: 20px; font-size: 0.9em; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='content'>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Subject:</strong> $subject</p>
                    <p><strong>Message:</strong></p>
                    <p>$message</p>
                </div>
                <div class='footer'>
                    <p>This email was sent from the contact form on CuriousLab Academy website.</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // User confirmation email content
        $userContent = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #005BBB; color: white; padding: 10px; text-align: center; }
                .content { padding: 20px; }
                .footer { margin-top: 20px; font-size: 0.9em; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Thank You for Contacting Us</h2>
                </div>
                <div class='content'>
                    <p>Dear $name,</p>
                    <p>Thank you for reaching out to CuriousLab Academy. We have received your message and our team will get back to you within 24-48 hours.</p>
                    <p>Here's a copy of your message for your reference:</p>
                    <p><strong>Subject:</strong> $subject</p>
                    <p><strong>Message:</strong></p>
                    <p>$message</p>
                    <p>If you have any urgent inquiries, please feel free to call us at +234 815 301 0297.</p>
                </div>
                <div class='footer'>
                    <p>Best regards,<br>The CuriousLab Academy Team</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Send emails
        $companyMailSent = mail($companyEmail, $companySubject, $companyContent, $headers);
        $userMailSent = mail($email, $userSubject, $userContent, $headers);
        
        // Prepare response
        if ($companyMailSent && $userMailSent) {
            // Success - return JSON response for SweetAlert
            header('Content-Type: application/json');
            echo json_encode([
                'status' => 'success',
                'message' => 'Your message has been sent successfully! We have also sent a confirmation to your email.'
            ]);
        } else {
            // Error sending email
            header('Content-Type: application/json');
            echo json_encode([
                'status' => 'error',
                'message' => 'There was a problem sending your message. Please try again later.'
            ]);
        }
    } else {
        // Validation errors
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'error',
            'message' => implode('<br>', $errors)
        ]);
    }
} else {
    // Not a POST request
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
}
?>