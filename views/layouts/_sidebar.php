<div class="categories">
    <h3>CATEGORIES</h3>
    <?=  app\components\CatsWidget::widget()?>
</div>
<div class="clearfix"></div>
<hr>
<a href="<?=  yii\helpers\Url::to(['/admin'])?>">Админка</a>
<br>
<?php if(!Yii::$app->user->isGuest): ?>
    <a href="<?=  yii\helpers\Url::to(['/site/logout'])?>"><?=Yii::$app->user->identity['username']?> (Выход)</a>
<?php else: ?>
    <a href="<?=  yii\helpers\Url::to(['/site/login'])?>">Вход</a>
    <br>
    <a href="<?=  yii\helpers\Url::to(['/site/signup'])?>">Регистрация</a>
<?php endif; ?>
<?php //debug(Yii::$app->user->identity) ?>