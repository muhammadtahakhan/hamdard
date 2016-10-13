<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "program_offer".
 *
 * @property integer $offer_id
 * @property integer $program_id
 * @property integer $session_id
 * @property string $from_date
 * @property string $to_date
 * @property string $enable_flag
 * @property string $last_update_date
 * @property integer $last_updated_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $last_update_login
 */
class ProgramOffer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program_offer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['program_id', 'session_id', 'from_date', 'to_date', 'last_update_date', 'last_updated_by', 'creation_date', 'created_by', 'last_update_login'], 'required'],
            [['program_id', 'session_id', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['from_date', 'to_date', 'last_update_date', 'creation_date'], 'safe'],
            [['enable_flag'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'offer_id' => Yii::t('app', 'Offer ID'),
            'program_id' => Yii::t('app', 'Program ID'),
            'session_id' => Yii::t('app', 'Session ID'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
        ];
    }
}
