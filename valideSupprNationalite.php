<?php
include "connexionPdo.php";

if(isset($_GET['num'])) {
    $num = $_GET['num'];
    
    try {
        $req = $monPdo->prepare("DELETE FROM nationalite WHERE num = :num");
        $req->bindParam(':num', $num, PDO::PARAM_INT);
        $req->execute();
        
        header('Location: listNationalites.php?success=1');
    } catch (PDOException $e) {
        header('Location: listNationalites.php?error=1');
    }
} else {
    header('Location: listNationalites.php');
}
?>
