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
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="screen, projection">
    
    <!--http://stackoverflow.com/questions/22983013/how-to-get-html-5-input-type-date-working-in-firefox-and-or-ie-10-->
    <!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="https://cdn.jsdelivr.net/webshim/1.15.10/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
  
</script>

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
    
    <!-- Bootstrap Date-Picker Plugin -->
    <!--https://formden.com/blog/date-picker-->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
            <script>
                $(document).ready(function(){
                  var date_input=$('input[id="date"]'); //our date input has the name "date"
                  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                  var options={
                    format: 'yyyy-mm-dd',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                  };
                  date_input.datepicker({
                       format: " yyyy",
                        viewMode: "years", 
                        minViewMode: "years"
                  });
                })
            </script>
            
            <!--cropic-->
            <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/form/croppic/croppic.css">
           <script src="<?php echo Yii::getAlias('@web') ?>/form/croppic/croppic.min.js"></script>
           <script>
           var cropperHeader = new Croppic('yourId');
           </script>
           <style>#yourId {
			width: 200px;
			height: 150px;
			position:relative; /* or fixed or absolute */
		}</style>

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
