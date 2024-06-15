<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal Price</title>
</head>
<body>
<?php
// API URL
$url = "https://api.metals.dev/v1/latest?api_key=700f26d52bb3db9067cb806d73546a0e&currency=USD&unit=toz";

// Initialize cURL session
$curl = curl_init($url);

// Set cURL options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

// Decode JSON response
$data = json_decode($response, true);

// Check if data is valid
if ($data && isset($data['data']['gold']['price'])) {
    // Extract gold price
    $goldPrice = $data['data']['gold']['price'];

    // Display gold price
    echo "<h1>Gold Price</h1>";
    echo "<p>Current Gold Price: $goldPrice USD per ounce</p>";
} else {
    echo "Error: Unable to retrieve metal price data.";
}
?>
</body>
</html>
