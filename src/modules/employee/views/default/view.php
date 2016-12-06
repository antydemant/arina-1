<?php

use app\modules\employee\models\Employee;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;

/* @var $this View
 * @var $model Employee */

$this->title = $model->getFullName();
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Employees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="employee-view">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?= Html::encode($this->title) ?>
            </h1>
        </div>
    </div>

    <p>
        <?= Html::a(Yii::t('app', 'List'), ['index'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'is_in_education',
            'position_id',
            'category_id',
            'type',
            'first_name',
            'middle_name',
            'last_name',
            'gender',
            'cyclic_commission_id',
            'birth_date',
            'passport',
            'passport_issued_by',
        ],
    ]) ?>

</div>
