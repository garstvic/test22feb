<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PublishingHouses */

$this->title = 'Update Publishing Houses: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Publishing Houses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publishing-houses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
