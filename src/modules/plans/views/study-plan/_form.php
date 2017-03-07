<?php

use yii\web\View;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
use kartik\select2\Select2;

use app\modules\directories\models\speciality\Speciality;
use app\modules\plans\models\StudyPlan;
use app\modules\plans\widgets\Graph;

/**
 * @var $this View
 * @var $model StudyPlan
 * @var ActiveForm $form
 */
?>

<div class="study-plan-form">
    <?php Pjax::begin(); ?>

    <?php $form = ActiveForm::begin(
        [
            'id' => 'dynamic-form',
            'options' => [
                'enctype' => 'multipart/form-data',
            ],

        ]
    ); ?>

    <p class="note"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required.'); ?></p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'speciality')->widget(Select2::className(), [
                'data' => Speciality::getList(),
                'options' =>
                    [
                        'placeholder' => $model->getAttributeLabel('speciality_id')
                    ]
            ]);?>
        </div>
    </div>
    <?php if ($model->isNewRecord): ?>
    <div class="row">
        <div class="col-sm-6">
            <?= Select2::widget(
                [
                    'data' => StudyPlan::getList(),
                    'name' => 'copy_plan',
                    'options' =>
                        [
                            'placeholder' => Yii::t('app', 'Select copy plan')
                        ]
                ]
            );?>
        </div>
    </div>
    <?php endif; ?>

    <?= Graph::widget(['model' => $model, 'field' => '', 'graph' => $model->graph]);?>

    <?= $this->render('_form_buttons', ['model' => $model, ]) ?>

    <?php ActiveForm::end(); ?>

    <?php Pjax::end(); ?>
</div>