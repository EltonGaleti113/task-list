<?php 
require '../navigation_assets/header.php';
require ('config.php');



?>

<div class="flex justify-center">
    <form action="edit-task.php" method="post" class="pt-32">
        <input type="text" name="edit-input" placeholder="Editar Tarefa" required>
        <input type="submit" name="submit" class="bg-white">
        
    </form>
</div>

<?php 
require '../navigation_assets/footer.php';
?>