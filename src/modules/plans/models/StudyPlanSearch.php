<?php

namespace app\modules\plans\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class StudyPlanSearch extends StudyPlan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['speciality_id'], 'required'],
            [['semesters'], 'required', 'message' => Yii::t('plans', 'Click "Generate" and check the data')],
            [['id', 'speciality_id'], 'integer'],
            [['created', 'updated'], 'safe'],
            [['id, speciality_id'], 'safe', 'on' => 'search'],
            [['id'], 'unique']
        ];
    }
    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = StudyPlan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'speciality_id' => $this->speciality_id,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'semesters', $this->semesters])
            ->andFilterWhere(['like', 'graphs', $this->graphs]);
        return $dataProvider;
    }
}