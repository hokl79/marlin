<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Category
 *
 * @author Andrey
 */
class Category extends ActiveRecord{
    
    public static function tableName() {
        return 'category';
    }
    
    public function getPosts(){
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }
    
}
