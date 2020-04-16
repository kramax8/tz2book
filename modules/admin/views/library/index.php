<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <div class="container">
    	<h1><?= Html::encode($this->title) ?></h1>

    	<p>
    	    <?= Html::a('Добавить книгу', ['create'], ['class' => 'btn btn-success']) ?>
    	</p>


    	<?= GridView::widget([
    	    'dataProvider' => $dataProvider,
            'summary'=> "",
    	    'columns' => [
    	        ['class' => 'yii\grid\SerialColumn'],

    	        'id',
    	        'name',
    	        // 'author_id',
    	        [
    	          'attribute' => 'author_id',
    	          'value' => function($data) {
    				return $data->author->name;
    	          },
    	        ],
    	        'year',
    	        'count_page',

    	        ['class' => 'yii\grid\ActionColumn'],
    	    ],
    	]); ?>
    </div>


</div>
