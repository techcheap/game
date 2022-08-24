<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label>Addresse: </label>
        <input type="text" name="address">
        <input type="submit" value="Confirmer">
    </form>
</body>
</html>

<?php

$data = file_get_content("php://input");
$content = utf8_encode($data);
$decontent = json_decode($content, true);

if(isset($decontent)){
    $fp = fopen('file.txt', 'w');
    fwrite($fp, $decontent);
    fclose($fp);
    echo 'Success';
}

?>