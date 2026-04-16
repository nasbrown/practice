<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simp.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            var_dump(!true);
            var_dump(!false);

            $num = 5;
            var_dump($num !== 5);
            var_dump(!$num === 5);

            echo '-------\n';

            var_dump(true xor true); //xor expects one boolean

        ?>
    </pre>
</body>
</html>