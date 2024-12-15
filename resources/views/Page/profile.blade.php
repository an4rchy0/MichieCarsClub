<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Hello Admin!</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs@1.5.0/dist/purecounter_vanilla.min.js"></script>
    <!-- Font Awesome Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->  
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
	<!--===============================================================================================-->  
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->  
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<!--===============================================================================================-->
    <style>
        .navbar-nav .nav-link {
            color: #FFFFFF;
        }
        .navbar-nav .nav-link:hover {
            background-color:rgb(221, 207, 10); 
        }
        .d-flex.flex-column a {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>
<body class="font-roboto bg-gray-100">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #A54E06; padding:1%;">
    <div class="container">
        <div class="d-flex align-items-center"data-aos="fade-up" data-aos-delay="100">
            <img alt="Logo" class="mr-3" height="40" src="{{ asset('images/logo.png') }}" width="40" style="margin-right:10px" data-aos="fade-up" data-aos-delay="200"/>
            <a class="navbar-brand" href="/" style="font-weight: bold; color: #FFFFFF;" data-aos="fade-up" data-aos-delay="300">KuBertelur</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item" data-aos="fade-up" data-aos-delay="100">
                    <a class="nav-link" href="/" style="color: #FFFFFF;">Home</a>
                </li>
            </ul>
            <div class="d-flex align-items-center space-x-4">
                <!--<input class="form-control rounded-full text-black" placeholder="Apa yang kamu cari?" type="text" style="margin-right:10px;"/>-->
                <div class="d-flex align-items-center space-x-2">
                    <img data-aos="fade-up" data-aos-delay="600" src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                    <span data-aos="fade-up" data-aos-delay="700" style="color:white; margin-right:20px;"> <span style="margin-right:10px;">IDN | </span> 
                    <!-- Tautan Logout -->
                    <a href="#" style="color:inherit; text-decoration:none;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i> Logout
                    </a>
                    <!-- Form Logout Tersembunyi -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="p-0 mb-1 bg-body-tertiary rounded-3">
    <div class="container-fluid py-10" data-aos="fade-up" data-aos-delay="100" style="background-image: url({{ asset('images/ban-1.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center; padding:5% 20%; color:white"> <!-- 688px; width:1107px -->
        <div class="row" style="display-5">
            <div class="col-md-6">
                <h1 data-aos="fade-up" data-aos-delay="2000">Admin : {{ $user->nama }}</h1>
                <p style="font-size:18px; margin-top:20px;">
                    <a data-aos="fade-up" data-aos-delay="2500" href="#trans" style="text-decoration: none; color: inherit;">
                        <span style="margin-right:5px; background-color: rgba(243, 243, 242, 0.5); padding:10px 60px; border-radius:25px;">  Transaction</span>
                    </a><br><br>
                    <a data-aos="fade-up" data-aos-delay="2800" href="#pdc" style="text-decoration: none; color: inherit;">
                        <span style="margin-right:15px; background-color: rgba(243, 243, 242, 0.5); padding:10px 30px; border-radius:18px;">Catalog</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row" style="margin-top:6%;" data-aos="fade-up" data-aos-delay="100" id=trans>
            <h4>  Transaction : </h4><hr>
            @if ($transactions->isEmpty())
                <div class="row">
                    <div class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Uppss.. No transaction now!
                    </div>
                </div>
            @else
                @foreach ($transactions as $transaction)
                <div class="card mb-3" style="max-width: 540px; margin-right: 20px;" data-aos="fade-up" data-aos-delay="300">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/photo/' . $transaction->prdpht) }}" class="img-fluid rounded-start w-100 h-100" style="object-fit: cover;" alt="Product Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $transaction->prdname }}</h5>
                                <p class="card-text">
                                    Jumlah: {{ $transaction->qty }}<br>
                                    Total Harga: Rp {{ number_format($transaction->total, 2, ',', '.') }}<br>
                                    Alamat: {{ $transaction->alamat }}
                                </p>
                                <p class="card-text"><small class="text-body-secondary">Pembeli: {{ $transaction->nama_user }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                <div class="d-flex justify-content-center" style="margin-top:2%;">
                    {{ $transactions->links('pagination::bootstrap-4') }}
                </div>
            @endif
        </div>
        <div class="row d-flex" style="margin-top:6%; margin-bottom:6%; margin-bottom:50px;" id=pdc>
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start" data-aos="fade-up" data-aos-delay="200"><h5>Our product</h5></div>
                <div class="col-md-6 d-flex justify-content-md-end" data-aos="fade-up" data-aos-delay="300"><div class="alert alert-success" role="alert"><a href="{{ route('addc', ['userId' => $user->IDAdmin]) }}" style="text-decoration:none; color:inherit;">Add Catalog +</a></div></div><hr></div>
            @if ($pdc->isEmpty())
                <div class="row">
                    <div data-aos="fade-up" data-aos-delay="400" class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Uppss.. No products added yet!
                    </div>
                </div>
            @else
                <div class="row d-flex justify-content-center align-items-center">
                @foreach ($pdc as $pd)
                    <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                        <div class="card" style="width: 300px;">
                            <img data-aos="fade-up" data-aos-delay="400" src="{{asset('storage/photo/'.$pd->prdpht)}}" class="card-img-top img-responsive margin" alt="Product" style="width : 300px; height: 223px;">
                            <div data-aos="fade-up" data-aos-delay="500" class="card-body">
                                <h5 class="card-title" style="padding-top:2% 0;"><a style="text-decoration: none; color:inherit;" href="{{ route('pd.show', [$pd->idproduct, $user->idusr_kbt]) }}">{{$pd->prdname}}</a></h5>
                                <p class="card-text" style="text-align: justify;">Harga: {{ $pd->prdprice }} <br><div style="margin-top:1px;">{{ \App\Helpers\StringHelper::limitWords($pd->prddescript, 15) }} ...</div> </p>
                                <p class="card-text"><small class="text-body-secondary">Stok : {{ $pd->prdqty }}</small></p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('pd.up', ['id' => $pd->idproduct]) }}"><i class="fa fa-edit" style="font-size: 20px; margin-right: 10px;"></i></a>
                                <a href="#" data-toggle="modal" data-target="#deleteModal{{$pd->idproduct}}"><i class="fa fa-trash" style="font-size: 20px;"></i></a>
                                <div class="modal fade" id="deleteModal{{$pd->idproduct}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$pd->idproduct}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{$pd->idproduct}}">Konfirmasi Hapus</h5>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus produk ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <a href="{{ route('pd.del', ['id' => $pd->idproduct]) }}" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div data-aos="fade-up" data-aos-delay="100" class="d-flex justify-content-center" style="margin-top:2%;">
                        {{ $pdc->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Daily
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Sport
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Electric
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
                    Campus B Telkom University Jakarta is located on Halimun Raya Street No.2, RT.15/RW.6, Guntur, Setiabudi District, South Jakarta City, Special Capital Region of Jakarta 12980.
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="michieCarsClub@idn.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Michie Cars Club 
		            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
</footer>

<script>
    AOS.init();
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min; 
    } 
    document.addEventListener('DOMContentLoaded', function() {
        var counters = document.querySelectorAll('.purecounter');
        counters.forEach(function(counter) {
            var randomEndValue = getRandomInt(0, 100);
            counter.setAttribute('data-purecounter-end', randomEndValue); 
        });
        new PureCounter(); 
    });
</script>
</body>
</html>
