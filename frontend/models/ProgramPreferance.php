<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "program_preferance".
 *
 * @property integer $id
 * @property integer $application_id
 * @property integer $program_id
 * @property string $enable_flag
 * @property string $last_update_date
 * @property integer $last_updated_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $last_update_login
 */
class ProgramPreferance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program_preferance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['application_id', 'program_id'], 'required'],
//            [['application_id', 'program_id'], 'integer'],
            [['application_id', 'program_id', 'last_update_date', 'creation_date', 'last_update_date', 'last_updated_by', 'creation_date', 'created_by', 'last_update_login'], 'safe'],
//            [['enable_flag'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'application_id' => Yii::t('app', 'Application ID'),
            'program_id' => Yii::t('app', 'Program ID'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
        ];
    }
}
