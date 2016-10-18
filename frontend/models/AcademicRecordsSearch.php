<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AcademicRecords;

/**
 * AcademicRecordsSearch represents the model behind the search form about `frontend\models\AcademicRecords`.
 */
class AcademicRecordsSearch extends AcademicRecords
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['academic_id', 'application_id', 'total_marks', 'marks_obtained', 'percentage', 'attemps', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['subject', 'passing_year', 'uni_board', 'enable_flag', 'last_update_date', 'creation_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AcademicRecords::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'academic_id' => $this->academic_id,
            'application_id' => $this->application_id,
            'passing_year' => $this->passing_year,
            'total_marks' => $this->total_marks,
            'marks_obtained' => $this->marks_obtained,
            'percentage' => $this->percentage,
            'attemps' => $this->attemps,
            'last_update_date' => $this->last_update_date,
            'last_updated_by' => $this->last_updated_by,
            'creation_date' => $this->creation_date,
            'created_by' => $this->created_by,
            'last_update_login' => $this->last_update_login,
        ]);

        $query->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'uni_board', $this->uni_board])
            ->andFilterWhere(['like', 'enable_flag', $this->enable_flag]);

        return $dataProvider;
    }
}
