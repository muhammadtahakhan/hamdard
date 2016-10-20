<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "academic_records".
 *
 * @property integer $academic_id
 * @property integer $application_id
 * @property string $subject
 * @property string $passing_year
 * @property integer $total_marks
 * @property integer $marks_obtained
 * @property integer $percentage
 * @property string $uni_board
 * @property integer $attemps
 * @property string $enable_flag
 * @property string $last_update_date
 * @property integer $last_updated_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $last_update_login
 */
class AcademicRecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'academic_records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['application_id', 'subject', 'passing_year', 'total_marks', 'marks_obtained', 'percentage', 'uni_board', 'attemps'], 'required'],
            [['application_id', 'total_marks', 'marks_obtained', 'percentage', 'attemps', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['passing_year', 'last_update_date', 'creation_date'], 'safe'],
            [['subject', 'uni_board'], 'string', 'max' => 20],
            [['enable_flag'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'academic_id' => Yii::t('app', 'Academic ID'),
            'application_id' => Yii::t('app', 'Application ID'),
            'subject' => Yii::t('app', 'Subject'),
            'passing_year' => Yii::t('app', 'Passing Year'),
            'total_marks' => Yii::t('app', 'Total Marks'),
            'marks_obtained' => Yii::t('app', 'Marks Obtained'),
            'percentage' => Yii::t('app', 'Percentage'),
            'uni_board' => Yii::t('app', 'Uni Board'),
            'attemps' => Yii::t('app', 'Attemps'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
        ];
    }
}
