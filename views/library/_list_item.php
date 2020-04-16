<?php
// _list_item.php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php
// echo '<pre>';
// echo print_r($model->book[0]->name);
// echo '</pre>';
?>


<article class="item" data-key="<?= $model->id; ?>">

	<?php
	if(isset($model->author) && !empty($model->author)):?>

		<div class="col-md-3">
			<div class="thumbnail">
				<h3><?= $model->name; ?></h3>
				<p><i><?= $model->author->name; ?></i></p>
				<p><strong><?= $model->year; ?></strong></p>
			</div>
		</div>

	<?php endif; ?>

</article>
