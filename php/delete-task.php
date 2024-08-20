<?php 
require ('config.php');

$sql = $conn-> prepare("DELETE from livro WHERE id=". $id);
?>