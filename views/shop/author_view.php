<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Author | '.$author->firstname.' '.$author->lastname;
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => 'shop/index'];
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => 'shop/authors'];
$this->params['breadcrumbs'][] = $author->firstname.' '.$author->lastname;
?>
<div class="shop-author">
	<div class="colorlib-shop">
		<div class="container">
			<div class="row row-pb-lg">
				<div class="col-md-10 col-md-offset-1">
					<div class="product-detail-wrap">
						<div class="row">
							<div class="col-md-5">
								<div class="product-entry">
									<div class="product-img" style="background-image: url(<?= $img ?>.jpg);">

									</div>
									<div class="thumb-nail">

									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="desc">
									<h3><?= $author->firstname.'&nbsp'.$author->lastname ?></h3>
									<p class="price">
										<span></span> 
										<span class="rate text-right">
											<i class="icon-star-full"></i>
											<i class="icon-star-full"></i>
											<i class="icon-star-full"></i>
											<i class="icon-star-full"></i>
											<i class="icon-star-half"></i>
											(74 Rating)
										</span>
									</p>
									<p><?= $author->biography ?></p>
									<p><a href="<?= Url::toRoute(['shop/author-books', 'id' => $author->id, 'img' => $img], 'https') ?>" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Buy Books</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		