<?php
require '../vendor/autoload.php';

$title = $_POST["title"];
$article = $_POST["article"];

echo $title." ".$article;

$article = new \phonPhon\Article($title,"Admin",$article); // the author will be the authenticated user
$article->insertArticle();

?>