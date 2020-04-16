<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Book */

$this->title = 'Добавление книгу';
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">

    <div class="container">
    	<h1><?= Html::encode($this->title) ?></h1>

    	<?= $this->render('_form', [
    	    'model' => $model,
    	]) ?>
    </div>

</div>
