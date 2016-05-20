<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "l_productionspage".
 *
 * @property integer $site
 * @property string $text_block
 * @property string $images
 */
class LProductionspage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'l_productionspage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site'], 'integer'],
            [['text_block', 'images'], 'string'],
            [['site'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'site' => 'Site',
            'text_block' => 'Text Block',
            'images' => 'Images',
        ];
    }
}
