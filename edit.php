<?php
require 'header.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM vapoteuse WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$vap = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['reference'])){
    
    $reference = $_POST['reference'];
    $article = $_POST['article'];
    $descr= $_POST['descr'];
    $pa= $_POST['prix_achat_unitaire'];
    $pv = $_POST['prix_vente_unitaire'];
    $qs = $_POST['quantite_stock'];
    $qe = $_POST['e_liquide_quantite'];
  
  
  $sql = 'UPDATE vapoteuse SET reference=:reference, article=:article, descr=:descr, prix_achat_unitaire=:pa, prix_vente_unitaire=:pv, quantite_stock=:qs, e_liquide_quantite=:qe WHERE id=:id';
  
  $statement = $connection->prepare($sql);
  if ($statement->execute(['reference' => $reference,
   'article' => $article,
    'descr'=>$descr,
     'pa'=>$pa,
     'pv'=>$pv ,
     'qs'=>$qs ,
     'qe'=>$qe,
     'id' => $id])) {
    header("location:index.php");
  }


}



 ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>mise à jour Vapoteuse</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form action="" method="post">
        
      <div class="form-group">
          <label for="reference">reference</label>
          <input value="<?= $vap->reference; ?>" type="text" name="reference" id="reference" class="form-control">
        </div>

        <div class="form-group">
          <label for="article">article</label>
          <input value="<?= $vap->article; ?>" type="text" name="article" id="article" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="descr">description</label>
          <input value="<?= $vap->descr; ?>" type="text" name="descr" id="descr" class="form-control">
        </div>

        <div class="form-group">
          <label for="prix_achat_unitaire">prix d'achat unitaire</label>
          <input value="<?= $vap->prix_achat_unitaire; ?>" type="number" name="prix_achat_unitaire" id="prix_achat_unitaire" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="prix_vente_unitaire">prix de vente unitaire</label>
          <input value="<?= $vap->prix_vente_unitaire; ?>" type="number" name="prix_vente_unitaire" id="prix_vente_unitaire" class="form-control">
        </div>
        
        <div class="form-group">
          <label for="quantite_stock">quantité de stock</label>
          <input value="<?= $vap->quantite_stock;?>" type="number" name="quantite_stock" id="quantite_stock" class="form-control">
        </div>

        <div class="form-group">
          <label for="e_liquide_quantite">stock de e liquide</label>
          <input value="<?= $vap->e_liquide_quantite; ?>" type="number" name="e_liquide_quantite" id="e_liquide_quantite" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Vap/produits</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>