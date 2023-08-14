<?php

require __DIR__ . '/vendor/autoload.php';
use Orhanerday\OpenAi\OpenAi;

// TO DO set up Env variable $open_ai_key = getenv('OPENAI_API_KEY');

$open_ai_key = 'ForPrivacyrRemovedKey';

$open_ai = new OpenAi($open_ai_key);

$prompt = $_POST['prompt'];

$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => 'Generate 3 Facebook advertisements about ' . $prompt,
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
 ]);

//  var_dump($complete);

// decode response
$response = json_decode($complete, true);
$response = $response["choices"][0]["text"];
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
    <h1> Here are your 3 Facebook ads about: <?= $prompt?> </h1>
    <div class ="output-text">
    <?= $response ?>
    </div>

</body>
</html>
