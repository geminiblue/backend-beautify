<?php
namespace yii\bootstrap\qitianUI;
use yii\base\Widget;
use yii\helpers\Html;

/**
* 搜索按钮
*
*/
class SearchButtonWidget extends Widget
{
  public $options;
  public $text='搜索';
  public function run()
  {
    return Html::submitButton(
     IconConst::ICON_SEARCH.$this->text,
     [
       'class' => 'btn btn-primary form-control',
       'style'=>'width:80px'
     ]
   );
  }
}
