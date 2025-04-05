<?php
session_start();

// Check if reference exists
if (!isset($_GET['reference'])) {
    header("Location: enroll.php");
    exit();
}

$reference = $_GET['reference'];

// Your Paystack secret key
$paystack_secret_key = 'sk_live_c26e98c514169df543e8ee06d1a809e8958f1e35';

// Verify payment
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => [
    "accept: application/json",
    "authorization: Bearer " . $paystack_secret_key,
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
    if ($result->status && $result->data->status === 'success') {
        // Payment successful
        // Send confirmation email, update database, etc.
        
        // Clear session data
        unset($_SESSION['enrollment_data']);
        
        // Redirect to success page
        header("Location: enrollment-success.php");
        exit();
    } else {
        // Payment failed
        header("Location: enroll.php?payment_error=1");
        exit();
    }
}
?>