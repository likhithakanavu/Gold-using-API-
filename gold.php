<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Price</title>
</head>
<body>
    <!-- <h1>Gold Price</h1>
    <p id="goldPrice"></p> -->

    <?php
    // Set up the request parameters
    $apiURL = "https://www.goldapi.io/api/XAU/INR"; 
    $apiKey = "goldapi-2ej6secsluarjpeq-io"; 

    // Set up the request headers
    $headers = array(
        "x-access-token: $apiKey",
        "Content-Type: application/json"
    );

    // Set up cURL options
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $apiURL,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $headers,
    ));

    // Execute the request
    $response = curl_exec($curl);
    $err = curl_error($curl);

    // Close cURL session
    curl_close($curl);

    // If there is an error, display it
    if ($err) {
        echo "Error: $err";
    } else {
        // Decode JSON response
        $data = json_decode($response, true);

        // Calculate gold price per gram
        $goldPricePerGram = $data['price'] / 31.1035;

        $_SESSION['goldprice'] = $goldPricePerGram;

        // echo $_SESSION['goldprice'];

        // Display the gold price
        echo "<script>";
        echo "console.log('Current Gold Price per gram (INR): $goldPricePerGram');";
        echo "document.getElementById('goldPrice').innerText = 'Current Gold Price per gram (INR): ' + $goldPricePerGram.toFixed(2);";
        echo "</script>";
    }
    ?>
</body>
</html>


<!-- https://www.goldapi.io/dashboard -->