<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!--header-->		
        <div class="header">  
            <div class="container">
                <div class="logo">
                    <a href="<?= \yii\helpers\Url::home() ?>"><?= Html::img('@web/images/logo.jpg', ['alt' => 'Blogname']) ?></a>
                </div>
                <!--start-top-nav-->
                <div class="top-menu">
                    <div class="search">
                        <form>
                            <input type="text" placeholder="" required="">
                            <input type="submit" value=""/>
                        </form>
                    </div>
                    <span class="menu"> </span> 
                    <ul>
                        <li class="active"><a href="<?=  \yii\helpers\Url::to(['/admin'])?>">Статьи</a></li>						
                        <li><a href="<?=  \yii\helpers\Url::to(['category/index'])?>">Категории</a></li>	
                        						
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"></div>

                <!--//End-top-nav-->					
            </div>
        </div>
        <!--/header-->
        <div class="content">
            <div class="container">
                <div class="content-grids">
                    <div class="col-md-12">
                        <?=$content?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!---->
        <div class="footer">
            <div class="container">
                <p>Copyrights © 2015 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>