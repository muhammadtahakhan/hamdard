<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
 <div class="row">
     <div class="col-lg-4">
         
<div class="site-index">
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
            <span class="info-box-icon bg-green">
          <i class="fa fa-flag-o"></i>
          </span>
  <div class="info-box-content">
<!--    <span class="info-box-text">Likes</span>
    <span class="info-box-number">93,139</span>-->
  </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
     </div>
     </div>
     
     <div class="col-lg-4">
         
<div class="site-index">
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
  <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
  <div class="info-box-content">
<!--    <span class="info-box-text">New Applications</span>
    <span class="info-box-number">93,139</span>-->
  </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
     </div>
     </div>
     
     <div class="col-lg-4">
         
<div class="site-index">
<div class="info-box">
  <!-- Apply any bg-* class to to the icon to color it -->
                        <span class="info-box-icon bg-yellow">
                      <i class="fa fa-files-o"></i>
                      </span>
  <div class="info-box-content">
      <span class="info-box-text"><a href="<?= Url::to(['applications/index']); ?>">Total Applications</a></span>
    <span class="info-box-number"><?= $totalapplications ?></span>
  </div><!-- /.info-box-content -->
</div><!-- /.info-box -->
     </div>
     </div>
     
     
 

<!--    <div class="jumbotron">
        <h1>Congratulations!</h1>

        
    </div>-->

    <div class="body-content">

        <div class="row">
<!--            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>-->
        </div>

    </div>
</div>
