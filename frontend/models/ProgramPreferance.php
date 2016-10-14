<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "program_preferance".
 *
 * @property integer $id
 * @property integer $application_id
 * @property string $first_preferance
 * @property string $secend_preferance
 * @property string $third_preferance
 * @property string $fourth_preferance
 * @property string $fifth_preferance
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
            [['application_id', 'first_preferance', 'secend_preferance', 'third_preferance', 'fourth_preferance', 'fifth_preferance', 'last_update_date', 'last_updated_by', 'creation_date', 'created_by', 'last_update_login'], 'required'],
            [['application_id', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['last_update_date', 'creation_date'], 'safe'],
            [['first_preferance', 'secend_preferance', 'third_preferance', 'fourth_preferance', 'fifth_preferance'], 'string', 'max' => 20],
            [['enable_flag'], 'string', 'max' => 2],
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
            'first_preferance' => Yii::t('app', 'First Preferance'),
            'secend_preferance' => Yii::t('app', 'Secend Preferance'),
            'third_preferance' => Yii::t('app', 'Third Preferance'),
            'fourth_preferance' => Yii::t('app', 'Fourth Preferance'),
            'fifth_preferance' => Yii::t('app', 'Fifth Preferance'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
        ];
    }
}
