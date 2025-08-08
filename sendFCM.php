<?php
require_once __DIR__ . '/vendor/autoload.php';

use Google\Auth\Credentials\firebaseKeys;
use GuzzleHttp\Client;

// Load the service account key
$credentials = new firebaseKeys(
    'https://www.googleapis.com/auth/firebase.messaging',
    json_decode(file_get_contents(__DIR__ . '/firebase-key.json'), true)
);

// Get access token
$token = $credentials->fetchAuthToken()['access_token'];

// Set your Firebase project ID
$projectId = 'ambrosia-ayurved'; 

// Prepare notification
$message = [
    'message' => [
        'topic' => 'all_users',
        'notification' => [
            'title' => 'Hello Everyone!',
            'body' => 'This is a topic message using FCM v1',
        ],
    ],
];

// Send message
$client = new Client();
$response = $client->post("https://fcm.googleapis.com/v1/projects/{$projectId}/messages:send", [
    'headers' => [
        'Authorization' => "Bearer {$token}",
        'Content-Type' => 'application/json',
    ],
    'body' => json_encode($message),
]);

echo $response->getBody();
