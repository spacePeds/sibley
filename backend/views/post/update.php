<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */

$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

$form = ActiveForm::begin([
    'id' => 'post-form',
    'enableAjaxValidation' => false,
]); ?>

<?= $form->field($model, 'title')->textInput(); ?>

<?= $form->field($model, 'body')->textArea(); ?>

<?= $form->field($model, 'category_ids')
    ->listBox($categories, ['multiple' => true])
    /* or, you may use a checkbox list instead */
    /* ->checkboxList($categories) */
    ->hint('Select the categories of the post.');
?>
<?php
foreach ($contacts as $index => $contact) {
//    echo $form->field($product, "[$index]ID_PRODUCT")->label($product->ID_PRODUCT);
    echo $form->field($contact, "[$index]method")->label($contact->method);
    echo $form->field($contact, "[$index]digits")->label($contact->digits);
    echo $form->field($contact, "[$index]notes")->label($contact->notes);
}
?>

<div class="form-group">
    <?= Html::submitButton('Update', [
        'class' => 'btn btn-primary'
    ]) ?>
</div>

<?php ActiveForm::end(); ?>
