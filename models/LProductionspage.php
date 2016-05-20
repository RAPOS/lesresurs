<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "l_productionspage".
 *
 * @property integer $site
 * @property string $text_header
 * @property string $text_block
 * @property string $images
 * @property string $keywords
 * @property string $description
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
            [['text_header', 'text_block', 'images', 'keywords', 'description'], 'string'],
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
            'text_header' => 'Заголовок',
            'text_block' => 'Описание',
            'images' => 'Images',
            'keywords' => 'Ключевые слова, через запятую',
            'description' => 'Описание',
        ];
    }
}
