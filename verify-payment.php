<?php
// This would handle Paystack's server-to-server webhook notification
// Set this URL in your Paystack dashboard

// Retrieve the input stream
$input = file_get_contents('php://input');
$event = json_decode($input);

if ($event->event === 'charge.success') {
    $reference = $event->data->reference;
    $email = $event->data->customer->email;
    $amount = $event->data->amount / 100; // Convert from kobo to Naira
    
    // Verify the transaction with Paystack API
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer sk_live_c26e98c514169df543e8ee06d1a809e8958f1e35"
        ],
    ));
    
    $response = curl_exec($curl);
    curl_close($curl);
    
    $result = json_decode($response);
    
    if ($result->status && $result->data->status === 'success') {
        // Payment was successful
        // Update your database or send confirmation emails
        
        // Return success response
        http_response_code(200);
        echo json_encode(['status' => true]);
    } else {
        // Payment verification failed
        http_response_code(400);
        echo json_encode(['status' => false]);
    }
} else {
    http_response_code(400);
    echo json_encode(['status' => false, 'message' => 'Invalid event']);
}
?>