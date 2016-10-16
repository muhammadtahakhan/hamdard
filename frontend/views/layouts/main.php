<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

//  AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
   
    <script src="<?php echo Yii::getAlias('@web') ?>/form/plugins/jquery-2.1.4.min.js"></script>

    <!-- bootstrap for better look example, but not necessary -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/form/plugins/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection">

    <!-- Step Form Wizard plugin -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/form/step-form-wizard/css/step-form-wizard-all.css" type="text/css" media="screen, projection">
    <script src="<?php echo Yii::getAlias('@web') ?>/form/step-form-wizard/js/step-form-wizard.js"></script>

    <!-- nicer scroll in steps -->
    <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/form/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.min.css">
    <script src="<?php echo Yii::getAlias('@web') ?>/form/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <!-- validation library http://jqueryvalidation.org/ -->
    <script src="<?php echo Yii::getAlias('@web') ?>/form/plugins/jquery-validation/jquery.validate.min.js"></script>
    
    <script>
        var sfw;
        $(document).ready(function () {
            var form = $("#wizard_example");
            form.validate();
            sfw = $("#wizard_example").stepFormWizard({
                height: 'auto',
                onNext: function() {
                    var valid = form.valid();
                    // if use height: 'auto' call refresh metod after validation, because validation can change content
                    sfw.refresh();
                    return valid;
                },
                onFinish: function() {
                    var valid = form.valid();
                    // if use height: 'auto' call refresh metod after validation, because validation can change content
                    sfw.refresh();
                    console.log(valid);
                    return valid;
                }
            });
        })
        $(window).load(function () {
            /* only if you want use mcustom scrollbar */
            $(".sf-step").mCustomScrollbar({
                theme: "dark-3",
                scrollButtons: {
                    enable: true
                }
            });
        });
    
    </script>

    <style>
        pre {margin: 45px 0 60px;}
        h1 {margin: 60px 0 60px 0;}
        p {margin-bottom: 10px;}
        .error {color: #c7254e;}
        
    </style>
</head>
<body>
<?= $content ?>
  



</body>
</html>
