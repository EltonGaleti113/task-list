<?php
session_start();

$task = [];
$task = $_POST['task'];

echo "hello ". htmlspecialchars($_POST['task']). '!'; 

