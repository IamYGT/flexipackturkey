<!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><i class="la la-phone"></i>  <?php echo $ayarlar["strPhone"]; ?></a></li>
							<li><a href="tel:+90 531 222 05 90"><i class="la la-phone"></i> +90 531 222 05 90</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
 							<li><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><i style="color:#086ad8; margin-right: 5px;    font-size: 22px;" class="las la-envelope-open"></i><?php echo $ayarlar["strMail"]; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="<?php echo $ayarlar["strURL"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/logo-2.png" alt="Flexi Pack Logo"></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					      <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
							<li style="   " class="d-none d-sm-block">
									<a style="    padding: 8px 13px;" href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>" class="btn"><i class="fa fa-facebook"> </i></a>
								</li><li style="    margin-left: 9px;" class="d-none d-sm-block">
									<a style="    padding: 8px 13px;" href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>" class="btn"><i class="fa fa-instagram"> </i></a>
								</li><li style="    margin-left: 9px;" class="d-none d-sm-block">
									<a style="    padding: 8px 13px;" href="https://wa.me/<?php echo $ayarlar["strWhatsappPhone_tr"]; ?>?text=<?php echo $ayarlar["strWhatsappMessage_tr"]; ?>" class="btn"><i class="fa fa-whatsapp"> </i></a>
								</li>
							</ul>
						</div>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-end" id="menuDropdown">
						<div class="menu-logo">
							<a href="index.html"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/images/logo-2.png" alt="Flexi Pack"></a>
						</div>
                        <ul class="nav navbar-nav">
							 <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa </a> </li>
							 <li><a href="#">Kurumsal<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li class="add-menu-left">
										<ul>
 													 <?php
				$veri_cek = $db->query("SELECT * FROM kurumsal WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){
				foreach($veri_cek as $veri_listele){
?>
                                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
													<?php
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
										</ul>
									</li>
								</ul>
							</li>


							 <li><a href="javascript:;">Ürünlerimiz<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li class="add-menu-left">
										<ul>
										  <?php
				$veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND dil_id = '{$lang}' ORDER BY proje_ust_id ASC LIMIT 99");
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
									</li>
								</ul>
							</li>

							   <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li class="add-menu-left">
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
									</li>
								</ul>
							</li>
							  <li><a href="<?php echo $ayarlar["strURL"]; ?>/haberler">Haberler</a> </li>
							  <li><a href="<?php echo $ayarlar["strURL"]; ?>/uretim">Üretim </a> </li>
							 <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim </a> </li>
							 </ul>
						<div class="nav-social-link">
							<a href="https://www.facebook.com/<?php echo $ayarlar["strFacebook"]; ?>"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/<?php echo $ayarlar["strInstagram"]; ?>"><i class="fa fa-instagram"></i></a>
							<a href="https://api.whatsapp.com/send/?phone=905466367027&text=Merhaba,%20Bir%20sorum%20vard%C4%B1?"><i class="fa fa-whatsapp"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->
