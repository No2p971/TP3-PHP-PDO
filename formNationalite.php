<?php 
include "header.php";
include "connexionPdo.php";

$laNationalite = null;
$isModification = false;

// Vérifier si c'est une modification
if(isset($_GET['action']) && $_GET['action'] === 'modif' && isset($_GET['num'])) {
    $isModification = true;
    $num = $_GET['num'];
    $req = $monPdo->prepare("SELECT * FROM nationalite WHERE num = :num");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->bindParam(':num', $num);
    $req->execute();
    $laNationalite = $req->fetch();
}
?>

<div class="container mt-5">
<h2 class='pt-3 text-center'><?php echo $isModification ? 'Modifier une nationalité' : 'Ajouter une nationalité'; ?></h2>
    
    <?php if($isModification && !$laNationalite) : ?>
        <div class="alert alert-danger" role="alert">Nationalité introuvable</div>
        <a href="listNationalites.php" class="btn btn-primary">Revenir à la liste</a>
    <?php else : ?>
        <form action="valideFormNationalite.php" method="post" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
            <div class="form-group">
                <label for='libelle'>Libellé</label>
                <input type="text" class='form-control' id='libelle' placeholder='Saisir le libellé' name='libelle' value="<?php echo $isModification ? $laNationalite->libelle : ''; ?>" required>
            </div>
            
            <?php if($isModification) : ?>
                <input type="hidden" id="num" name="num" value="<?php echo $laNationalite->num; ?>">
                <input type="hidden" name="action" value="modif">
            <?php endif; ?>
            
            <div class="row">
                <div class="col"><a href="listNationalites.php" class='btn btn-warning btn-block'>Revenir à la liste</a></div>
                <div class="col"><button type='submit' class='btn btn-success btn-block'><?php echo $isModification ? 'Modifier' : 'Ajouter'; ?></button></div>
            </div>
        </form>
    <?php endif; ?>
</div>

<?php include "footer.php"; ?>
