<?php
require_once('php/config.php');

$task = $_REQUEST['task'];

$query = $conn->prepare("SELECT task_name FROM tasks");
$query->execute();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class='bg-slate-600'>
    <h1>Olá Bem-Vindo</h1>
    <!-- Formulário que recebe input $task -->
    <form action="php/action-task.php" method="post">
        <label for="">Nome:</label>
        <input type="text" name="task" class="">
        <!-- Submit -->
        <input type="submit" name="Submit" class="bg-green-500">
    </form>
    <div class="bg-slate-200">
        <table>
            <tr>
                <?php foreach ($query as $tasks): ?>
                    <th><?= $tasks ?></th>
                <?php endforeach; ?>
            </tr>
            <tr>
                <td>tarefa</td>
            </tr>
            <tr>
                <td><button class="bg-yellow-500"><a href="#editar">Editar</a></button></td>
                <td><button class="bg-red-600"><a href="#excluir">Excluir</a></button></td>
            </tr>
        </table>
    </div>
</body>

</html>