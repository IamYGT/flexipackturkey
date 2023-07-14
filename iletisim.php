<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title>İletişim - Flexi Pack Turkey </title>
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
                    <h1 class="text-white">İletişim</h1>
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><i class="fa fa-home"></i> Anasayfa</a></li>
							<li>İletişim</li>
						</ul>
					</div>
				 </div>
            </div>
        </div>

		<!-- Page Heading Box END ==== -->
        <!-- Main Slider -->
		<div class="content-block" id="content-area">
            <div style="    padding-bottom: 93px;" class="section-area bg-gray">
				<div class="container">
					<div class="row contact-bx-area2">
						<div class="col-lg-8 col-md-12 wow fadeIn section-sp2" data-wow-delay="0.4s">
							<form class="form-area-box ajax-form p-lr30 p-sm-lr5" action="assets/script/contact.php">
								<div class="ajax-message"></div>
								<div class="heading-bx">
									<h6 class="title-ext m-b0">İletişime Geçin</h6>
									<h2 class="title-head m-b0">İletişim Formu</h2>
									<div class="ttr-separator sepimg"></div>
									<p class="head-px2">İletişim formundan bize ulaşabilir veya telefon numaramızdan bizimle iletişime geçebilirsiniz.</p>
								</div>
								<div class="row placeani">
									<div class="col-lg-6 ">
										<div class="form-group">
											<div class="input-group">
												<label>İsminiz</label>
												<input name="name" type="text" required="" class="form-control valid-character">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<div class="input-group">
												<label>Epostanız</label>
												<input name="email" type="email" class="form-control" required="">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<div class="input-group">
												<label>Telefon</label>
												<input name="phone" type="text" required="" class="form-control int-value">
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<div class="input-group">
												<label>Konu</label>
												<input name="subject" type="text" required="" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<label>Mesajınız</label>
												<textarea name="message" rows="4" class="form-control" required=""></textarea>
											</div>
										</div>
									</div>

									<div class="col-lg-12">
										<button name="submit" type="submit" value="Submit" class="btn button-md"> GÖNDER</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-lg-4 col-md-12 wow fadeIn right-info bg-primary p-sm-lr15" data-wow-delay="0.4s">
							<div class="contact-icon-box">
								<h5 class="title"><i class="icon la la-map-marker-alt"></i>Adres</h5>
								<p><?php echo $ayarlar["strAddress"]; ?></p>
								<i class="la la-map-marker-alt bg-icon"></i>
							</div>
							<div class="contact-icon-box">
								<h5 class="title"><i class="icon la la-phone-volume"></i>Telefon</h5>

              	<p><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></p>
              	<p><a href="tel:+90 531 222 05 90">+90 531 222 05 90 </a></p>
 								<i class="la la-phone-volume bg-icon"></i>
							</div>
							<div class="contact-icon-box">
								<h5 class="title"><i class="icon la la-envelope-open"></i>Eposta Adresi</h5>
								<p><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></p>
								<i class="la la-envelope-open bg-icon"></i>
							</div>

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
