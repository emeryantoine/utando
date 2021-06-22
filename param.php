<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ff" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>
</head>
<body>
    <pre>
        <?php var_dump($_SESSION['users']); ?>
    </pre>
</body>
</html>