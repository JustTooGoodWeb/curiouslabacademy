<?php
session_start();

// Check if enrollment data exists
if (!isset($_SESSION['enrollment_data'])) {
    header("Location: enroll.php");
    exit();
}

$enrollment_data = $_SESSION['enrollment_data'];

// Your Paystack secret key (you'll provide this)
$paystack_secret_key = 'sk_live_c26e98c514169df543e8ee06d1a809e8958f1e35';

// Initialize Paystack payment
$curl = curl_init();

$email = $enrollment_data['parent_email'];
$amount = $enrollment_data['amount']; // amount in kobo
$reference = $enrollment_data['reference'];

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount' => $amount,
    'email' => $email,
    'reference' => $reference,
    'callback_url' => 'https://curiouslabacademy.com/payment-verification.php',
    'metadata' => [
        'student_name' => $enrollment_data['student_name'],
        'course' => $enrollment_data['course']
    ]
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer " . $paystack_secret_key,
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    // Handle error
    header("Location: enroll.php?payment_error=1");
    exit();
} else {
    $result = json_decode($response);
    if ($result->status) {
        // Redirect to Paystack payment page
        header("Location: " . $result->data->authorization_url);
        exit();
    } else {
        // Handle error
        header("Location: enroll.php?payment_error=1");
        exit();
    }
}
?>