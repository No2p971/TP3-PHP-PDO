<?php 
include "header.php";
include "connexionPdo.php";

$libelle = $_POST['libelle'] ?? '';
$action = $_POST['action'] ?? 'ajout';
$num = $_POST['num'] ?? '';

$message = '';
$messageType = 'danger';

try {
    if($action === 'modif' && !empty($num)) {
        // Modification
        $req = $monPdo->prepare("UPDATE nationalite SET libelle = :libelle WHERE num = :num");
        $req->bindParam(':num', $num);
        $req->bindParam(':libelle', $libelle);
        $nb = $req->execute();
        
        if($nb == 1) {
            $message = 'La nationalité a bien été modifiée';
            $messageType = 'success';
        } else {
            $message = 'La nationalité n\'a pas été modifiée !';
            $messageType = 'danger';
        }
    } else {
        // Ajout
        $req = $monPdo->prepare("INSERT INTO nationalite(libelle) VALUES(:libelle)");
        $req->bindParam(':libelle', $libelle);
        $nb = $req->execute();
        
        if($nb == 1) {
            $message = 'La nationalité a bien été ajoutée';
            $messageType = 'success';
        } else {
            $message = 'La nationalité n\'a pas été ajoutée !';
            $messageType = 'danger';
        }
    }
} catch (PDOException $e) {
    $message = 'Erreur : ' . $e->getMessage();
    $messageType = 'danger';
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col mt-5">
            <div class="alert alert-<?php echo $messageType; ?>" role="alert">
                <?php echo $message; ?>
            </div>
        </div>
    </div>
    <a href="listNationalites.php" class="btn btn-primary">Revenir à la liste des nationalités</a>
</div>

<?php include "footer.php"; ?>
