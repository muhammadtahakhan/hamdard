<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nationality".
 *
 * @property integer $nationality_id
 * @property string $name
 * @property string $slug
 * @property string $enable_flag
 * @property string $last_update_date
 * @property integer $last_updated_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $last_update_login
 */
class Nationality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nationality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'last_update_date', 'last_updated_by', 'creation_date', 'created_by', 'last_update_login'], 'required'],
            [['last_update_date', 'creation_date'], 'safe'],
            [['last_updated_by', 'created_by', 'last_update_login'], 'integer'],
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
            'nationality_id' => Yii::t('app', 'Nationality ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
        ];
    }
}
