<?php $title = 'PHP is amazing!' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        .body-1{
            background-color: lightgrey;
        }
        .body-2{
            background-color: grey;
        }
        .body-3{
            background-color: red;
        }
        .body-4{
            background-color: blue;
        }
        .body-5{
            background-color: brown;
        }
        .body-6{
            background-color: white;
        }
    </style>
</head>
<body class="body-<?php echo rand(1, 6) ?>">
    <?php 
        echo 'Heyyy'
    ?>
    <h1>Php file</h1>
    <h1>Dice Roll: <?php echo rand(1, 6) ?> </h1>
</body>
</html>