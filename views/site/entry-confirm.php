<?php
/**
 * @var app\models\EntryForm $model
 */
use yii\helpers\Html;

?>

<p>
    Enter user data
</p>

<ul>
    <li>
        <label>Name</label>: <?= Html::encode($model->name); ?>
    </li>
    <li>
        <label>Email</label>: <?= Html::encode($model->email); ?>
    </li>
</ul>