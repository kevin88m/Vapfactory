


<?php



if (isset ($_POST['reference']) && isset($_POST['article'])&& isset($_POST['descr'])&& isset($_POST['prix_achat_unitaire'])&& isset($_POST['prix_vente_unitaire'])&& isset($_POST['quantite_stock'])&& isset($_POST['e_liquide_quantité']))
{
    $reference = $_POST['reference'];
    $article = $_POST['article'];
   $descr= $_POST['descr'];
   $pa= $_POST['prix_achat_unitaire'];
    $pv = $_POST['prix_vente_unitaire'];
    $qs = $_POST['quantite_stock'];
    $qe = $_POST['e_liquide_quantité'];
    $qs = $_POST['quantite_stock'];
    $message = '';
    
    $sql = 'INSERT INTO  vapoteuse(reference,article,descr,prix_achat_unitaire,prix_vente_unitaire,e_liquide_quantité);
    VALUES(:reference,:article,:descr,:prix_achat_unitaire,:prix_vente_unitaire,:e_liquide_quantité)';

    $statements = $connection->prepare($sql);

   if ($statements->execute([':reference'=>$reference, ':article'=>$article,':descr'=>$descr,':prix_achat_unitaire'=>$pa,':prix_vente_unitaire'=>$pv,':quantite_stock'=>$qs, ':e_liquide_quantité'=>$qe]))
    {
       $message = 'les enregistrements sont bons';
    }


}

?>

<?php require 'header.php'; ?>

<div class="container">

<div class="card mt-5">

<div class="card-header">

<h2>VAPFACTORY</h2>

</div>

<div class="card-body">

<?php if(!empty($message)): ?>
    <div class="alert alert-succès">
<?=$message;?>
</div>
<?php endif;?>
<form method='post'>

<div class="form-group">

<label for="">référence</label>
<input type="text" name="reference" id="reference" class="form-control">

</div>
<div class="form-group">

<label for="article">article</label>
<input type="text" name="article" id="article" class="form-control">

</div>
<div class="form-group">

<label for="description">description</label>
<input type="text" name="description" id="description" class="form-control">

</div>
<div class="form-group">

<label for="prix d'achat unitaire">prix d'achat unitaire</label>
<input type="number" name="prix d'achat uniaire" id="prix d'achat unitaire" class="form-control">

</div>
<div class="form-group">

<label for="prix vente unitaire">prix de vente unitaire</label>
<input type="number" name="prix d'achat unitaire" id="prix d'achat unitaire" class="form-control">

</div>
<div class="form-group">

<label for="quantite de stock"> quantité de stock </label>
<input type="number" name="quantite de stock" id="quantité de stock" class="form-control">

</div>
<label for="quantite de e-liquide"> quantité e-liquide de stock </label>
<input type="number" name="quantite de e-liquide" id="quantité de e-liquide" class="form-control">
<div class="form-group">

<button  type="submit" class="btn btn-info">AJOUTER</button>

</div>

</form>


</div>


</div>



</div>

<?php require 'footer.php'; ?>
