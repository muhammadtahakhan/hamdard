<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Programs;

/**
 * ProgramsSearch represents the model behind the search form about `backend\models\Programs`.
 */
class ProgramsSearch extends Programs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['program_id', 'last_update_by', 'created_by', 'lase_update_login'], 'integer'],
            [['name', 'slug', 'enable_flag', 'last_update_date', 'creation_date'], 'safe'],
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
        $query = Programs::find();

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
            'program_id' => $this->program_id,
            'last_update_date' => $this->last_update_date,
            'last_update_by' => $this->last_update_by,
            'creation_date' => $this->creation_date,
            'created_by' => $this->created_by,
            'lase_update_login' => $this->lase_update_login,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'enable_flag', $this->enable_flag]);

        return $dataProvider;
    }
}
