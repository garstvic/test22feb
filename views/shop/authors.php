<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Authors';
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => 'shop/index'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-authors">
    <div class="row">
        <div class="col-md-12">
            <div class="row row-pb-lg">
                <?php $i = 0 ?>
                <?php foreach ($authors as $author):?>
                    <?php if ($i == 16) $i = 0 ?>
                    <div class="col-md-4 text-center">
                        <div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-<?= ++$i ?>.jpg);">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="<?= Url::toRoute('site/index', 'https') ?>"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="<?= Url::toRoute(['shop/author', 'id' => $author->id, 'img' =>'images/item-'.$i], 'https') ?>"><?= $author->firstname.'&nbsp'.$author->lastname ?></a></h3>
							</div>
                        </div>
                    </div>        
                <?php endforeach?>
            </div>
        </div>
    </div>
</div>