<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
 $tekil_veri_cek = $db->query("SELECT * FROM projeler WHERE proje_durum = 1 AND proje_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);
$categoryInfo = $db->query("SELECT * FROM kategoriler WHERE kategori_ust_id = {$tekil_veri_cek['kategori_id']} AND dil_id = '{$lang}'")->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
<title><?php echo $tekil_veri_cek["proje_baslik"]; ?> - Flexi Pack Turkey </title>
<?php include("css.php")?>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
<?php include("ust.php")?>
<div class="page-content bg-white">

  <div class="page-banner page-banner-sm">
      <div class="container">
          <div class="page-banner-entry">
              <h1 class="text-black"><?php echo $tekil_veri_cek["proje_baslik"]; ?> </h1>
    <div class="breadcrumb-row text-black">
      <ul class="list-inline">
        <li><a href="<?php echo $ayarlar["strURL"]; ?>"><i class="fa fa-home"></i> Anasayfa</a></li>
        <li><a href="#">Ürünlerimiz</a></li>
        <li><?php echo $tekil_veri_cek["proje_baslik"]; ?> </li>
      </ul>
    </div>
   </div>
      </div>
</div>

	<div class="content-block" id="content-area">
		<div class="section-area section-sp1 bg-gray">
			<div class="container">
				<div class="row product-info">
					<div class="col-lg-6 col-md-6 col-sm-12 m-b30 wow fadeInUp" data-wow-delay="0.4s">
						<div class="product-img">
							<div class="product-gallery on-show-slider">
								<div id="item-view" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
									<div class="item">
										<img class="demo" src="<?php echo $ayarlar["strURL"]; ?>/uploads/projects/<?php echo $tekil_veri_cek["proje_resim"]; ?>" alt="<?php echo $tekil_veri_cek["proje_baslik"]; ?>">
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.8s">
						<div class="product-full-info sticky-top">
							<h4 class="product-title"><?php echo $tekil_veri_cek["proje_baslik"]; ?></h4>
							<div class="tagged_as meta-item">
									<ul class="item-review text-yellow-light">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
 									</ul>
								</div>
							<div class="ttr-divider bg-gray"></div>

							<div class="product-dec">
							<?php echo $tekil_veri_cek["proje_description"]; ?>
							</div>

						</div>
					</div>
				</div>
				<div class="row wow fadeIn" data-wow-delay="0.4s">
					<div class="col-md-12">
						<div class="ttr-tabs product-description tabs-site-button">
							<ul class="nav nav-tabs ">
								<li><a data-toggle="tab" href="#description" class="active show">Açıklama</a></li>
 							</ul>
							<div class="tab-content">
								<div id="description" class="tab-pane active">
									<?php echo $tekil_veri_cek["proje_aciklama"]; ?>
									</div>
							 </div>
						</div>
					</div>
				</div>
				 </div>
		</div>
	</div></div>
	<!-- contact area END -->
</div>
<?php include("alt.php")?>
<style>
table td {
    padding: 15px 10px;
    border: 1px solid black;
}
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
$(document).ready(function() {

var sync1 = $("#item-view");
var sync2 = $("#item-list");
var slidesPerPage = 4; //globaly define number of elements per page
var syncedSecondary = true;

  sync1.owlCarousel({
	items : 1,
	slideSpeed : 2000,
	nav: true,
	autoplay: false,
	dots: false,
	loop: true,
	responsiveRefreshRate : 200,
	navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2.on('initialized.owl.carousel', function () {
	  sync2.find(".owl-item").eq(0).addClass("current");
	}).owlCarousel({
	items : slidesPerPage,
	dots: false,
	nav: false,
	margin:5,
	smartSpeed: 200,
	slideSpeed : 500,
	slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
	responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

function syncPosition(el) {
//if you set loop to false, you have to restore this next line
//var current = el.item.index;

//if you disable loop you have to comment this block
var count = el.item.count-1;
var current = Math.round(el.item.index - (el.item.count/2) - .5);

if(current < 0) {
  current = count;
}
if(current > count) {
  current = 0;
}

//end block

sync2
  .find(".owl-item")
  .removeClass("current")
  .eq(current)
  .addClass("current");
var onscreen = sync2.find('.owl-item.active').length - 1;
var start = sync2.find('.owl-item.active').first().index();
var end = sync2.find('.owl-item.active').last().index();

if (current > end) {
  sync2.data('owl.carousel').to(current, 100, true);
}
if (current < start) {
  sync2.data('owl.carousel').to(current - onscreen, 100, true);
}
}

function syncPosition2(el) {
if(syncedSecondary) {
  var number = el.item.index;
  sync1.data('owl.carousel').to(number, 100, true);
}
}

sync2.on("click", ".owl-item", function(e){
	e.preventDefault();
	var number = $(this).index();
	//sync1.data('owl.carousel').to(number, 300, true);

	sync1.data('owl.carousel').to(number, 300, true);

});
});

</script>
</body>
</html>
