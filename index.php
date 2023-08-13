<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1> What topic do you want to generate ad content for? </h1>
</div>
<div>
    <form action="ai.php" method="post">
        <div>
            <input type="text" name="prompt" placeholder="shoes, burger, ect" />
        </div>
        <div>
            <input type="submit" value="generate" />
        </div>
    </form>
</div>
<hr>
<div>
    <h1> Image Generation By AI </h1>
</div>
<div>
    <form action="image-ai.php" method="post">
        <div>
            <input type="text" name="prompt" placeholder="shoes, burger, ect" />
        </div>
        <div>
            <input type="submit" value="Generate Image" />
        </div>
    </form>
</div>
</body>
</html>