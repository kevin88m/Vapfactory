<?php require 'header.php';

        
//je chope les variable de mes inputs.
if (isset ($_POST['reference']))
{
    //j'initialise les variables
    $reference = $_POST['reference'];
    $article = $_POST['article'];
    $descr= $_POST['descr'];
    $pa= $_POST['prix_achat_unitaire'];
    $pv = $_POST['prix_vente_unitaire'];
    $qs = $_POST['quantite_stock'];
    $qe = $_POST['e_liquide_quantite'];
//je les insèrent dans mon mysql
    $sql = 'INSERT INTO  vapoteuse(reference,article,descr,prix_achat_unitaire,prix_vente_unitaire,quantite_stock,e_liquide_quantite) VALUES(:reference,:article,:descr,:prix_achat_unitaire,:prix_vente_unitaire,:quantite_stock,:e_liquide_quantite)';

    $statement = $connection->prepare($sql);

    if ($statement->execute(['reference'=> $reference, 'article'=> $article,'descr'=> $descr,'prix_achat_unitaire'=> $pa,'prix_vente_unitaire'=> $pv,'quantite_stock'=> $qs, 'e_liquide_quantite'=> $qe]))
    {
       $message = 'les enregistrements sont bons';
       header("location:index.php");
    }
   }




?>



<div class="container">

<div class="card mt-5">

<div class="card-header">

<h2>VAPFACTORY AJOUT</h2>

</div>

<div class="card-body">

<?php if(!empty($message)): ?>
    <div class="alert alert-success">
<?=$message; ?>
</div>
<?php endif;?>

<form action="" method="post">

<div class="form-group">

<label for="reference">référence</label>
<input type="text" name="reference" id="reference" class="form-control">

</div>
<div class="form-group">

<label for="article">article</label>
<input type="text" name="article" id="article" class="form-control">

</div>
<div class="form-group">

<label for="descr">description</label>
<input type="text" name="descr" id="descr" class="form-control">

</div>
<div class="form-group">

<label for="prix d'achat unitaire">prix d'achat unitaire</label>
<input type="number" name="prix_achat_unitaire" id="prix d'achat unitaire" class="form-control">

</div>
<div class="form-group">

<label for="prix vente unitaire">prix de vente unitaire</label>
<input type="number" name="prix_vente_unitaire" id="prix vente unitaire" class="form-control">

</div>
<div class="form-group">

<label for="quantite de stock"> quantité de stock </label>
<input type="number" name="quantite_stock" id="quantite_stock" class="form-control">

</div>
<label for="e_liquide_quantite"> quantité e-liquide de stock </label>
<input type="number" name="e_liquide_quantite" id="e_liquide_quantite" class="form-control">
<div class="form-group">

<button  type="submit" class="btn btn-info">AJOUTER</button>

</div>

</form>


</div>


</div>



</div>

<?php require 'footer.php'; ?>