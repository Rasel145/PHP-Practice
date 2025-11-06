<?php
$file =file_get_contents('dev.json');
// echo $file;

$decode = json_decode($file);
foreach($decode as $item){
    echo $item->name."<br>";
}
?>