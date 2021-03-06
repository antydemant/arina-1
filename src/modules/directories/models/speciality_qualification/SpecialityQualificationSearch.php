<?php

namespace app\modules\directories\models\speciality_qualification;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SpecialityQualificationSearch represents the model behind the search form of `app\modules\directories\models\SpecialityQualification`.
 */
class SpecialityQualificationSearch extends SpecialityQualification
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'years_count', 'months_count'], 'integer'],
            [['title'], 'safe'],
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
        $query = SpecialityQualification::find();

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
            'id' => $this->id,
            'years_count' => $this->years_count,
            'months_count' => $this->months_count,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
