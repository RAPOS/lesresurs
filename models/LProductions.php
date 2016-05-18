<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "l_productions".
 *
 * @property integer $id
 * @property string $header
 * @property string $description
 * @property integer $id_image
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
            [['header', 'description', 'id_image'], 'required'],
            [['description'], 'string'],
            [['id_image'], 'integer'],
            [['header'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => 'Header',
            'description' => 'Description',
            'id_image' => 'Id Image',
        ];
    }
}
