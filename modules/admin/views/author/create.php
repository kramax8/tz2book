<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Author */

$this->title = 'Добавление автора';
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-create">

    <div class="container">
    	<h1><?= Html::encode($this->title) ?></h1>

    	<?= $this->render('_form', [
    	    'model' => $model,
    	]) ?>
    </div>

</div>
