<?php
use yii\helpers\Html;
//use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head> 
        <title><?= Html::encode($this->title) ?></title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=1290px">
        <link rel="shortcut icon"  type="image/x-icon" href="web/img/favicon/favicon.ico" />
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?= $content ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>