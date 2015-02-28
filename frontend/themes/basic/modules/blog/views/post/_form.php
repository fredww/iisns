<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title', [
      'template' => "<div class=\"input-group\"><span class=\"input-group-addon\">Title</span>{input}</div>",
    ])->textInput(['maxlength' => 128, 'autocomplete'=>'off']) ?>

    <?= $form->field($model, 'content')->widget('kucha\ueditor\UEditor', [
        'clientOptions' => [
            'elementPathEnabled' => false,
            'autosave' => false,
            'focus' => true,
            'toolbars' => [
                [
                    'fullscreen', 'preview', 'source', 'undo', 'redo', 'insertcode',
                    'justifyleft', 'justifyright', 'justifycenter', 'justifyjustify'
                ],
                [
                    'emotion', 'simpleupload', 'insertimage', 'link', 'insertvideo', 'music', '|',
                    'autotypeset', 'customstyle', 'fontfamily', 'fontsize',
                    'bold', 'italic', 'underline', 'strikethrough', 'removeformat',
                    'formatmatch', 'blockquote', 'pasteplain', '|',
                    'forecolor', 'backcolor', '|',
                ],
            ],
        ]
    ])->label(false) ?>
    
    <?= $form->field($model, 'tags')->textarea(['rows' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>