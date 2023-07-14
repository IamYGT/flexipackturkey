<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
	 $tekil_veri_cek = $db->query("SELECT * FROM kurumsal WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}'  ")->fetch(PDO::FETCH_ASSOC);  ?>
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
        <div class="page-banner ovbl-dark overlay-dotted ovdt1 parallax" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><i class="fa fa-home"></i> Anasayfa</a></li>
							<li><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
						</ul>
					</div>
				 </div>
            </div>
        </div>
		<div class="content-block" id="content-area">
		 	<div class="section-area bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-6 section-sp1 p-r30 p-xs-r15">
							<div class="heading-bx">
								<h6 class="title-ext m-b0">Flexi Pack</h6>
								<h2 class="title-head m-b0"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h2>
								<div class="ttr-separator sepimg"></div>
								<p class="head-px2"><?php echo $tekil_veri_cek["haber_aciklama"]; ?></p>
							</div>
						 	</div>
						<div class="col-md-6 p-lr0 ">
							<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" class="mvimg" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
						</div>
					</div>
				</div>
			</div>
			<!-- Recent News -->
			<div class="section-area bg-white section-sp1">
				<div class="container">
					<div class="heading-bx text-center">
						<h6 class="title-ext m-b0">Flexi Pack</h6>
						<h2 class="title-head m-b0">Rakamlarla Biz</h2>
						<div class="ttr-separator sepimg"></div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-6 m-b30 wow fadeIn" data-wow-delay="0.2s">
							<div class="counter-style-2">
								<div class="counter-bx">
									<span class="counter">125</span>
								</div>
								<span class="counter-text">Müşteri</span>
								<i class="la la-user bg-icon"></i>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6 m-b30 wow fadeIn" data-wow-delay="0.4s">
							<div class="counter-style-2">
								<div class="counter-bx">
									<span class="counter">15</span>
								</div>
								<span class="counter-text">Yıllık Tecrübe</span>
								<i class="la la-trophy bg-icon"></i>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6 m-b30 wow fadeIn" data-wow-delay="0.6s">
							<div class="counter-style-2">
								<div class="counter-bx">
									<span class="counter">787</span>
								</div>
								<span class="counter-text">Yıllık Üretim (Ton)</span>
								<i class="la la-industry bg-icon"></i>
							</div>
						</div>

					</div>
				</div>
			</div>
		   </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
  <?php include 'alt.php'; ?>
</body>
</html>
