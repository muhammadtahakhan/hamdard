<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $country_id
 * @property string $name
 * @property string $slug
 * @property string $enable_flag
 * @property string $last_update
 * @property integer $last_update_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $last_update_login
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug'], 'required'],
            [['last_update', 'last_update_by', 'creation_date', 'created_by', 'last_update_login'], 'safe'],
            [['last_update_by', 'created_by', 'last_update_login'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 20],
            [['enable_flag'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => Yii::t('app', 'Country ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update' => Yii::t('app', 'Last Update'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
        ];
    }
}
