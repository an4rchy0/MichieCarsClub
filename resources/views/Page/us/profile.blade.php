<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->  
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--===============================================================================================-->
</head>
<body class="animsition">
	<audio autoplay loop id="bgMusic">
		<source src="{{ asset('images/banM/m2.mp3') }}" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>

	<!-- Header -->
	<header>
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					<a href="#" class="logo"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
					<div class="menu-desktop">
						<ul class="main-menu" style="font-weight: bold;">
							<li class="active-menu"><a href="/">Home</a></li>
							<li><a href="#prd" style="text-decoration:none;">Shop</a></li>
							<li><a href="#blog" style="text-decoration:none;">Event</a></li>
							<li><a href="#footer" style="text-decoration:none;">About</a></li>
							<li><a href="#footer" style="text-decoration:none;">Contact</a></li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<img data-aos="fade-up" data-aos-delay="600" src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
						<span data-aos="fade-up" data-aos-delay="700" style="color:inherit; margin-right:20px;"> <span style="margin-right:10px;"> <b>IDN | </b></span> 
						<button type="button" class="btn position-relative" style="background-color:#FFD017">
							<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration:none; color:#ffff; padding:1%;">
								<i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i> Logout
							</a>
							<!-- Form Logout Tersembunyi -->
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
                    	</button>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">	
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<img data-aos="fade-up" data-aos-delay="600" src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
				<span data-aos="fade-up" data-aos-delay="700" style="color:inherit; margin-right:20px;"> <span style="margin-right:10px;"> <b>IDN | </b></span> 
				<button type="button" class="btn position-relative" style="background-color:#FFD017">
					<a data-aos="fade-up" data-aos-delay="800" href="/profile"><i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i></a></span>
            	</button>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li class="active-menu"><a href="/">Home</a></li>
				<li><a href="#prd" style="text-decoration:none;">Shop</a></li>
				<li><a href="#blog" style="text-decoration:none;">Event</a></li>
				<li><a href="#footer" style="text-decoration:none;">About</a></li>
				<li><a href="#footer" style="text-decoration:none;">Contact</a></li>
			</ul>
		</div>
	</header>

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slide1.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="font-weight: bold;">Daily Sport Collection</span>
							</div>
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="font-weight: bold;">THE NEW GENERATION</h2>
							</div>	
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#EDBF0E">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slick1" style="background-image: url(images/slide2.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="font-weight: bold;">Sport Collection</span>
							</div>
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="font-weight: bold;">NEW GENERATION</h2>
							</div>
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#EDBF0E">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slick1" style="background-image: url(images/slide3.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="font-weight: bold;">Electric Collection</span>
							</div>
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1" style="font-weight: bold;">NEW GENERATION</h2>
							</div>
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" style="background-color:#EDBF0E">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<div class="block1 wrap-pic-w">
						<img src="images/block1.jpg" alt="IMG-BANNER">
						<span class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">Daily</span>
								<span class="block1-info stext-102 trans-04">Every Day</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">Shop Now</div>
							</div>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<div class="block1 wrap-pic-w">
						<img src="images/block2.jpg" alt="IMG-BANNER">
						<span class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">Sport</span>
								<span class="block1-info stext-102 trans-04">Race</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">Shop Now</div>
							</div>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<div class="block1 wrap-pic-w">
						<img src="images/block3.jpg" alt="IMG-BANNER">
						<span class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">Electric</span>
								<span class="block1-info stext-102 trans-04">New Trend</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">Shop Now</div>
							</div>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product -->
	<section class="sec-product bg0 p-t-100 p-b-50" id="prd">
		<div class="container">
			<div class="p-b-32">
				<h3 class="ltext-105 cl5 txt-center respon1">Your Cars is your own</h3>
			</div>
			<div class="tab01">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item p-b-10"><a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Product</a></li>
					<li class="nav-item p-b-10"><a class="nav-link" data-toggle="tab" href="#featured" role="tab">My Garage</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-50">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
								@foreach($pdc as $p)
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="{{asset('storage/photo/'.$p->prdpht)}}" alt="IMG-PRODUCT">
											<a href="{{ route('pd.show', [$p->IDCar, $userString]) }}" style="text-decoration:none; color:inherit;" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">Quick View</a></h5>
										</div>
										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a style="text-decoration: none; color:inherit;" href="{{ route('pd.show', [$p->IDCar, $userString]) }}">{{$p->name}}</a>
												<span class="stext-105 cl3">Price: Rp{{ number_format($p->price, 2, ',', '.') }}</span>
											</div>
											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
													<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
													<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
												</a>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<!-- Slide2 -->
						<div class="wrap-slick2">
							<div class="slick2">
							@if ($transactions->isEmpty())
								<div class="row">
									<div data-aos="fade-up" data-aos-delay="400" class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
										Nothing product added here
									</div>
								</div>
							@else
								@foreach($transactions as $p)
								<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											<img src="{{asset('storage/photo/'.$p->prdpht)}}" alt="IMG-PRODUCT">
											<a href="{{ route('pd.show', [$p->produk, $userString]) }}" style="text-decoration:none; color:inherit;" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">Quick View</a></h5>
										</div>
										<div class="block2-txt flex-w flex-t p-t-14">
											<div class="block2-txt-child1 flex-col-l ">
												<a style="text-decoration: none; color:inherit;" href="{{ route('pd.show', [$p->produk, $userString]) }}">{{$p->name}}</a>
												<p>Address &nbsp &nbsp : {{$p->address}}</p>
												<span class="stext-105 cl3">Total Price &nbsp : Rp{{ number_format($p->total_harga, 2, ',', '.') }} <br> Date &nbsp : {{$p->tanggal}}</span>
											</div>
											<div class="block2-txt-child2 flex-r p-t-3">
												<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
													<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
													<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
												</a>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							@endif
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90" id="blog">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Event
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<img src="images/blog1.jpg" alt="IMG-BLOG">
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl5">Cars' Club</span>
								</span>
								<span>
									<span class="cl4">on</span>
									<span class="cl5">July 22, 2025 </span>
								</span>
							</div>
							<h4 class="p-b-12">Best Community</h4>
							<p class="stext-108 cl6">
							Bergabunglah dengan komunitas pecinta otomotif di Car'sclub. Temukan teman baru, berbagi cerita, dan tunjukkan mobil kebanggaan Anda!.
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<img src="images/blog2.jpg" alt="IMG-BLOG">
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl5">Modification</span>
								</span>
								<span>
									<span class="cl4">on</span>
									<span class="cl5">July 18, 2025</span>
								</span>
							</div>

							<h4 class="p-b-12">
								Best of Three Cars Modification
							</h4>

							<p class="stext-108 cl6">
							Unjuk kreativitas Anda di  Kompetisi modifikasi mobil terbesar dengan hadiah menarik menanti Anda.
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-b-40">
					<div class="blog-item">
						<div class="hov-img0">
							<img src="images/blog3.jpg" alt="IMG-BLOG">
						</div>

						<div class="p-t-15">
							<div class="stext-107 flex-w p-b-14">
								<span class="m-r-3">
									<span class="cl5">Motion Ime</span>
								</span>
								<span>
									<span class="cl4">on</span>
									<span class="cl5">July 2, 2025</span>
								</span>
							</div>

							<h4 class="p-b-12">Cars Festival</h4>

							<p class="stext-108 cl6">
							Jelajahi dunia otomotif terkini di Carvolution Fest! Temukan teknologi mutakhir, desain futuristik, dan inovasi terbaru dari berbagai merek mobil ternama.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">Categories</h4>
					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">Daily</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">Sport</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">Electric</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">GET IN TOUCH</h4>
					<p class="stext-107 cl7 size-201">Jl. Halimun Raya No.11 8, RT.8/RW.2 12980 Daerah Khusus Ibukota Jakarta Indonesia</p>
					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa-brands fa-instagram"></i></a>
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa-brands fa-twitter"></i></a>
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa-brands fa-youtube"></i></a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">Newsletter</h4>
					<form id="footer">
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="pals@mail.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04" style="background-color:#FFD017;">Email</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<center>
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1"><img src="images/icons/OIP.jpg" style="width:30%;" alt="ICON-PAY"></a>
				</div>
				</center>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> MichieCars Club
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>