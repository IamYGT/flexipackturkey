     <footer class="footer-style2">
		<div class="footer-top bt0">
			<div class="container">
				<div class="row align-items-center footer-info">
					<div class="col-lg-4 col-md-6 col-sm-6 m-md-b30">
						<div class="feature-container left footer-info-bx">
							<div class="feature-lg text-white">
								<span class="icon-cell"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/icon/contact/icon3.png" alt="Adres"></span>
							</div>
							<div class="icon-content">
								<h5 class="ttr-tilte">Adres</h5>
								<p><?php echo $ayarlar["strAddress"]; ?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-md-b30">
						<div class="feature-container left footer-info-bx">
							<div class="feature-lg text-white">
								<span class="icon-cell"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/icon/contact/icon1.png" alt="Telefon"></span>
							</div>
							<div class="icon-content">
								<h5 class="ttr-tilte">Telefon</h5>
								<a style="color:#fff" href="tel:<?php echo $ayarlar["strPhone"]; ?>"><p>  <?php echo $ayarlar["strPhone"]; ?></p> </a>
								<a style="color:#fff" href="tel:+90 531 222 05 90"><p>  +90 531 222 05 90 </a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 m-sm-b30">
						<div class="feature-container left footer-info-bx">
							<div class="feature-lg text-white">
								<span class="icon-cell"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/icon/contact/icon2.png" alt="Eposta Adresi"></span>
							</div>
							<div class="icon-content">
								<h5 class="ttr-tilte">E-posta Adresi</h5>
                <a style="color:#fff" href="mailto:<?php echo $ayarlar["strMail"]; ?>"><p>  <?php echo $ayarlar["strMail"]; ?></p> </a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-3 col-md-5 col-sm-6">
						<div class="widget footer_widget">
							<h5 class="footer-title">Hızlı Menü</h5>
							<ul>
                <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa </a> </li>
                <li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/hakkimizda">Kurumsal</a> </li>
                <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a> </li>
							  <li><a href="<?php echo $ayarlar["strURL"]; ?>/uretim">Üretim </a> </li>
							 <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim </a> </li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-lg-4 col-md-7 col-sm-6">
						<div class="widget list-2">
							<h5 class="footer-title">Ürünlerimiz</h5>
							<ul>
                <?php
  $veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = '{$lang}' ORDER BY proje_ust_id DESC LIMIT 10");
  if ($veri_cek->rowCount()){
  foreach($veri_cek as $veri_listele){
              $categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND kategori_ust_id = '{$veri_listele['kategori_id']}' AND dil_id='$lang'")->fetch(PDO::FETCH_ASSOC); ?>

 <li><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></li>
                  <?php
    }
  }else{
    "Listelenecek veri bulunamadı.";
  }
?>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-4 col-md-7 col-sm-6">
						<div class="widget list-2">
							<h5 class="footer-title">Hizmetlerimiz</h5>
							<ul>
                <?php
   $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
   if ($veri_cek->rowCount()){
   foreach($veri_cek as $veri_listele){
 ?>
                                               <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                     <?php
     }
   }else{
     "Listelenecek veri bulunamadı.";
   }
 ?>
							</ul>
						</div>
					</div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-left">
						<p class="m-b0">Copyright © <?php echo date("Y"); ?>
				 Flexi Pack
						Her Hakkı Saklıdır.</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-right">
						<ul class="link-inline">
 							<li><a href="https://www.memsidea.com" rel="dofollow">Tasarım : Memsidea Agency</a></li>
						</ul>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up"></button>
</div>

<!-- External JavaScripts -->
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/wow/wow.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/counter/waypoints-min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/counter/counterup.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/masonry/masonry.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/masonry/filter.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.scroller.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/progress-bar/jquery.appear.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/functions.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/contact.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/contact.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/starrating.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/zoom.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
