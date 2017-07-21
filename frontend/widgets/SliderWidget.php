<?php

namespace frontend\widgets;

use common\models\Slider;
use yii\base\Widget;

class SliderWidget extends Widget {



    public function run()
    {
        return $this->render('slider');
    }

}