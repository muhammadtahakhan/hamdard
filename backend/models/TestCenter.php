<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test_center".
 *
 * @property integer $id
 * @property string $name
 * @property string $location
 */
class TestCenter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_center';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'location'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['location'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'location' => Yii::t('app', 'Location'),
        ];
    }
}
