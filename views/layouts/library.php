<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LibraryAppAsset;
use yii\helpers\Url;

LibraryAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>library</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- header start -->
<div class="container">
	<div class="header">
		<div class="header-logo">
			<a href="<?= Url::to(['/']) ?>">БИБЛИОТЕКА</a>
		</div>
		<div class="header-menu">

		</div>
		<div class="header-regime">
			<?php if(!Yii::$app->user->isGuest): ?>
				<a class="btn btn-default" href="<?= Url::to(['/site/logout']) ?>">
					<?= Yii::$app->user->identity['username'] ?>
					(Выход)
				</a>
			<?php endif; ?>
			<a class="btn btn-success" href="<?= Url::to(['/admin']) ?>">Админка</a>
		</div>
	</div>
</div>
<!-- header end -->


<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
