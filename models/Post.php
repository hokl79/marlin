<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Post
 *
 * @author Andrey
 */
class Post extends ActiveRecord{
    
    public static function tableName() {
        return 'post';
    }
    
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    
}
