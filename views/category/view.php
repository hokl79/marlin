<?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div class="content-grid">
            <div class="content-grid-info">
                <?=  yii\helpers\Html::img('@web/images/post1.jpg', ['alt' => ''])?>
                <div class="post-info">
                    <h4><a href="<?= yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>"><?= $post->title ?></a>  July 30, 2014 / 27 Comments</h4>
                    <p><?= $post->excerpt ?></p>
                    <a href="<?= yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>"><span></span>READ MORE</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
<?php else: ?>
    <h3>В этой категории записей пока нет...</h3>
<?php endif; ?>