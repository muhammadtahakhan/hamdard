<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProgramOffer;

/**
 * ProgramOfferSearch represents the model behind the search form about `backend\models\ProgramOffer`.
 */
class ProgramOfferSearch extends ProgramOffer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['offer_id', 'program_id', 'session_id', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['year', 'from_date', 'to_date', 'enable_flag', 'last_update_date', 'creation_date'], 'safe'],
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
        $query = ProgramOffer::find();

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
            'offer_id' => $this->offer_id,
            'program_id' => $this->program_id,
            'session_id' => $this->session_id,
            'year' => $this->year,
            'from_date' => $this->from_date,
            'to_date' => $this->to_date,
            'last_update_date' => $this->last_update_date,
            'last_updated_by' => $this->last_updated_by,
            'creation_date' => $this->creation_date,
            'created_by' => $this->created_by,
            'last_update_login' => $this->last_update_login,
        ]);

        $query->andFilterWhere(['like', 'enable_flag', $this->enable_flag]);

        return $dataProvider;
    }
}
