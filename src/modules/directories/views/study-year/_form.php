<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\directories\models\StudyYear */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="study-year-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'year_start')->textInput() ?>

    <?= $form->field($model, 'active')->checkbox(); ?>

    <div class="form-group" >
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
