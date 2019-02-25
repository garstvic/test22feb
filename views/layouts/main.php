<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--Page Preloder -->
<div class="colorlib-loader"></div>

<div id="page">

<!-- Header section -->
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="<?= Url::toRoute('site/index', 'https') ?>">Store</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="<?= Url::toRoute('site/index', 'https') ?>">Home</a></li>
								<li class="has-dropdown">
									<a href="shop.html">Shop</a>
									<ul class="dropdown">
										<li><a href="product-detail.html">Product Detail</a></li>
										<li><a href="cart.html">Shipping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="<?= Url::toRoute('site/index', 'https') ?>">Blog</a></li>
								<li><a href="<?= Url::toRoute('site/about', 'https') ?>">About</a></li>
								<li><a href="<?= Url::toRoute('site/contact', 'https') ?>">Contact</a></li>
								<li><a href="<?= Url::toRoute('site/index', 'https') ?>"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
<!-- Header section end --> 


    <?php
    /*
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    */
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

</div>

<!-- Footer section -->
<footer id="colorlib-footer" role="contentinfo">
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-3 colorlib-widget">
				<h4>About Store</h4>
				<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				<p>
					<ul class="colorlib-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
				</p>
			</div>
			<div class="col-md-2 colorlib-widget">
				<h4>Customer Care</h4>
				<p>
					<ul class="colorlib-footer-links">
						<li><a href="#">Contact</a></li>
						<li><a href="#">Returns/Exchange</a></li>
						<li><a href="#">Gift Voucher</a></li>
						<li><a href="#">Wishlist</a></li>
						<li><a href="#">Special</a></li>
						<li><a href="#">Customer Services</a></li>
						<li><a href="#">Site maps</a></li>
					</ul>
				</p>
			</div>
			<div class="col-md-2 colorlib-widget">
				<h4>Information</h4>
				<p>
					<ul class="colorlib-footer-links">
						<li><a href="#">About us</a></li>
						<li><a href="#">Delivery Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Order Tracking</a></li>
					</ul>
				</p>
			</div>

			<div class="col-md-2">
				<h4>News</h4>
				<ul class="colorlib-footer-links">
					<li><a href="blog.html">Blog</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Exhibitions</a></li>
				</ul>
			</div>

			<div class="col-md-3">
				<h4>Contact Information</h4>
				<ul class="colorlib-footer-links">
					<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
					<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
					<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
					<li><a href="#">yoursite.com</a></li>
				</ul>
			</div>
		</div>

		<div class="copy">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						
						<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
						<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer section end -->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
