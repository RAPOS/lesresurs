<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "l_productions".
 *
 * @property integer $id
 * @property string $header
 * @property string $text
 * @property integer $id_image
 * @property integer $date
 * @property integer $keywords
 * @property integer $description
 */
class LProductions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'l_productions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header', 'text', 'text', 'date'], 'required'],
            [['id_image'], 'integer'],
            [['text', 'keywords', 'description'], 'string'],
            [['header', 'date'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_image' => 'Id Image',
            'header' => 'Заголовок',
            'text' => 'Описание',
            'date' => 'Дата добавления',
            'keywords' => 'Ключевые слова, через запятую',
            'description' => 'Описание',
        ];
    }
}
