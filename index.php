<?php
// require('php/action-task.php');
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
        <input type="submit" name="Submit">
    </form>
    <div class="bg-slate-200">
        <table>
            <tr>
                <th>Tarefas</th>
            </tr>
            <tr>
                <td>Tarefa 1</td>
            </tr>
            <tr>
                <td><button class="bg-yellow-500"><a href="#editar">Editar</a></button></td>
                <td><button class="bg-red-600"><a href="#excluir">Excluir</a></button></td>
            </tr>
        </table>
    </div>
</body>

</html>