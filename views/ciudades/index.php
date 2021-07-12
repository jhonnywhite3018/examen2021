<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciudades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciudades-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ciudades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'habitantes',
            'escudo',
             [
                'label'=>'Fotos',
                'format'=>'raw',
                'value' => function($modelo){
                   return Html::img("@web/imgs/".$modelo->mapa,['alt'=>'yii']); 
                }
            ],
            'mapa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
