<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model gokceyilmazz\content\models\Table */

$this->title = 'Ödev Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

