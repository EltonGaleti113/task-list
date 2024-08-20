<?php
require 'navigation_assets/header.php';
require_once('php/config.php');

$sql = "SELECT * FROM tasks";

$dados = mysqli_query($conn, $sql);
?>
    
<!-- Formulário que recebe input $task -->
<div class="flex justify-center">
    <form action="php/action-task.php" method="post"
    class="">
        <label class="text-xl text-slate-200" for="">New Task:</label>
        <input type="text" name="task" class="py-1 px-3 rounded-lg">
        <!-- Submit -->
        <input type="submit" name="Submit" class="py-1 px-3 rounded-lg bg-green-500">
    </form>
</div>
<!-- Div das tasks -->
<div class="flex flex-nowrap justify-center pt-20">
    <table class="table-fixed bg-slate-200 h-max rounded-xl">
        <!-- Faz a busca das tarefas -->
        <?php
        while ($linha = mysqli_fetch_assoc($dados)) {
            $show_task = $linha['task_name'];
            $rows = mysqli_num_rows($dados);
        ?>
            <tr class="p-10 border-b rounded-lg border-zinc-400 px-5">
                <td class="px-4 w-96 py-6 text-center">
                    <p class="w-full list-image-[url(checkmark.png)] "><?= $show_task ?></p>
                </td>

                <td class="px-3 text-center ">
                    <button class="rounded-lg w-max h-max p-3 px-5 bg-yellow-500"><a href="/php/edit-task.php">Editar</a></button>
                </td>

                <td class="px-3 text-center ">
                    <button class="rounded-lg w-max h-max p-3 px-5 bg-red-600"><a href="#excluir">Excluir</a></button>
                </td>
            </tr>
        <?php
        }

        ?>
    </table>
</div>
<?php
require 'navigation_assets/footer.php';
?>