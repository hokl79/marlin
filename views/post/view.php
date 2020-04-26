<div class="single-grid">
    <?= yii\helpers\Html::img('@web/images/post1.jpg', ['alt' => '']) ?>
    <?= $post->text ?>
</div>
<ul class="comment-list">
    <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
    <li><img src="images/avatar.png" class="img-responsive" alt="">
        <div class="desc">
            <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
        </div>
        <div class="clearfix"></div>
    </li>
</ul>
<div class="content-form">
    <h3>Leave a comment</h3>
    <form>
        <input type="text" placeholder="Name" required/>
        <input type="text" placeholder="Email" required/>
        <input type="text" placeholder="Phone" required/>
        <textarea placeholder="Message"></textarea>
        <input type="submit" value="SEND"/>
    </form>
</div>
</div>