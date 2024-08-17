<?php
require_once ('config.php');

$task = $_POST['task'];

$sql = ("INSERT INTO tasks (task_name) VALUES ('$task')");

mysqli_query($conn, $sql);
?>