<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include("upload.class.php");

$profile = array(
        "url" => "https://app.chili.pa/api/v1.0/upload",
        "types" => array("jpeg", "jpg", "png", "bmp", "webp"),
        "folder" => "./storage/profile",
        "size" => 5000000000,
        "total" => 5,
        "vars" => array(), // send additional data to frontend
);

Upload::addProfile('imagem', $profile);

Upload::set('imagem', 'imagem');
Upload::set('imagem2', 'imagem');
Upload::set('imagem3', 'imagem');
Upload::set('imagem4', 'imagem');

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload</title>
        <script type="text/javascript" src='upload.functions.js'></script>
        <link rel="stylesheet" href="upload.style.css" />
</head>

<body>
        <input type="file" name="imagem" />
        <input type="file" name="imagem2" />
        <input type="file" name="imagem3" />
        <input type="file" name="imagem4" />
        <input type="file" name="imagem5" />
        <?php Upload::init() ?>
</body>

</html>
