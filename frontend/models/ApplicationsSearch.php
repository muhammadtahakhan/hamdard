<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Applications;

/**
 * ApplicationsSearch represents the model behind the search form about `frontend\models\Applications`.
 */
class ApplicationsSearch extends Applications
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['application_id', 'country', 'city', 'f_country', 'f_city', 'test_center', 'f_income', 'hostal_flag', 'last_updated_by', 'created_by', 'last_update_login'], 'integer'],
            [['name', 'nic', 'dob', 'email', 'mobile', 'phone', 'nationality', 'gender', 'address', 'f_name', 'f_nic', 'f_occupation', 'f_email', 'f_mobile', 'f_phone', 'f_nationality', 'f_current_address', 'campus', 'student_type', 'f_perminant_Address', 'enable_flag', 'last_updated_date', 'creation_date', 'print_id'], 'safe'],
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
        $query = Applications::find();

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
            'application_id' => $this->application_id,
            'dob' => $this->dob,
            'country' => $this->country,
            'city' => $this->city,
//            'f_dob' => $this->f_dob,
            'f_country' => $this->f_country,
            'f_city' => $this->f_city,
            'test_center' => $this->test_center,
            'f_income' => $this->f_income,
            'hostal_flag' => $this->hostal_flag,
            'last_updated_date' => $this->last_updated_date,
            'last_updated_by' => $this->last_updated_by,
            'creation_date' => $this->creation_date,
            'created_by' => $this->created_by,
            'last_update_login' => $this->last_update_login,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nic', $this->nic])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'f_name', $this->f_name])
            ->andFilterWhere(['like', 'f_nic', $this->f_nic])
            ->andFilterWhere(['like', 'f_email', $this->f_email])
            ->andFilterWhere(['like', 'f_mobile', $this->f_mobile])
            ->andFilterWhere(['like', 'f_phone', $this->f_phone])
            ->andFilterWhere(['like', 'f_nationality', $this->f_nationality])
            ->andFilterWhere(['like', 'f_current_address', $this->f_current_address])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'student_type', $this->student_type])
            ->andFilterWhere(['like', 'f_perminant_Address', $this->f_perminant_Address])
            ->andFilterWhere(['like', 'enable_flag', $this->enable_flag])
            ->andFilterWhere(['like', 'print_id', $this->print_id]);

        return $dataProvider;
    }
}
