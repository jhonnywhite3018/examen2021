<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ciudades */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ciudades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ciudades-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'habitantes',
            'escudo',
                         [
                'label'=>'Cartel de la Pelicula',
                'format'=>'raw',
                'value' => function($modelo){
                   return Html::img("@web/imgs/".$modelo->mapa,['alt'=>'yii']); 
                }
            ],
        ],
    ]) ?>

</div>
