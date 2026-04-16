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
            $pageTitle = '0';
            var_dump(isset($pageTitle));
            var_dump(empty($pageTitle));
            unset($pageTitle);
        ?>
    </pre>

    <?php 
           if(isset($pageTitle) && $pageTitle !== ''){
            echo "<h1>$pageTitle</h1>";
           }

           if (!empty($pageTitle)) {
            echo "<h1>$pageTitle</h1>";
           }
        ?>
</body>
</html>