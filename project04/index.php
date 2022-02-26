<?php 
    $firstName = "Janzen";
    $lastName = "Faidiban";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML, CSS, PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="namaDepan">
        <?php echo $firstName; ?>
    </div> <!-- end .namaDepan -->
    <div class="namaBelakang">
        <?php echo $lastName; ?>
    </div> <!-- end .namaBelakang -->
</body>

</html>