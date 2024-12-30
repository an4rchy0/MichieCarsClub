<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Page</title>
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
	</head>
<body>
<div class="container-fluid">
    <div class="row">
    	<!-- Sidebar -->
      	<nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar text-white">
        	<div class="d-flex flex-column p-3">
        		<h2 class="text-center text-light mb-4">Car Admin Panel</h2>
        		<ul class="nav flex-column mb-auto">
    				<li class="nav-item">
						<a href="#dashboard" class="nav-link text-white active"><i class="fas fa-home"></i> Dashboard</a>
        			</li>
            		<li class="nav-item">
            			<a href="#manage-cars" class="nav-link text-white"><i class="fas fa-car"></i> Manage Cars</a>
            		</li>
        			<li class="nav-item">
						<a href="#manage-users" class="nav-link text-white"><i class="fas fa-users"></i> Manage Users</a>
            		</li>
                    <li class="nav-item">
						<a href="#sales-report" class="nav-link text-white"><i class="fas fa-chart-line"></i> Sales Report</a>
					</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration:none; color:inherit;">
                            <i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i> Logout
                        </a>
                    </li>	
                    <!-- Form Logout Tersembunyi -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>		
        		</ul>
        	</div>
      	</nav>

		<!-- Main Content -->
		<main class="col-md-9 col-lg-10 ms-sm-auto px-md-4 py-4">
			<div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-3">
				<h1>Car Management Dashboard</h1>
			</div>

			<!-- Dashboard Section -->
		    <section id="dashboard" class="mb-5">
			    <div class="row">
					<div class="col-md-4">
						<div class="card shadow text-center">
							<div class="card-body">
								<h5>Total Cars</h5>
								<h2>{{ $totalCar }}</h2>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card shadow text-center">
							<div class="card-body">
                                <h5>Total Users</h5>
                                <h2>{{ $totalUsers }}</h2>
							</div>
						</div>
					</div>
					<div class="col-md-4">
                        <div class="card shadow text-center">
                            <div class="card-body">
                                <h5>Profit</h5>
                                <h2>Rp{{ number_format($profit, 2, ',', '.') }}</h2>
                            </div>
                        </div>
					</div>
				</div>
			</section>

			<!-- Manage Cars -->
            <section id="manage-cars" class="mb-5">
                <h2 class="mb-4">Manage Cars</h2>
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">Car List</div>
                        @if ($pdc->isEmpty())
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#addModal{{$user->IDAdmin}}" style="padding:1%; margin: 2% 0; border:1px solid; text-decoration:none; width:25%; text-align:center">Add Product (+)</a>
                                <div class="modal fade" id="addModal{{$user->IDAdmin}}" tabindex="-1" role="dialog" aria-labelledby="addModalLabel{{$user->IDAdmin}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addModalLabel{{$user->IDAdmin}}">Add Product</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row" style="padding:0% 3%;">
                                                    <?php 
                                                        if (!function_exists('generateid')) {
                                                            function generateid(){
                                                                $hari = date('l');
                                                                $tanggal = date('d');
                                                                $bulan = date('M');
                                                                $blnangka = date('m');
                                                                $tahun = date('y');
                                                                $jam = date('h');
                                                                $minute = date('i');
                                                                $detik = date('s');
                                                                $haricut = substr($hari,0,1);
                                                                $bulancut = substr($bulan,0,1);
                                                                $hourcut = substr($jam,0,1);
                                                                $minutecut = substr($minute,0,1);
                                                                $detikcut = substr($detik,0,1);
                                                                $kodejoin = "CAR-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
                                                                return $kodejoin;
                                                            }
                                                        }
                                                    ?>
                                                    <form action="/PrdStore" method="post" class="bg-body-tertiary rounded-3" style="padding:5% 0%; box-shadow: 0 4px 8px rgba(0.1, 0.1, 0.1, 0.2);" enctype="multipart/form-data">
                                                            <fieldset>
                                                                {{csrf_field()}}
                                                                <div class="row" style="padding:2%">
                                                                    <div class="col-md-6 d-flex flex-column" style="">
                                                                        <div class="form-group">
                                                                            Cars Name <input type="text" class="form-control" name="prdname" required="required">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            Product Price: <input type="number" class="form-control" name="prdprice" required="required">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            Upload Pict Here <input type="file" class="form-control" name="prdpht" id="photo" required="required">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="prdid" value="<?php echo generateid(); ?>" hidden>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group"> 
                                                                            Description: <textarea class="form-control w-100" name="prddescript" required="required" style="height: 100px;"></textarea><br> 
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="prdus" required="required" value="{{ $userId }}" hidden>
                                                                        </div>
                                                                        <input type="submit" value="Simpan Data" class="btn btn-primary form-control">
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-info d-flex justify-content-center align-items-center" role="alert" style="width:90%;">
                                        Uppss.. Nothing product added now!
                                </div>
                            </div>
                        @else
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-md-12 d-flex justify-content-center align-items-center">
                                    <a href="#" data-toggle="modal" data-target="#addModal{{$user->IDAdmin}}" style="padding:1%; margin: 2% 0; border:1px solid; text-decoration:none; width:25%; text-align:center">Add Product (+)</a>
                                    <div class="modal fade" id="addModal{{$user->IDAdmin}}" tabindex="-1" role="dialog" aria-labelledby="addModalLabel{{$user->IDAdmin}}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addModalLabel{{$user->IDAdmin}}">Add Product</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row" style="padding:0% 3%;">
                                                            <?php 
                                                                if (!function_exists('generateid')) {
                                                                    function generateid(){
                                                                        $hari = date('l');
                                                                        $tanggal = date('d');
                                                                        $bulan = date('M');
                                                                        $blnangka = date('m');
                                                                        $tahun = date('y');
                                                                        $jam = date('h');
                                                                        $minute = date('i');
                                                                        $detik = date('s');
                                                                        $haricut = substr($hari,0,1);
                                                                        $bulancut = substr($bulan,0,1);
                                                                        $hourcut = substr($jam,0,1);
                                                                        $minutecut = substr($minute,0,1);
                                                                        $detikcut = substr($detik,0,1);
                                                                        $kodejoin = "CAR-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
                                                                        return $kodejoin;
                                                                    }
                                                                }
                                                            ?>
                                                            <form action="/PrdStore" method="post" class="bg-body-tertiary rounded-3" style="padding:5% 0%; box-shadow: 0 4px 8px rgba(0.1, 0.1, 0.1, 0.2);" enctype="multipart/form-data">
                                                                <fieldset>
                                                                    {{csrf_field()}}
                                                                    <div class="row" style="padding:2%">
                                                                        <div class="col-md-6 d-flex flex-column" style="">
                                                                            <div class="form-group">
                                                                                Cars Name <input type="text" class="form-control" name="prdname" required="required">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                Product Price: <input type="number" class="form-control" name="prdprice" required="required">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                Upload Pict Here <input type="file" class="form-control" name="prdpht" id="photo" required="required">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="prdid" value="<?php echo generateid(); ?>" hidden>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group"> 
                                                                                Description: <textarea class="form-control w-100" name="prddescript" required="required" style="height: 100px;"></textarea><br> 
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="prdus" required="required" value="{{ $userId }}" hidden>
                                                                            </div>
                                                                            <input type="submit" value="Simpan Data" class="btn btn-primary form-control">
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($pdc as $pd)
                                    <div class="col-md-3 d-flex justify-content-center align-items-center" style="margin-top:0px;">
                                        <div class="card" style="width: 300px; padding;0%;">
                                            <img class="card-img-top img-responsive margin" src="{{asset('storage/photo/'.$pd->prdpht)}}" alt="Product" style="width : 100%; height: 223px; object-fit: cover;">
                                            <div data-aos="fade-up" data-aos-delay="500" class="card-body">
                                                <h5 class="card-title" style="padding-top:2% 0;"><a href="#" data-toggle="modal" data-target="#prevModal{{$pd->IDCar}}" style="text-decoration:none; color:inherit;">{{ \App\Helpers\StringHelper::limitWords($pd->name, 4) }}</a></h5>
                                                <p class="card-text" style="text-align: justify;">Price: Rp{{ number_format($pd->price, 2, ',', '.') }} <br><div style="margin-top:1px;">{{ \App\Helpers\StringHelper::limitWords($pd->descr, 9) }} ...</div> </p>
                                                <p class="card-text"><small class="text-body-secondary">Indonesia</small></p>
                                            </div>
                                            <div class="card-footer">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="prevModal{{$pd->IDCar}}" tabindex="-1" role="dialog" aria-labelledby="prevModalLabel{{$pd->IDCar}}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="prevModalLabel{{$pd->IDCar}}">Preview Produk</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row" style="padding:0% 3%;">
                                                        <div class="modal-body">
                                                            <div class="row" style="padding:0% 3%;">
                                                                <form action="{{ url('/upPD', $pd->IDCar)}}" method="post" class="bg-body-tertiary rounded-3" style="padding:5% 2%; box-shadow: 0 4px 8px rgba(0.1, 0.1, 0.1, 0.2);" enctype="multipart/form-data">
                                                                    <fieldset>
                                                                        {{csrf_field()}}
                                                                        <div class="row" style="padding:2%">
                                                                            <div class="col-md-6 d-flex flex-column" style="">
                                                                                <img src="{{asset('storage/photo/'.$pd->prdpht)}}" class="card-img-top img-responsive" alt="Product" style="width : 100%;">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <h2>Update Product Here!</h2><br>Cars Name <input type="text" class="form-control" name="prdname" required="required"  value="{{$pd->name}}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    Product Price: <input type="number" class="form-control" name="prdprice" required="required" value="{{$pd->price}}">
                                                                                </div>
                                                                                <div class="form-group"> 
                                                                                    Description: <textarea class="form-control w-100" name="prddescript" required="required" style="height: 150px;">{{ $pd->descr }}</textarea><br> 
                                                                                </div>
                                                                                <input type="submit" value="Save Data!" class="btn btn-primary form-control"><br><br>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                                <a href="#" data-toggle="modal" data-target="#deleteModal{{$pd->IDCar}}" style="padding:1%; margin: 2% 0; border:1px solid; text-decoration:none; width:100%; text-align:center; color: red;"><i class="fa fa-trash" style="font-size: 20px;"></i>&nbsp Delete</a>
                                                                <div class="modal fade" id="deleteModal{{$pd->IDCar}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$pd->IDCar}}" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="deleteModalLabel{{$pd->IDCar}}">Confirm to Delete</h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Are you sure to delete this item?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                                <a href="{{ route('pd.del', ['id' => $pd->IDCar]) }}" class="btn btn-danger">Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>     
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="d-flex justify-content-center" style="margin-top:2%;">
                                    {{ $pdc->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        @endif
                    </div>
            </section>

			<!-- Manage Users -->
			<section id="manage-users" class="mb-5">
                <h2 class="mb-4">Manage Users</h2>
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">User List</div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td>Jane Doe</td>
                            <td>jane.doe@example.com</td>
                            <td>User</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">Edit</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </td>
                            </tr>
                            <!-- Add more users -->
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
			</section>

            <!-- Manage Transactions -->
			<section id="manage-users" class="mb-5">
                <h2 class="mb-4">Manage Users</h2>
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">User List</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Product Photo</th>
                                        <th>Name</th>
                                        <th>Total</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $index => $p)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><img src="{{asset('storage/photo/'.$p->prdpht)}}" alt="Product Photo" width="50"></td>
                                        <td>{{ $p->name }}</td> 
                                        <td>Rp{{ number_format($p->total_harga, 2, ',', '.') }}</td> 
                                        <td>{{ $p->address }}</td> 
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{{ $p->nama_user }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Pagination links -->
                            <div class="d-flex justify-content-center">
                                {{ $transactions->links() }}
                            </div>
                        </div>
                    </div>
                </div>
			</section>

			<!-- Sales Report -->
			<section id="sales-report">
			<h2 class="mb-4">Sales Report</h2>
			<div class="card shadow">
				<div class="card-header bg-dark text-white">Overview</div>
                    <div class="card-body">
                        <p style="text-align:center;"><a style="color: inherit; text-decoration:underline;" href="/conv">Click here to get data report</a></p>
                    </div>
                </div>
			</section>
		</main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
