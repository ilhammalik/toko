<?php
use yii\helpers\Url;
?>
 <section  id="brn-promo" class="iphone-cover" style="background-position: 50% -76px;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- Promo Heading-->
        <div class="slider-text">
          <h1>Selamat Datang di Tobang</h1>
          <p class="lead large">Tobang adalah aplikasi Toko Bangunan yang mudah dan terpercaya dan dengan barang berkualitas mutunya dan terjangkau harganya</p>
        </div>
        <div class="btn-group" role="group" aria-label="...">
         <a href="<?php echo Url::to(['/daftar']);?>"><button class="btn btn-warning btn-lg"><span class="ion-clipboard"></span> Register</button></a>
         <a href="<?php echo Url::to(['/masuk']);?>"><button class="btn btn-info btn-lg"><span class="ion-clipboard"></span> Masuk</button></a>
       </div>
       <!-- Promo Heading end-->
     </div>
     <!-- /col-md-6-->
     <div class="col-md-6">
      <!-- Video Embedding-->
      <center><img src="<?php echo Url::to(['/tema']);
 ?>/image/PlexiDrone.jpg" class="img-responsive hidden-xs hidden-sm" style="padding-top:80px;" width="80%"></center>
    </div>
    <!-- /col-md-6-->
  </div>
  <!-- /row-->
</div>
<!-- /container-->
</section>

<br>
<div class="container">


  <div class="col-sm-3">
    <div class="content-bottom-left">
      <div class="hidden-xs buters-guide">
      <h3>Pencarian</h3>

       <select class="form-control">
        <option>Appliance</option>
        <option>Sport Equipments</option>
        <option>Computer &amp; Electronics</option>
        <option>Office supplies</option>
        <option>Healt &amp; Beuty</option>
      </select>
    </div> 
    <hr>
      
      <div class="hidden-xs hidden-sm categories">
       <h3>All Categories</h3>
       <ul class="list-item">
       <?php
    $barang = \common\models\Menu::find()->all();
    foreach ($barang as $key => $value) { ?>
         <li class="list-item-group"><a href="<?php echo Url::to(['/produk/'.$value['link']]);
 ?>"><?= $value['nama'] ?></a></li>
       <?php  }  ?>
       </ul>
     </div>    
   
    
    <div class="clear"></div>


  </div>
</div>


<!-- THIS IS NOT NEEDED, THIS IS JUST THE CONTENT OF THE DEMO -->
<div class="col-xs-12 col-sm-9">
  <div class="content-bottom-right">
  <?php
    $barang = \common\models\Produk::find()->all();
    foreach ($barang as $key => $value) { ?>
      <div class="col-md-3 col-sm-6 margin-30">
      <div class="images_1_of_4">
       <a href=""><div class="numberCircle bounce">New</div></a>
       <img class="imgLiquidFill imgLiquid_error" style="max-width:700px; max-height:525px;"
       src="<?php echo Url::to(['/tema']);
 ?>/image/1.png" width="100%" style="display: none;">
       <div class="price-details">
         <div class="price-number">
          <p><span class="rupees"><?= $value['nama'] ?></span></p>
          <p><span class="rupees">Rp. <?= $value['harga'] ?></span></p>
        </div>
        <div class="add-cart">                
          <h4><a href="<?php echo Url::to(['/produk/'.$value['produk_id']]);
 ?>">Live Preview</a></h4>
        </div>
        <div class="clear"></div>
      </div>
    </div>           
  </div>
     
  <?php  }  ?>
    



</div>

</div>


</div>

<section id="contact" class="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <h2 class="section-heading">Hubungi Kami</h2>
        <hr class="primary">
        <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
      </div>
      <div class="col-lg-4 col-lg-offset-2 text-center">
        <i class="ion-android-call bounce" style="visibility: visible; animation-name: bounce; font-size:30px;"></i>
        <h5>0896-0282-4560</h5>
      </div>
      <div class="col-lg-4 text-center">
        <i class="ion-android-mail bounce" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounce; font-size:30px;"></i>
        <h5><a href="mailto:your-email@your-domain.com">nazihbopas@gmail.com</a></h5>
      </div>
    </div>
  </div>
</section>
