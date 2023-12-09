<?php 
include_once 'config/Database.php';
include_once 'class/Articles.php';
$database = new Database();
$db = $database->getConnection();

$article = new Articles($db);
$id = 0;
if(isset($_GET['id'])){
	$id=$_GET['id'];
	echo $id;
}

$article->getId(7);

$result = $article->getArticles();
$post = $result->fetch_assoc();
print_r($post);


?>
