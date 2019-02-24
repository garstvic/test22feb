<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Rubrics;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\RubricsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rubrics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubrics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?php
        if ($rubrics)
        {
            $depth = 0;
            
            foreach($rubrics as $n => $rubric)
            {
            	if ($rubric->depth == $depth)
            	{
            		echo Html::endTag('li')."\n";
            	}
            	else if ($rubric->depth > $depth)
            	{
            		echo Html::beginTag('ul')."\n";
            	}
            	else
            	{
            		echo Html::endTag('li')."\n";
            
            		for($i = $depth - $rubric->depth; $i; $i = $i - 1)
            		{
            			echo Html::endTag('ul')."\n";
            			echo Html::endTag('li')."\n";
            		}
            	}
            
            	echo Html::beginTag('li');
            	echo Html::encode($rubric->name);
            	$depth = $rubric->depth;
            }
            
            for($i = $depth; $i; $i = $i - 1)
            {
            	echo Html::endTag('li')."\n";
            	echo Html::endTag('ul')."\n";
            }
        }
    ?>
    <hr />
    <p>
        <?= Html::a('Create Rubrics', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'lft',
            'rgt',
            'depth',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
