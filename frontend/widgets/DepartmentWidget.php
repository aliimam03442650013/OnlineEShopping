<?php

namespace frontend\widgets;

use common\models\News;
use yii\base\Widget;


class DepartmentWidget extends Widget {



    public function run()
    {
        $news= News::find()->where(['active_status'=>'1'])->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('department',[
            'news'=>$news,
        ]);
    }

}