<?php
require_once ('config.php');

$task = $_POST['task'];

$conn -> query("INSERT INTO tasks (task_name) VALUES ('$task')");

// mysqli_close($conn);