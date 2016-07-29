<?php

$name 		= $_FILES['image']['name'];
$type 		= $_FILES['image']['type'];
$tmp_name 	= $_FILES['image']['tmp_name'];
$error 		= $_FILES['image']['error'];
$folder		= '..' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR;

if($error == 0) {
    $ext 	 	 = explode('.', $name);
    $ext		 = '.' . end($ext);
    $newName 	 = md5(date('dmYhis'));
    $newFilePath = $folder . $newName . $ext;

    move_uploaded_file($tmp_name, $newFilePath);
    echo(str_replace("..\\", "", $newFilePath));
}