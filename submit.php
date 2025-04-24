<?php
// Replace with your actual Slack webhook URL
$webhook_url = "https://hooks.slack.com/services/YOUR/WEBHOOK/URL";

// Collect and sanitize form data
$agent = htmlspecialchars($_POST['agent_name']);
$client = htmlspecialchars($_POST['client_name']);
$order = htmlspecialchars($_POST['order_details']);

// Format message
$message = "*📦 New Order Submitted*\n"
         . "*👤 Agent:* $agent\n"
         . "*🧑‍💼 Client:* $client\n"
         . "*📝 Order Details:*\n$order";

// Prepare JSON payload
$payload = json_encode(["text" => $message]);

// Send to Slack
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);
curl_close($ch);

// Confirmation
echo "<h3 style='text-align:center; margin-top:50px;'>✅ Order sent to Slack successfully!</h3>";
?>
