<?php
$quote = "C'era una volta... Un re!  diranno subito i miei piccoli lettori. No, ragazzi, avete sbagliato. C'era una volta un pezzo di legno. Non era un legno di lusso, ma un semplice pezzo da catasta, di quelli che d'inverno si mettono nelle stufe e nei caminetti per accendere il fuoco e per riscaldare le stanze.";
$censored = str_replace($_GET["censura"], '***', $quote);
$censura = $_GET["censura"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>FRASE</h1>
        <h3><?php echo $quote ?></h3>
        <h3>La frase è lunga:<?php echo strlen($quote) ?> caratteri</h3>
    </div>
    <hr>
    <div>
        <h1>FRASE CENSURATA</h1>
        <h3><?php echo $censored ?></h3>
        <h3>La frase è lunga:<?php echo strlen($censored) ?> caratteri</h3>
    </div>
</body>

</html>