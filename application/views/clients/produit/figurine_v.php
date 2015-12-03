<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="row">
    <h1>Recapitulatifs des produits</h1>
    <tbody>
    <?php if( $produit != NULL): ?>
        <div class="large-block-grid-3 medium-block-grid-2 large">
            <h2>Figurines</h2>
            <hr>
            <?php foreach ($produit as $value): ?>


                <?php if ($value->libelle == 'Figurine'): ?>
                    <li><div class="row">
                            <div class="panel clearfix">
                                <a class="custom-thumbnail-class" href="<?=site_url("Produit_c/infoProduitClient")."/".$value->id;?>">
                                    <img src="<?=base_url();?>images/<?=$value->photo; ?>" alt="image de <?=$value->libelle; ?>"></a><br>
                                <h4><?=$value->nom; ?></h4>

                            </div>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>
    <tbody>
</div>