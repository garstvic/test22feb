<?php

use yii\helpers\Url;
?>

<aside id="colorlib-hero" class="breadcrumbs">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url(images/cover-img-1.jpg);">
	   		<div class="overlay"></div>
	   		<div class="container-fluid">
	   			<div class="row">
		   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
		   				<div class="slider-text-inner text-center">
		   					<h1><?= $this->title ?></h1>
		   					<h2 class="bread"><span><a href="<?= Url::toRoute('site/index', 'https') ?>">Home</a></span>
			   					<?php 
			   						foreach($this->params['breadcrumbs'] as $breadcrumb)
			   						{
			   							if (is_array($breadcrumb))
			   							{
			   								echo '<span><a href="'.Url::toRoute($breadcrumb['url']).'">'.$breadcrumb['label'].'</a></span>';
			   							}
			   							else
			   							{
			   								echo "<span>{$breadcrumb}</span>";
			   							}
			   						}
			   					?>
		   					</h2>
		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>
	  	</ul>
  	</div>
</aside>
