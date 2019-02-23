<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PublishingHouses */

$this->title = 'Create Publishing Houses';
$this->params['breadcrumbs'][] = ['label' => 'Publishing Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publishing-houses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
