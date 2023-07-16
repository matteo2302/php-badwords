<?php 
$phrase = $_GET['phrase'];
$bad = $_GET['bad'];
// $result = 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>la tua frase è "<?= $phrase ?>"</h1>
  <h1>la tua badword è "<?= $bad ?>"</h1>
</body>
</html>