<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Hizmetlerimiz - Flexi Pack Turkey </title>
 <?php include("css.php")?>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
<?php include("ust.php")?>
    <div class="page-content bg-white">
		<!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark overlay-dotted ovdt1 parallax" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Hizmetlerimiz</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><i class="fa fa-home"></i> Anasayfa</a></li>
							<li>Hizmetlerimiz</li>
						</ul>
					</div>
				 </div>
            </div>
        </div>
		
		<!-- Page Heading Box END ==== -->
        <!-- Main Slider -->
		<div class="content-block" id="content-area">
       	<div class="section-area section-sp2 bg-gray">
				<div class="container  fadeIn" data-wow-delay="0.8s">
					<div class="heading-bx text-center">
						<h6 class="title-ext m-b0">Flexi Pack</h6>
						<h2 class="title-head m-b0">Hizmetlerimiz</h2>
						<div class="ttr-separator sepimg"></div>
					</div>
					<div class="magnific-image style-3">
					<div class="row">
						    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	  	<div style="margin-bottom:25px" class="col-md-4 item">
							<div class="portfolio-box style-1 m-b0">
								<div class="portfolio-media">
								<a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>">	<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"> </a>
								</div>
								<div class="portfolio-info">
									<h4 class="title"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
									<span class="exe-title">Flexi Pack</span>	
									<a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><i class="la la-plus"></i></a>
								</div>
							</div>
						</div>
					 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>        	</div>
					</div>
				</div>
			</div>
		 </div>
		<!-- contact area END -->
    </div>
   <?php include("alt.php")?>
</body>
</html>
