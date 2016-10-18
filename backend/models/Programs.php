<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "programs".
 *
 * @property integer $program_id
 * @property string $name
 * @property string $slug
 * @property string $enable_flag
 * @property string $last_update_date
 * @property integer $last_update_by
 * @property string $creation_date
 * @property integer $created_by
 * @property integer $lase_update_login
 */
class Programs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', ], 'required'],
            [['last_update_date', 'last_update_by', 'creation_date', 'created_by', 'lase_update_login'], 'safe'],
            [['last_update_by', 'created_by', 'lase_update_login'], 'integer'],
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
            'program_id' => Yii::t('app', 'Program ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'enable_flag' => Yii::t('app', 'Enable Flag'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'lase_update_login' => Yii::t('app', 'Lase Update Login'),
        ];
    }
}
