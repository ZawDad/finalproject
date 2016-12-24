<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
    <div class="site-index">

        <div class="jumbotron">
            <h1>Welcome!!!</h1>
            <p><img src="../../images/aw.png" style="height:70px;"> APPLIED WEB
                <h3><strong>Development Seminar</strong></h3></p>


            </br>

            <p>
                <?= Html::a('Register Here...', ['/subscribers/create'], ['class'=>'btn btn-primary grid-button']) ?>
            </p>

        </div>
