<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Anasayfa - Flexi Pack Turkey </title>
 <?php include("css.php")?>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
<?php include("ust.php")?>
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider slide1">
			<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				<div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
					<ul>
						<!-- SLIDE  -->

						<?php
										$veri_cek = $db->query("SELECT * FROM slayt  WHERE slayt_durum = 1 AND dil_id = 'tr' ORDER BY slayt_ust_id ASC LIMIT 99");
						 				if ($veri_cek->rowCount()){
										foreach($veri_cek as $veri_listele){
						?> 	<li data-index="rs-100" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="Science says that Women are generally happier">
							<!-- MAIN IMAGE -->
							<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(2, 0, 11, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Subtitle tp-resizeme" id="slide-100-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['180','180','110','100']" data-fontsize="['14','14','12','12']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textalign="['left','left','left','left']" data-paddingtop="[8,10,10,8]" data-paddingright="[15,15,12,12]" data-paddingbottom="[8,10,8,8]" data-paddingleft="[15,15,12,12]" style="z-index: 7; white-space: nowrap; color:#fff; text-transform: uppercase; background-color: var(--primary); font-family:Barlow; line-height: 14px; font-size:14px; letter-spacing: 3px; font-weight:500;">
									<?php echo 	$veri_listele["slayt_baslik"]; ?>
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-100-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['230','230','150','140']" data-fontsize="['70','50','36','30']" data-lineheight="['70','55','36','35']" data-width="full" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textalign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; font-family:Barlow; font-weight:300; text-transform: uppercase; text-align:center; white-space: normal;">
									<?php echo 	$veri_listele["slayt_aciklama"]; ?>
							</div>



							<!-- LAYER NR. 4 -->
							<div class="tp-caption" id="slide-100-layer-5" data-x="['center','center','center','center']" data-hoffset="['80','80','75','75']" data-y="['top','top','top','top']" data-voffset="['430','400','250','240']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-textalign="['center','center','center','center']" style="z-index: 8; white-space: nowrap; outline:none; margin-right:5px;">
								<a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/hakkimizda" class="btn white">Hakkımızda</a>
							</div>
							<div class="tp-caption"
								id="slide-100-layer-6"
								data-x="['center','center','center','center']"
								data-hoffset="['-80','-80','-75','-75']"
								data-y="['top','top','top','top']"
								data-voffset="['430','400','250','240']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-type="button"
								data-responsive_offset="on"
								data-responsive="off"
								data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
								data-textAlign="['center','center','center','center']"
								style="z-index: 8; white-space: nowrap;  outline:none;"><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/hakkimizda" class="btn">Hakkımızda</a></div>
						</li>
						<?php
											}
										}else{
											"Listelenecek veri bulunamadı.";
										}
						?>
					</ul>
				</div><!-- END REVOLUTION SLIDER -->
			</div>
		</div>
        <!-- Main Slider -->

        <!-- Main Slider -->
		<div class="content-block" id="content-area">
 	<div style="    padding-bottom: 90px;" class="section-area section-sp3 bg-white">
       <div class="container">
					<div class="row">
						<?php
				$veri_cek = $db->query("SELECT * FROM kurumsal  WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 1");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?>

						<div class="col-md-6">
							<div class="about-img-box3">
								<div  style="    max-width: 550px;" class="img1">
									<img style="    width: 100%;    height: 50%;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
								</div>
								<div class="img2">
									<img src="assets/images/portfolio/portfolio-1/image_7.jpg" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="heading-bx m-b20">
								<h6 class="title-ext m-b0">Flexi Pack</h6>
								<h2 class="title-head m-b0"><?php echo 	$veri_listele["haber_baslik"]; ?></h2>
								<div class="ttr-separator sepimg"></div>
 								 <?php echo 	$veri_listele["haber_aciklama"]; ?>
							</div>
							<a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/<?php echo $veri_listele["haber_seo"]; ?>" class="btn">Devamını Oku</a>
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
			<div class="section-area section-sp3 bg-gray">
 				<div class="container">
 					<div class="row">
 						<div class="col-lg-12">
 							<div class="heading-bx text-center m-b0">
 								<h6 class="title-ext m-b0">Flexi Pack</h6>
 								<h2 class="title-head m-b0">Ürünlerimiz</h2>
 								<div class="ttr-separator sepimg"></div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="process-carousel owl-carousel magnific-image">
					<?php
								$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = 'tr' ORDER BY proje_ust_id ASC LIMIT 5");
				 				if ($veri_cek->rowCount()){
								foreach($veri_cek as $veri_listele){
				?> 	<div class="item">
 						<div class="portfolio-box style-2">
 							<div class="portfolio-media">
 								<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $veri_listele["proje_resim"]; ?>" alt="<?php echo 	$veri_listele["proje_baslik"]; ?>">
 							</div>
 							<div class="portfolio-info">
 								<h4 class="title"><a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>"><?php echo 	$veri_listele["proje_baslik"]; ?></a></h4>
 								<span class="exe-title">Flexi Pack</span>
 							</div>
 							<a href="<?php echo $ayarlar["strURL"]; ?>/urun/<?php echo $veri_listele["proje_seo"]; ?>" class="magnific-anchor right">İncele</a>
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
 			<!-- portfolio End -->
 			<!-- Our Services -->
 			<div class="section-area section-sp2 bg-white" style="background-image:url(assets/images/background/bg2.png); background-position:bottom; background-size:100%;">
                 <div class="container">
 					<div class="row">
 						<div class="col-lg-12">
 							<div class="heading-bx text-center">
 								<h6 class="title-ext m-b0">Flexi Pack</h6>
 								<h2 class="title-head m-b0">Hizmetlerimiz</h2>
 								<div class="ttr-separator sepimg"></div>
 							</div>
 						</div>
 					</div>
 					<div class="row">
						<?php
									$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id ASC LIMIT 6");
					 				if ($veri_cek->rowCount()){
									foreach($veri_cek as $veri_listele){
					?> 	<div class="col-xl-4 col-lg-6 col-md-6 m-b30">
 							<div class="service-bx style1">
 								<div class="service-media">
 									<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
 								</div>
 								<div class="service-info">
 									<h4 class="title"><?php echo 	$veri_listele["haber_baslik"]; ?></h4>
 									<p><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
 									<a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>" class="btn-link">Devamını Oku</a>
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

			<div class="section-area section-sp1 bg-gray" style="background-image:url(assets/images/background/bg2.png); background-position:bottom; background-size:100%;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading-bx text-center">
								<h6 class="title-ext m-b0">Flexi Pack</h6>
								<h2 class="title-head m-b0">Haberler</h2>
								<div class="ttr-separator sepimg"></div>
							</div>
						</div>
					</div>
					<div class="blog-carousel owl-carousel owl-loaded owl-drag">
						<?php
									$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
					 				if ($veri_cek->rowCount()){
									foreach($veri_cek as $veri_listele){
					?> 	<div class="item">
							<div class="recent-news bg-white">
								<div class="action-box">
									<a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
								</div>
								<div class="info-bx p-a30">
									<ul class="media-post">
										<li class="date"><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><i class="fa fa-calendar-o"></i><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></a></li>
									</ul>
									<h4 class="post-title"><a href="<?php echo $ayarlar["strURL"]; ?>/haber/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
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
			<!-- Blog End -->

	     </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
 <?php include 'alt.php'; ?>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script>
jQuery(document).ready(function() {

	jQuery('.get-member-info').on('click',function(){
		jQuery('.team-members-section .team-section').removeClass('active');
		jQuery('[data-info='+$(this).attr('data-id')+']').addClass('active');

	});
	jQuery('.close-team').on('click',function(){
		jQuery('.team-members-section .team-section').removeClass('active');
	});

	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_486_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_486_1");
	}else{
		ttrevapi = tpj("#rev_slider_486_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			 navigation: {
				keyboardNavigation: "on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation: "off",
				onHoverStop: "off",
				touch: {
					touchenabled: "on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				},
				arrows: {
					style: "hades",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				},
				thumbnails: {
					style: "hades",
					enable: true,
					width: 50,
					height: 50,
					min_width: 100,
					wrapper_padding: 5,
					wrapper_color: "transparent",
					wrapper_opacity: "1",
					tmp: '<span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span>',
					visibleAmount: 5,
					hide_onmobile: false,
					hide_onleave: false,
					direction: "horizontal",
					span: false,
					position: "inner",
					space: 5,
					h_align: "center",
					v_align: "bottom",
					h_offset: 0,
					v_offset: 20
				}
			},
			viewPort: {
				enable:true,
				outof:"pause",
				visible_area:"80%",
				presize:false
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[680,450,400,400],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"enterpoint",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});
</script>
<script>
    var galleryThumbs = new Swiper('.service-gallery-thumbs', {
      spaceBetween: 0,
      slidesPerView: 4,
      freeMode: true,
	  speed: 1000,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
	  breakpoints: {
		0: {
          slidesPerView: 1,
        },
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 4,
        },
      }
    });


    var galleryTop = new Swiper('.service-gallery-top', {
      spaceBetween: 0,
	  speed: 1000,
	  parallax: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });

	var clinetThumbs = new Swiper('.clinet-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
	  speed: 1000,
	  watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var clientTop = new Swiper('.client-area-box', {
      spaceBetween: 0,
	  speed: 1000,
	  parallax: true,
      thumbs: {
        swiper: clinetThumbs
      }
    });

		jQuery(document).ready(function() {

	jQuery('.get-member-info').on('click',function(){
		jQuery('.team-members-section .team-section').removeClass('active');
		jQuery('[data-info='+$(this).attr('data-id')+']').addClass('active');

	});
	jQuery('.close-team').on('click',function(){
		jQuery('.team-members-section .team-section').removeClass('active');
	});

	var ttrevapi;
	var tpj =jQuery;
	if(tpj("#rev_slider_1061_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_1061_1");
	}else{
		ttrevapi = tpj("#rev_slider_1061_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				bullets: {
					enable:true,
					hide_onmobile:true,
					hide_under:1024,
					style:"uranus",
					hide_onleave:false,
					direction:"vertical",
					h_align:"right",
					v_align:"center",
					h_offset:30,
					v_offset:0,
					space:5,
					tmp:'<span class="tp-bullet-inner"></span>'
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[868,768,960,720],
			lazyType:"none",
			parallax: {
				type:"3D",
				origo:"slidercenter",
				speed:1000,
				levels:[2,4,6,8,10,12,14,16,45,50,47,48,49,50,0,50],
				type:"3D",
				ddd_shadow:"off",
				ddd_bgfreeze:"on",
				ddd_overflow:"hidden",
				ddd_layer_overflow:"visible",
				ddd_z_correction:100,
			},
			spinner:"off",
			stopLoop:"on",
			stopAfterLoops:0,
			stopAtSlide:1,
			shuffle:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "0",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}
});
</script>
</body>
</html>
