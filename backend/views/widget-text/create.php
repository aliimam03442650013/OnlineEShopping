<?php
/* @var $this yii\web\View */
/* @var $model common\models\WidgetText */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Text Block',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Text Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-block-create">

    <?php echo $this->render('_form', [
        'model' => $model
    ]) ?>

</div>
