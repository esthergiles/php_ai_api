<?php

require __DIR__ . '/vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;

// TO DO set up Env variable $open_ai_key = getenv('OPENAI_API_KEY');

$open_ai_key = 'add key here';

$open_ai = new OpenAi($open_ai_key);

$prompt = $_POST['prompt'];

$complete = $open_ai->image([
    "prompt" => $prompt,
    "n" => 1,
    "size" => "256x256",
    "response_format" => "url",
 ]);

//  var_dump($complete);

// decode response
$response = json_decode($complete, true);
// $response = $response["choices"][0]["text"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <style>
    .output-text{
        white-space: break-spaces;
    } </style>
</head>
<body>
    <h1> Here is your AI generated image about <?= $prompt?> </h1>
    <div>
    <img src ="<?= $response["data"][0]["url"] ?>" />
    </div>

</body>
</html>
