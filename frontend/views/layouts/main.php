<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
    <?php $this->beginPage() ?>
        <!DOCTYPE html>
        <html lang="<?= Yii::$app->language ?>">

        <head>
            <meta charset="<?= Yii::$app->charset ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?= Html::csrfMetaTags() ?>
                <title>
                    <?= Html::encode($this->title) ?>
                </title>
                <?php $this->head() ?>
        </head>

        <body>
            <?php $this->beginBody() ?>

                <div class="wrap">
                    <?php
    NavBar::begin([
        'brandLabel' => '<img src="../../images/aw.png" style="display:inline; vertical-align: top; height:32px;"> Final Project',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Register', 'url' => ['/subscribers/create']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];

    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Subscribers', 'url' => ['/subscribers/index']];
        $menuItems[] = ['label' => 'New Admin', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Administrators', 'url' => ['/user/index']];
        }
   
    if (Yii::$app->user->isGuest) {
        //$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

                        <div class="container">
                            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
                                <?= Alert::widget() ?>
                                    <?= $content ?>
                        </div>
                </div>

                <footer class="footer">
                    <div class="container">
                        <p class="pull-left">&copy;
                            <?= date('Y') ?> ==> Shawn Wright 2012027796 </p>

                    </div>
                </footer>

                <?php $this->endBody() ?>
        </body>

        </html>
        <?php $this->endPage() ?>
