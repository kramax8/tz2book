<?php
use yii\widgets\ListView;
?>

<h1 style="text-align: center;">LIBRARY</h1>


<div class="container">

<div class="book-content">
	<div class="row">
		<?=
			ListView::widget([
			    'dataProvider' => $listDataProvider,
			    'layout' => "{items}\n<div class=\"page-nav\">{pager}</div>",
			    'itemView' => '_list_item',
			]);
		?>

	</div>
</div>

</div>
