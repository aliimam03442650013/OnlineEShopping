<?php

namespace common\models;

use common\behaviors\CacheInvalidateBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "text_block".
 *
 * @property integer $id
 * @property string $key
 * @property string $title
 * @property string $body
 * @property integer $status
 */
class WidgetText extends ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_DRAFT = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%widget_text}}';
    }

    /**
     * @inheritdoc
     */


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'title', 'body'], 'required'],
            [['key'], 'unique'],
            [['body'], 'string'],
            [['status'], 'integer'],
            [['title', 'key'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'key' => Yii::t('app', 'Key'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
            'status' => Yii::t('app', 'Active'),
        ];
    }
}
