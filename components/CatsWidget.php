<?php

namespace app\components;
use yii\base\Widget;

/**
 * Description of CatsWidget
 *
 * @author Andrey
 */
class CatsWidget extends Widget{
    
    public function run(){
        $html = \Yii::$app->cache->get('catsMenu');
        if(!$html){
            $cats = \app\models\Category::find()->select('id, name')->asArray()->orderBy('name')->all();
            $html = $this->render('cats', compact('cats'));
            \Yii::$app->cache->set('catsMenu', $html, 60);
        }
        return $html;
    }
    
}
