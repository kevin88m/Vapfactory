<?php require 'header.php';


$sql = 'SELECT * FROM  vapoteuse';
//je compare les variables entres elles et je prépare une requête qui récupère les données.
$statement = $connection->prepare($sql);
$statement->execute();
$vapoteuse = $statement->fetchAll(PDO::FETCH_OBJ);




 ?>


<div class="container">
  <div class="card mt-5">

    <div class="card-header">
      <h2>Tout les données</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>reference</th>
          <th>article</th>
          <th>description</th>
          <th>Prix d'achat unitaire</th>
          <th>Prix de vente unitaire</th>
          <th>quantité de stock</th>
          <th>quantité e-liquide de stock</th>
          <th>Action</th>
        </tr>
        <?php foreach($vapoteuse as $vap): ?>
          <tr>
            <td><?= $vap->id; ?></td>
            <td><?= $vap->reference; ?></td>
            <td><?= $vap->article; ?></td>
            <td><?= $vap->descr; ?></td>
            <td><?= $vap->prix_achat_unitaire; ?></td>
            <td><?= $vap->prix_vente_unitaire; ?></td>
            <td><?= $vap-> quantite_stock; ?></td>
            <td><?= $vap->e_liquide_quantite; ?></td>

             <td>
              <a href="edit.php?id=<?= $vap->id ?>" class="btn btn-info">Edit</a>
              
              <a onclick="return confirm('êtes vous sûr de voulour supprimer cette donnée?')" href="delete.php?id=<?= $vap->id ?>" class='btn btn-danger'>supprimer</a>
            </td>
          </tr>

          
        <?php endforeach; ?>
      </table>
      <a href="creat.php" class="btn btn-info">AJOUTER</a>

    </div>
  </div>
</div>
<?php require 'footer.php'; ?>


