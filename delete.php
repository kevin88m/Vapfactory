<?php
require 'connexion.php';
$id = $_GET['id'];
$sql = 'DELETE FROM vapoteuse WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location:index.php");
}