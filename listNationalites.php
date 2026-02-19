<?php include "header.php";
include "connexionPdo.php";

$message = '';
$messageType = '';

// Afficher un message de succès/erreur s'il existe
if(isset($_GET['message'])) {
    $message = $_GET['message'];
    $messageType = $_GET['type'] ?? 'info';
}

$req=$monPdo->prepare("select n.num, n.libelle, c.libelle as continentLibelle from nationalite n, continent c where n.numContinent=c.num");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();
?>


<div class="container mt-5">

    <?php if($message) : ?>
        <div class="alert alert-<?php echo $messageType; ?>" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div class="row pt-3">
        <div class="col-9"><h2>Liste des nationalités</h2></div>
        <div class="col-3"><a href="formNationalite.php" class='btn btn-sucess'><i class="fas fa-plus-circle"></i> Créer une nationalité</a></div>

    </div>

    <table class="table table-hover table-striped">
    <thead>
        <tr class="d-flex">
        <th scope="col" class="col-md-2">Numéro</th>
        <th scope="col" class="col-md-5">Libellé</th>
        <th scope="col" class="col-md-3">Continent</th>
        <th scope="col" class="col-md-2">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($lesNationalites as $nationalite){

        echo "<tr class='d-flex'>";
        echo "<td class='col-md-2'>$nationalite->num</td>";
        echo "<td class='col-md-5'>$nationalite->libelle</td>";
        echo "<td class='col-md-3'>$nationalite->continentLibelle</td>";
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
<?php include "footer.php";

?>
