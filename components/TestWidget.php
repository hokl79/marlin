<?php

namespace app\components;
use yii\base\Widget;

class TestWidget extends Widget{
    
    public $color;
    
    public function init() {
        if($this->color === null){
            $this->color = 'green';
        }
    }
    
    public function run(){
        return $this->render('test', ['color' => $this->color]);
    }
    
}
