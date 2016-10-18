<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "applications".
 *
 * @property integer $application_id
 * @property string $name
 * @property string $nic
 * @property string $dob
 * @property string $email
 * @property string $mobile
 * @property string $phone
 * @property string $nationality
 * @property string $gender
 * @property string $address
 * @property integer $country
 * @property integer $city
 * @property string $f_name
 * @property string $f_nic
 * @property string $f_occupation
 * @property string $f_email
 * @property string $f_mobile
 * @property string $f_phone
 * @property string $f_nationality
 * @property string $f_current_address
 * @property integer $f_country
 * @property integer $f_city
 * @property string $campus
 * @property integer $test_center
 * @property string $student_type
 * @property integer $f_income
 * @property string $f_perminant_Address
 * @property integer $hostal_flag
 * @property string $enable_flag
 * @property string $last_updated_date
 * @property integer $last_updated_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $last_update_login
 * @property string $print_id
 */
class Applications extends \yii\db\ActiveRecord
{
    
    public $qualification;
    public $subject;
    public $passing_year;
    public $attempt;
    public $total_marks;
    public $obtained;
    public $percentage;
    public $boarduni;
    
    public $preferance;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applications';
    }
       
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'nic', 'dob', 'email', 'mobile', 'phone', 'nationality', 'gender', 'address', 'country', 'city', 'f_name', 'f_nic', 'f_occupation', 'f_email', 'f_mobile', 'f_phone', 'f_nationality', 'f_current_address', 'f_country', 'f_city', 'campus', 'test_center', 'student_type', 'f_income', 'f_perminant_Address', 'hostal_flag', 'last_updated_date', 'last_updated_by', 'creation_date', 'created_by', 'last_update_login', 'print_id'], 'required'],
            [['dob', 'last_updated_date', 'creation_date', 'qualification' , 'subject', 'passing_year', 'attempt', 'total_marks', 'obtained', 'percentage', 'boarduni', 'preferance'], 'safe'],
            [['country', 'city', 'f_country', 'f_city', 'test_center', 'f_income', 'hostal_flag', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['name', 'nic', 'email', 'mobile', 'phone', 'nationality', 'f_name', 'f_nic', 'f_email', 'f_mobile', 'f_phone', 'f_nationality', 'campus', 'student_type'], 'string', 'max' => 20],
            [['gender'], 'string', 'max' => 8],
            [['address', 'f_current_address', 'f_perminant_Address'], 'string', 'max' => 30],
            [['enable_flag'], 'string', 'max' => 2],
            [['print_id'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'application_id' => Yii::t('app', 'Application ID'),
            'name' => Yii::t('app', 'Name'),
            'nic' => Yii::t('app', 'Nic'),
            'dob' => Yii::t('app', 'Date of Birth'),
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'phone' => Yii::t('app', 'Phone'),
            'nationality' => Yii::t('app', 'Nationality'),
            'gender' => Yii::t('app', 'Gender'),
            'address' => Yii::t('app', 'Address'),
            'country' => Yii::t('app', 'Country'),
            'city' => Yii::t('app', 'City'),
            'f_name' => Yii::t('app', " Name"),
            'f_nic' => Yii::t('app', " Nic"),
            'f_occupation' => Yii::t('app', 'Occupation'),
            'f_email' => Yii::t('app', " Email"),
            'f_mobile' => Yii::t('app', " Mobile"),
            'f_phone' => Yii::t('app', " Phone"),
            'f_nationality' => Yii::t('app', "Nationality"),
            'f_current_address' => Yii::t('app', "Current Address"),
            'f_country' => Yii::t('app', "Country"),
            'f_city' => Yii::t('app', "City"),
            'campus' => Yii::t('app', 'The Campus Applied for'),
            'test_center' => Yii::t('app', 'Test Center for Biological Sciences:'),
            'student_type' => Yii::t('app', 'Please tick the applicable box:'),
            'f_income' => Yii::t('app', "Father's\Guardian's Income"),
            'f_perminant_Address' => Yii::t('app', 'Permanent  Address'),
            'hostal_flag' => Yii::t('app', 'Do you require accommodation? '),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_updated_date' => Yii::t('app', 'Last Updated Date'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_login' => Yii::t('app', 'Last Update Login'),
            'print_id' => Yii::t('app', 'Print ID'),
        ];
    }
}
