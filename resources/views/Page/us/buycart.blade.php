<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping Cart</title>
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<style>
		th{text-align:center;}
		td{
			text-align:center;
			align-items:center;
			padding:1%;
		}
	</style>
	<script>
		function formatRupiah(angka, prefix) {
			var numberString = angka.replace(/[^,\d]/g, '').toString(),
			split = numberString.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

			if (ribuan) {
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
		}
		function parseRupiah(rupiah) { 
			return parseInt(rupiah.replace(/[^0-9,-]+/g, "").replace(',', '.')); 
		}
		document.addEventListener('DOMContentLoaded', (event) => { 
			document.getElementById('address').addEventListener('input', function() {
				var sendDisplay = document.getElementById('send-display'); 
				var sendDisplay1 = document.getElementById('t1');
				var sendDisplay3 = document.getElementById('t3');
				var sendDisplay4 = document.getElementById('t4');
				var sendInput = document.getElementById('send');
				var randomValue = Math.floor(Math.random() * (3000000 - 1000000 + 1)) + 1000000;
				sendDisplay.value = formatRupiah(randomValue.toString(), 'Rp');
				sendInput.value = randomValue;
				var t1Value = parseRupiah(sendDisplay1.innerText); 
				var totalValue = randomValue + t1Value; 
				sendDisplay3.innerText = formatRupiah(totalValue.toString(), 'Rp');
				sendDisplay4.innerText = formatRupiah(totalValue.toString(), 'Rp');
			});
			const form = document.querySelector('form'); 
            const modal = new bootstrap.Modal(document.getElementById('exampleModalToggle')); 
            const cancelButton = document.getElementById('cancelButton');
            form.addEventListener('submit', (e) => { 
                e.preventDefault(); 
                if (form.checkValidity()) { 
                    modal.show();    
                        setTimeout(() => { 
                        form.submit();
                    }, 10000); 
                } else { 
                    form.reportValidity(); 
                } 
            });
            cancelButton.addEventListener('click', () => { 
                modal.hide(); 
            });
		});
	</script>
</head>
<body class="">
	<audio autoplay loop id="bgMusic">
		<source src="{{ asset('images/banM/m.mp3') }}" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/profileus" class="stext-109 cl8 hov-cl1 trans-04">Home<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i></a>
			<span class="stext-109 cl4">Payment</span>
		</div>
	</div>

	@foreach($content as $p)
	<!-- Shoping Cart -->
	<form action="/mpay" method="post" class="bg0 p-t-75 p-b-85" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-2">Product</th>
									<th class="column-2">Name</th>
									<th class="column-2">Price</th>
								</tr>
								<tr class="table_row">
									<td class="column-3"><img src="{{asset('storage/photo/'.$p->prdpht)}}" style="width:150px;" alt="IMG"></td>
									<td class="column-2">{{$p->name}}</td>
									<td class="column-3" id="t1">Rp{{ number_format($p->price, 2, ',', '.') }}</td>
								</tr>
								<tr class="table_row">
									<td colspan="3" style="text-align:left;">
										<fieldset>
											{{csrf_field()}}
											<div class="form-group">
												<input type="text" class="form-control" name="pdcid" value="{{ $p->IDCar }}" hidden>
											</div>
											<div class="form-group">
												Address : <textarea type="text" name="address" id="address" class="form-control" placeholder="Destination Address" style="height: 100px;" required></textarea>
											</div>
											<div class="form-group">
											Service & Application Fee <input type="text" class="form-control" id="send-display" placeholder="Service & Application Fee" disabled>
												<input type="hidden" class="form-control" name="send" id="send" placeholder="Service & Application Fee">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" name="total" id="total" required="required" placeholder="Total" style="background-color: #E7E9E7;" readonly hidden>
											</div>
											<div class="form-group form-inline"> 
												<input type="text" class="form-control" name="usid" required="required" placeholder="user" style="margin-right: 10px;" value="{{ $userString }}" hidden>
											</div>
										</fieldset>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>

				<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1"> 
                    <div class="modal-dialog modal-dialog-centered"> 
                        <div class="modal-content"> 
                            <div class="modal-header text-center"> 
        	                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Here is your payment</h1> 
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                             </div> 
                            <div class="modal-body text-center justify-content-center"> <img class="img-fluid" src="{{ asset('images/banM/barQ.png') }}" alt="bar" style="width: 40%; padding: 10px; align-content: center;"></div> 
                            <div class="modal-footer justify-content-center"> 
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelButton">Cancel Payment</button> 
                            </div> 
                        </div> 
                    </div> 
                </div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">About</h4>
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">Subtotal:</span>
							</div>
							<div class="size-209">
								<span class="mtext-110 cl2" id="t3"></span>
							</div>
						</div>
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<span class="stext-110 cl2">Shipping:</span>
							<p class="stext-111 cl6 p-t-2">{{$p->descr}}</p>
						</div>
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">Total:</span>
							</div>
							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2" id="t4"></span>
							</div>
						</div>
						@if ($p->prdqty > 0)
							<input type="submit" value="Beli Sekarang" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						@else
							<input type="submit" value="Not Avaible!" class="flex-c-m stext-101 cl0 size-116 bor14 p-lr-15 trans-04 pointer" style="background-color:red;" disabled>
						@endif
					</div>
				</div>
			</div>
		</div>
	</form>
	@endforeach

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
					<form>
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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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