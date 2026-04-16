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
            $pageTitle = 'PHP is amazing!';
        ?>
    </pre>

    <?php if (!empty($pageTitle)) : ?>
            <h1><?= $pageTitle ?></h1>
          <?php endif; ?>
</body>
</html>