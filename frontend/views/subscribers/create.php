<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Subscribers */

$this->title = 'Subscriber\'s Registration';
$this->params['breadcrumbs'][] = ['label' => 'Subscribers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscribers-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill in the form below</p>
    <legend></legend>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
