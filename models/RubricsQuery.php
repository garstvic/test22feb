<?php

namespace app\models;

use creocoder\nestedsets\NestedSetsQueryBehavior;

class RubricsQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}
