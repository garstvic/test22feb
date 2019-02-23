<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PublishingHousesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Publishing Houses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publishing-houses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Publishing Houses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'email:email',
            'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>