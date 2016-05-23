<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Store | Providing Appropriate Information Technology</title>
  <link rel="shortcut icon" href="media/image/box.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <!-- NAVBAR -->

  <div class="navbar-wrapper">
    <div class="container-fluid">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Tobang</a>

          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
             <li><a href="<?php echo Url::to(['/index']);
 ?>" class="">Home</a></li>
             <li><a href="<?php echo Url::to(['/tentang']);
 ?>" class="">Tentang</a></li>
             <li><a href="<?php echo Url::to(['/kontak']);
 ?>" class="">Kontak Kami</a></li>
             
           </ul>
         </div>
       </div>
     </nav>
   </div>
 </div>

  <?= $content ?>

<div id="footer" class="section light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <p>© 2015, Made by <a href="artikulpi.com">WebDesignArtikulpi</a></p>   
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="">
          <p class="social-media">
            <a href="#" data-toggle="tooltip" title="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" data-toggle="tooltip" title="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" data-toggle="tooltip" title="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" data-toggle="tooltip" title="github"><i class="fa fa-github"></i></a>
            <a href="#" data-toggle="tooltip" title="pinterest"><i class="fa fa-pinterest"></i></a>
          </p>
        </div>
      </div>
    </div>  
  </div>
  </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

