<?php
// chat_backend.php

// Read incoming POST data
$input = json_decode(file_get_contents("php://input"), true);
$message = trim($input["message"] ?? "");

// Check for empty message
if (!$message) {
    echo json_encode(["reply" => "Empty message."]);
    exit;
}

// Call OpenAI API (replace YOUR_API_KEY with your key)
$apiKey = "YOUR_OPENAI_API_KEY";
$apiUrl = "https://api.openai.com/v1/chat/completions";

$data = [
    "model" => "gpt-3.5-turbo",
    "messages" => [
        ["role" => "system", "content" => "You are a helpful assistant."],
        ["role" => "user", "content" => $message]
    ]
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
]);

$response = curl_exec($ch);
curl_close($ch);

$responseData = json_decode($response, true);
$reply = $responseData['choices'][0]['message']['content'] ?? "Error getting response.";

echo json_encode(["reply" => $reply]);
