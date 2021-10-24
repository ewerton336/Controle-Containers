<?php
spl_autoload_register(function ($class_name) {
    include '..\\..\\'.$class_name . '.php';
});
?>

<?php include '..\header.php'; ?>

<h4>Pessoas</h4>
<a href="navio-create.php" class="btn btn-primary btn-small">Nova Navio</a>
<table class="table table-striped" style="margin-top: 5px">
    <tr><th>ID</th><th>Nome do Navio</th><th>Viagem do Navio</th><th></th><th></th></tr>
    <?php
    use Db\Persiste;
    use Models\Navio;
    $navios = Persiste::GetAll('Models\Navio');


    foreach($navios as $p){
        echo "<tr><td>$p->getid</td><td>$p->getnome</td><td>$p->getnumeroViagem</td>"
            ."<td><a href='pessoa.edit.php?id=$p->getid' class='btn btn-primary btn-small'>Editar</a></td>"
            ."<td><a href='pessoa.delete.php?id=$p->getid' class='btn btn-primary btn-small'>Excluir</a></td></tr>";
    }

    ?>
</table>

<?php include '..\footer.php'; ?>
