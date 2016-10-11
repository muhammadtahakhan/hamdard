<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $city_id
 * @property integer $country_id
 * @property string $name
 * @property string $slug
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'name', 'slug'], 'required'],
            [['country_id'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => Yii::t('app', 'City ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
        ];
    }
}
