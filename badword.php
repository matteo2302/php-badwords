<?php 
$phrase = $_GET['phrase'];
$bad = $_GET['bad'];
$result_censored = str_replace($bad,'***',$phrase)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>la tua frase è "<?= $phrase ?>" ed è lunga <?= strlen($phrase)?> caratteri</h1>
  <h1>la tua frase censurata è "<?= $result_censored ?>" ed è lunga <?= strlen($result_censored)?> caratteri</h1>
</body>
</html>