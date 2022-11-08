<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>菓洞甜點工作室首頁</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,regular,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC:100,300,regular,500,700,900" rel="stylesheet" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
		integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
		crossorigin='anonymous' />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="icon" type="image/x-icon" href="./img/logo-bg-white.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<!--分頁圖片ICON-->
	<script src="./js/loading.js"></script>
	<link rel="stylesheet" href="./css/loading.css">
	<link rel="stylesheet" href="./css/toTop.css">
	<link rel="stylesheet" href="{{ asset('/css/index.css')}}">
	<link rel="stylesheet" href="./css/banner-swiper.css">
</head>

<body>
	<!-- Messenger 洽談外掛程式 Code -->
	<div id="fb-root"></div>

	<!-- Your 洽談外掛程式 code -->
	<div id="fb-customer-chat" class="fb-customerchat">
	</div>

	<script>
		var chatbox = document.getElementById('fb-customer-chat');
		chatbox.setAttribute("page_id", "2015504092014554");
		chatbox.setAttribute("attribution", "biz_inbox");
	</script>

	<!-- Your SDK code -->
	<script>
		window.fbAsyncInit = function () {
			FB.init({
				xfbml: true,
				version: 'v15.0'
			});
		};

		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<header class="nav-bar">
		<nav>
			<a href="{{ route('index') }}">
				<div id="nav-logo" class="nav-logo"></div>
			</a>
			<div class="nav-btns">
				<a href="{{ route('news') }}" class="nav-style nav-btn1">活動快訊</a>
				<a href="{{ route('product') }}" class="nav-style nav-btn2">產品介紹</a>
				<a href="{{ route('about_us') }}" class="nav-style nav-btn3">品牌故事</a>
			</div>
			<div class="social-media-area">
				<a href="https://www.facebook.com/dessertcave0725/" target="_blank" id="facebook" class="social-style"></a>
				<a href="https://www.instagram.com/dessertcave_taichung/?utm_medium=copy_link" target="_blank" id="instagram"
					class="social-style"></a>
			</div>
		</nav>
		<input id="ham_icon" type="checkbox" hidden>
		<label for="ham_icon" class="ham-icon">
			<?xml version="1.0" encoding="utf-8"?>
			<!-- Generator: Adobe Illustrator 25.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
			<svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
				y="0px" viewBox="0 0 170.1 170.1" style="enable-background:new 0 0 170.1 170.1;" xml:space="preserve">
				<g>
					<g>
						<line class="st0" x1="36.9" y1="44.3" x2="133.2" y2="44.3" />
						<line class="st0" x1="36.9" y1="86" x2="133.2" y2="86" />
						<line class="st0" x1="85" y1="127.8" x2="133.2" y2="127.8" />
					</g>
				</g>
				<rect x="260.2" y="-26.9" class="st1" width="41.1" height="41.1" />
			</svg>
		</label>
		<div id="toggle_menu">
			<div class="wrap">
				<div class="toggle-menu-content">
					<a href="{{ route('index') }}">
						<img src="./img/logo-bg-white.png" alt="">
					</a>
					<div class="nav-links">
						<a href="{{ route('news') }}">活動快訊</a>
						<a href="{{ route('product') }}">產品介紹</a>
						<a href="{{ route('about_us') }}">品牌故事</a>
					</div>
					<div class="follow-us">Follow us</div>
					<div class="ssn">
						<i class="facebook fa-brands fa-facebook"></i>
						<i class="instagram fa-brands fa-instagram"></i>
					</div>
				</div>
				<label for="ham_icon" class="close-icon">
					<i class="fa-solid fa-xmark"></i>
				</label>
			</div>
		</div>

		<div class="pagination">
			<div class="content">
				<a href="#showcase" class="page">熱門產品</a>
				<a href="#new" class="page">新品上市</a>
				<a href="#new" class="page">系列產品</a>
				<a href="#footer" class="page">聯絡我們</a>
			</div>
		</div>
	</header>

	<main>
		<div id="banner" class="banner">
			<div class="carousel">
				<button class="carousel__button carousel__button--left is-hidden">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				</button>
				<div class="carousel__track-container">
					<ul class="carousel__track">
						<li class="carousel__slide current-slide">
							<img class="carousel__image_pc" src="{{ $banner->banner_img1_pc }}" alt="">
							<img class="carousel__image_phone" src="{{ $banner->banner_img1_phone }}" alt="手機">
						</li>
						<li class="carousel__slide">
							<img class="carousel__image_pc" src="{{ $banner->banner_img2_pc }}" alt="">
							<img class="carousel__image_phone" src="{{ $banner->banner_img2_phone }}" alt="">
						</li>
					</ul>
				</div>
				<button class="carousel__button carousel__button--right">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</button>

				<div class="carousel__nav">
					<button class="carousel__indicator current-slide"></button>
					<button class="carousel__indicator"></button>
				</div>
			</div>
		</div>
		<div id="showcase" class="product-showcase">

			<div class="see-through1 see-through-style">
				<div class="mask"></div>
				<img src="./img/index/lemon-hover.png" alt="">
			</div>
			<div class="see-through2 see-through-style">
				<div class="mask"></div>
				<img src="./img/index/Marshmallow-hover.png" alt="">
			</div>
			<div class="see-through3 see-through-style">
				<div class="mask"></div>
				<img src="./img/index/pie-hover.png" alt="">
			</div>

			<svg class="dash-line dash-line1">
				<line x1="15" y1="2" x2="100" y2="40" stroke="#aaa" stroke-width="2" stroke-dasharray="5">
			</svg>
			<svg class="dash-line dash-line2">
				<line x1="0" y1="80" x2="140" y2="7" stroke="#aaa" stroke-width="2" stroke-dasharray="5">
			</svg>
			<svg class="dash-line dash-line3">
				<line x1="0" y1="0" x2="80" y2="50" stroke="#aaa" stroke-width="2" stroke-dasharray="5">
			</svg>

			<div class="profile">
				<img src="./img/index/lemon-slice.png" alt="">
			</div>
			<div class="description">
				<div class="title">
					<div class="bg">熱門產品</div>
					<div class="text">
						義式奶油檸檬塔
					</div>
					<p>
						嚴選屏東有機檸檬與法國愛樂薇奶油製作檸檬餡搭配軟綿義士蛋白霜與酥脆塔皮，酸甜度適中，檸檬香氣重！
					</p>
				</div>

			</div>
			<div class="rotate-img"></div>

		</div>


		<div id="new" class="new-product">
			<img class="new-product-img-pc" src="{{ $new_product->product_img_pc }}" alt="New Product">
			<img class="new-product-img-phone" src="{{ $new_product->product_img_phone }}" alt="New Product">
			<div class="text">
				<div class="title">
					<div class="inner-text">
						{{ $new_product->product_title}}
					</div>	
					<div class="bg">新品上市</div>
				</div>
				<p>
					{!!$new_product->product_content !!}
				</p>
				<button><a class="more-info" href="{{ $new_product->product_uri}}" target="_blank">了解更多
						...</a></button>
			</div>
		</div>
		<div id="series" class="product-series">
			<div class="marquee-area">
				<div class="marquee-text">PRODUCT.</div>
			</div>
			<div class="swiper-area">
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="swiper-product-img"><img src="./img/index/fruit-1.png" alt="">
							</div>
							<div class="swiper-product-name">菓洞鮮果系列</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-product-img"><img src="./img/index/nut-2.png" alt="">
							</div>
							<div class="swiper-product-name">綜合堅果系列</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-product-img"><img src="./img/index/matcha-3.png" alt="">
							</div>
							<div class="swiper-product-name">濃郁抹茶系列</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-product-img">
								<img src="./img/index/chocolate-4.png" alt="">
								<a href="./product.html" class="more-product">查看更多</a>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>
		<a href="#" id="back_to_top">
			<i class="fa-solid fa-angle-up"></i>
		</a>
	</main>



	<footer id="footer">
		<div class="footer-box">
			<div class="information">
				<ul class="information_box">
					<li class="footer-title"><img src="./img/logo-white.png" alt=""></li>
					<ul class="text">
						<li class="open-time">
							<i class="fa-regular fa-clock"></i>營業時間：14:00~19:00 / 週二公休
						</li>
						<li class="phone">
							<i class="fa-solid fa-phone"></i>
							連絡電話：(09)58-792-622
						</li>
						<li class="address">
							<span><i class="fa-solid fa-location-dot"></i>
								地址：</span> 406台中市北屯區中清路二段675號
						</li>
						<li>
							<i class="fa-solid fa-location-dot"></i>
							<a href="https://goo.gl/maps/UedJ8vudftVtVXbB7">google map</a>
						</li>
					</ul>
				</ul>
			</div>
			<div class="map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.6289181786256!2d120.66221005079632!3d24.184743577884394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346917ccaa821ba1%3A0x9b258333d403eedb!2z6I-T5rSe55Sc6bue5bel5L2c5a6kLeazleW8j-WhlOmhnuOAgeS5s-mFquibi-ezleWkluW4tuW6lw!5e0!3m2!1szh-TW!2stw!4v1666022627521!5m2!1szh-TW!2stw"
					allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="copy-right">
			Copyright © 2022 菓洞甜點工作室 | 網站設計 ˙ 80 Sprint
		</div>
	</footer>

	<div id="loading">
		<img id="img_bg" src="./img/index/loading_bg.png" alt="" class="">
		<img id="img_logo_done" src="./img/index/logo-green.png" alt="" class="">
	</div>

	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,
			spaceBetween: 114,
			centeredSlides: true,
			width: 289,
			pagination: {
				el: ".swiper-pagination",
				dynamicBullets: true,
			},
		});

	</script>
	<script src="./js/common.js"></script>
	<script src="./js/banner-swiper.js"></script>
</body>

</html>