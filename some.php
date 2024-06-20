<?php
$date=[
    "title" => $_POST['title'],
    "content" => $_POST['content']
];
$connect = new PDO('mysql:host=localhost; dbname=ajax', 'root','');
$sql = 'INSERT INTO `posts` ( title, content) VALUES ( :title, :content) ';
$statment = $connect->prepare($sql);
$result = $statment->execute($date);
var_dump($result);