<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");

$row_info = $db->query("SELECT * FROM galeriler WHERE galeri_seo = '1' ")->fetch(PDO::FETCH_ASSOC);
$ustid = $row_info["galeri_ust_id"];

 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Üretim - Flexi Pack Turkey</title>
 <?php include("css.php")?>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
<?php include("ust.php")?>
	<div class="page-banner ovbl-dark parallax" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/assets/images/banner/banner2.jpg);">
		<div class="container">
			<div class="page-banner-entry">
				<h1 class="text-white">Üretim</h1>
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><i class="fa fa-home"></i>Anasayfa</a></li>
						<li>Üretim</li>
					</ul>
				</div>
			 </div>
		</div>

	</div>
	<!-- Page Heading Box END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
		<!-- Main Slider -->
		<div class="content-block" id="content-area">
			<div class="section-area bg-white">
                <div class="container-fuild">
					<div class="row nosp magnific-image" id="masonry">
						 	<?php

			$list = $db->query("SELECT * FROM files WHERE ustid = 1 AND itable = 1");
				foreach($list as $row){
?>
						<div class="action-card col-lg-3 col-md-6 col-sm-6 col-12 oil-gas wow fadeInUp" data-wow-delay="0.2s">
							<div class="portfolio-box style-3 m-b0">
								<div class="portfolio-media">
								<a href="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" class="magnific-anchor">	<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" alt="Flexi Pack"> </a>
								</div>
							</div>
						</div>
						   <?php
				}
				?>
					</div>
				</div>
            </div>
		 </div>
		<!-- contact area END -->
    </div>
   <?php include("alt.php")?>
</body>
</html>
