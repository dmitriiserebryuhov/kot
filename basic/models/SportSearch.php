<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Students;

/**
 * SportSearch represents the model behind the search form about `app\models\Students`.
 */
class SportSearch extends Students
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['students_id', 'group_id', 'user_id', 'gender'], 'integer'],
            [['Name', 'Secondname', 'Patronymic'], 'safe'],
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
        $query = Students::find();

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
            'students_id' => $this->students_id,
            'group_id' => $this->group_id,
            'user_id' => $this->user_id,
            'gender' => $this->gender,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Secondname', $this->Secondname])
            ->andFilterWhere(['like', 'Patronymic', $this->Patronymic]);

        return $dataProvider;
    }
}
