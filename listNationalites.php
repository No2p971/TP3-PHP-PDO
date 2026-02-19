<?php include "header.php";
include "connexionPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();
?>


<div class="container mt-5">

    <div class="row pt-3">
        <div class="col-9"><h2>Liste des nationalités</h2></div>
        <div class="col-3"><a href="formNationalite.php" class='btn btn-sucess'><i class="fas fa-plus-circle"></i> Créer une nationalité</a></div>

    </div>

    <table class="table table-hover table-striped">
    <thead>
        <tr class="d-flex">
        <th scope="col" class="col-md-2">Numéro</th>
        <th scope="col" class="col-md-8">Libellé</th>
        <th scope="col" class="col-md-2">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($lesNationalites as $nationalite){

        echo "<tr class='d-flex'>";
        echo "<td class='col-md-2'>$nationalite->num</td>";
        echo "<td class='col-md-8'>$nationalite->libelle</td>";
        echo "<td class='col-md-2'>
            <a href='formNationalite.php?action=modif&num=$nationalite->num' class='btn btn-primary'><i class='fas fa-pen'></i></a>
            <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer cette nationalité ?' data-supression='valideSupprNationalite.php?num=$nationalite->num' class='btn btn-danger' onclick=\"document.getElementById('supprNum').value = '$nationalite->num';\"><i class='far fa-trash-alt'></i></a>
        </td>";        
        echo "</tr>";

    }
// valideSupprNationalite.php?num=$nationalite->num
    ?>
 
    </tbody>
    </table>

</div>
<div id="modalSuppression" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">confirmation de suppresion</h5>
            </div>
            <div class="modal-body">
                <p>Voulez vous supprimer cette nationalité ?</p>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-primary" id="btnSuppr">Supprimer</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ne pas supprimer</button>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";

?>
