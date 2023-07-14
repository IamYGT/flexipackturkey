 <?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
	 $tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}'  ")->fetch(PDO::FETCH_ASSOC);
  ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["haber_baslik"]; ?>  - Flexi Pack Turkey </title>
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
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a></li> 
							<li><?php echo $tekil_veri_cek["haber_baslik"]; ?> </li>
						</ul>
					</div>
				 </div>
            </div>
		</div>
		<!-- Page Heading Box END ==== -->
        <!-- Main Slider -->
		<div class="content-block" id="content-area">
            <!-- Popular Courses -->
			<div class="section-area section-sp2 bg-white">
                <div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-8 col-xl-8 m-md-b50 wow fadeInUp" data-wow-delay="0.2s">
							<!-- blog start -->
							<div class="blog-lg blog-single">
								<div class="action-box blog-lg">
									<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?> ">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li class="date"><a href="javascript:;"><i class="fa fa-calendar-o"></i> <?php echo $tekil_veri_cek["haber_tarih"]; ?> </a></li>
									</ul>
									<div class="ttr-post-title">
										<h4 class="post-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h4>
									</div>
									<div class="ttr-post-text">
									<?php echo $tekil_veri_cek["haber_aciklama"]; ?>
									</div>
									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
									<div class="ttr-post-meta d-flex">
										<div class="post-tags">
											<a href="javascript:void(0);">Flexi</a>
											<a href="javascript:void(0);">Pack</a>
											<a href="javascript:void(0);">Big</a>
											<a href="javascript:void(0);">Pack</a>
										</div>
										<div class="share-post ml-auto">
											<ul class="social">
												<li>Paylaş:</li>
												<li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							</div>
						<div class="col-md-12 col-lg-4 col-xl-4 sticky-top wow fadeInUp" data-wow-delay="0.4s">
							<aside class="side-bar sticky-top aside-bx">
								<div class="widget recent-posts-entry">
									<h6 class="widget-title">SON HABERLER</h6>
									<div class="widget-post-bx">
										    <?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1   ORDER BY haber_ust_id DESC LIMIT 4");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?>

										<div class="widget-post clearfix">
											<div class="ttr-post-media"> <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" width="200" height="143" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"> </div>
											<div class="ttr-post-info">
												<div class="ttr-post-header">
													<h6 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h6>
												</div>
												<ul class="media-post">
													<li><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a></li>
												</ul>
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
								<div class="widget widget_gallery gallery-grid-3">
									<h6 class="widget-title">Galeri</h6>
									<ul>
										<?php

			$list = $db->query("SELECT * FROM files WHERE ustid = 1 AND itable = 1 ORDER BY ustid DESC LIMIT 6"  );
				foreach($list as $row){
?>		   <li><div class="magnific-image"><a href="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" class="magnific-anchor"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" alt="Big Pack"></a></div></li>
 									<?php
				}
				?>
									</ul>
								</div>

							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact area END -->
    </div>
   <?php include("alt.php")?>
</body>
</html>
