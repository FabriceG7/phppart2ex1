<?php
    $age = 60;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>php partie2 ex1</title>
</head>
<body>
    <p>Vous êtes <?php
    if ($age >= 18){
        echo 'majeur';
    }
    elseif ($age < 18){
        echo 'mineur';
    }?></p>
</body>
</html>
