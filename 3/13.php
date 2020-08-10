<?php

require_once "libs/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new compiler();

$result = $scss->compile('@import"sass/3.scss"');

file_put_contents('css/3.css', $result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/3.css">
    <link rel="stylesheet" href="css/font-awesome-5.13.0/css/fontawesome.css">


</head>

<body>
    <?php include '3-content.php'; ?>
</body>

</html>