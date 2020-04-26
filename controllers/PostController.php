<?php

namespace app\controllers;
use app\models\Post;

/**
 * Description of PostController
 *
 * @author Andrey
 */
class PostController extends AppController{
    
    public function actionIndex() {     
        $query = Post::find()->select('id, title, excerpt, category_id')->with('category')->orderBy('id DESC');
        $pages = new \yii\data\Pagination(['totalCount' => $query->count(), 'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        
        $this->setMeta('Blogname', 'ключевики', 'Описание сайта');
        return $this->render('index', compact('posts', 'pages'));
    }
    
    public function actionView() {
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if(empty($post)) throw new \yii\web\HttpException(404, 'Такой страницы нет...');
        $this->setMeta($post->title, $post->keywords, $post->description);
        return $this->render('view', compact('post'));
    }
    
}
