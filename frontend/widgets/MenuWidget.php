<?php

namespace frontend\widgets;

use yii\base\Widget;


class MenuWidget extends Widget {



    public function run()
    {
        return $this->render('menu');
    }

}