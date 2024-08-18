<?php
require 'navigation_assets/header.php';
require_once('php/config.php');

$sql = "SELECT * FROM tasks";

$dados = mysqli_query($conn, $sql);
?>

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
                <th></th>
            </tr>
            <!-- Faz a busca das tarefas -->
            <tr>
                <?php
                while ($linha = mysqli_fetch_assoc($dados)) {
                    $show_task = $linha['task_name'];
                    $rows= mysqli_num_rows($dados);
                ?>
                        <td><?= $show_task ?></td>
                        <td><button class="bg-yellow-500"><a href="/php/edit-task.php">Editar</a></button></td>
                        <td><button class="bg-red-600"><a href="#excluir">Excluir</a></button></td>
            </tr>
    <?php
                }

    ?>
        </table>
    </div>
<?php 
require 'navigation_assets/footer.php';
?>