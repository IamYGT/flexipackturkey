<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
	 $tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Flexi Pack Turkey </title>
 <?php include("css.php")?>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
<?php include("ust.php")?>
    <div class="page-content bg-white">
		<!-- Page Heading Box ==== -->
		<div class="page-banner page-banner-sm">
				<div class="container">
						<div class="page-banner-entry">
								<h1 class="text-black"><?php echo $tekil_veri_cek["haber_baslik"]; ?> </h1>
			<div class="breadcrumb-row text-black">
				<ul class="list-inline">
					<li><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="fa fa-home"></i> Anasayfa</a></li>
					<li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a></li>
					<li><?php echo $tekil_veri_cek["haber_baslik"]; ?> </li>
				</ul>
			</div>
		 </div>
				</div>
</div>
		<div class="content-block" id="content-area">
			<!-- Form -->
			<div class="section-area section-sp2 bg-fix bg-white">
				<div class="container about-video">
					<div class="row">
						<div class="col-lg-4 col-md-5 m-b30 wow fadeInUp" data-wow-delay="0.2s">
							<aside class="sticky-top">
								<div class="widget">
									<ul class="service-list">
 											    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?> 	   <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><span><?php echo 	$veri_listele["haber_baslik"]; ?></span><i class="fa fa-angle-right"></i></a></li>
									 <?php
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
									</ul>
								</div>
							</aside>
						</div>
						<div class="col-lg-8 col-md-7 service-textarea wow fadeInUp portfolio-content" data-wow-delay="0.4s">
							<div class="row ">
								<div class="col-md-12 m-b15">
											<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" class="imghight" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">

								</div>
							</div>
							<div class="heading-bx text-left m-b20">
								<h3 class="title-head m-b0"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h3>
								<div class="ttr-separator sepimg"></div>
							</div>
							<?php echo $tekil_veri_cek["haber_aciklama"]; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
   <?php include("alt.php")?>
</body>
</html>
