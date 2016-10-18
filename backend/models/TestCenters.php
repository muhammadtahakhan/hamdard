<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test_centers".
 *
 * @property integer $test_center_id
 * @property string $name
 * @property string $locaion
 * @property integer $enable_flag
 * @property string $last_update_date
 * @property integer $last_updated_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $last_update_login
 */
class TestCenters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_centers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'locaion'], 'required'],
            [['enable_flag', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['last_update_date', 'creation_date'], 'safe'],
            [['name'], 'string', 'max' => 30],
            [['locaion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'test_center_id' => Yii::t('app', 'Test Center ID'),
            'name' => Yii::t('app', 'Name'),
            'locaion' => Yii::t('app', 'Locaion'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
        ];
    }
}
