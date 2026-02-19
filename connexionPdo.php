<?php
$hostnom = 'btssio.dedyn.io';
$usernom = 'OPPONNA';
$password = '05032007';
$bdd = 'OPPONNA_nationalite_tp3';

try {
    $monPdo = new PDO("mysql:host=$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>