<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Haberler - Flexi Pack Turkey </title>
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
                    <h1 class="text-white">Haberler</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><i class="fa fa-home"></i> Anasayfa</a></li>
							<li>Haberler</li>
						</ul>
					</div>
				 </div>
            </div>
        </div>
		
		<div class="content-block" id="content-area">
            <!-- Popular Courses -->
			<div class="section-area section-sp2 bg-white">
                <div class="container">
					<div class="row" id="masonry">
						<?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>   <div class="action-card col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.2s">
							<div class="recent-news">
								<div class="action-box">
								<a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>">	<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo $veri_listele["haber_baslik"]; ?>"> </a>
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li class="date"><a href="javascript:;"><i class="fa fa-calendar-o"></i><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a></li>
									</ul>
									<h4 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo $veri_listele["haber_baslik"]; ?></a></h4>
									<p><?php echo $veri_listele["haber_kisaaciklama"]; ?></p>
									<div class="post-extra">
										<a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>" class="btn-link black radius-xl">DEVAMINI OKU</a>
									</div>
								</div>
							</div>
						</div>
					<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
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
