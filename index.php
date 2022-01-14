<?php require 'header.php';?>
<?php require 'footer.php';?>
<?php require 'connexion.php';?>
<?php require 'creat.php';?>
<?php
$sql ='SELECT * FROM vapoteuse';

$statements = $connection->prepare($sql);

$statement->execute();

$vapoteuse = $statement->fetchALL(PDO::FETCH_ASSOC);


?>