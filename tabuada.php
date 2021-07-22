<?php
$num = $_GET['num'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuada</title>
</head>

<body>
  <?php for ($1 = 1; $1 < = 9; $1++): ?>
    <h3> <?php echo  $1 * $num; ?> </h3>
    <hr>
  <?php endfor ?>

</body>
</html>