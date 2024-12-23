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
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
        }
        #sidebar {
            position: fixed;
            top: 0;
            width: 250px;
            height: 100%;
            background-color: #343a40;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        #sidebar h3 {
            margin: 4%;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            color:rgb(255, 255, 255);
        }
        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        #sidebar ul li {
            margin: 15px 0;
        }
        #sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        #sidebar ul li a:hover {
            background-color: #495057;
        }
        #main-content {
            margin-left: 15%; /* Sidebar width + margin */
            padding: 20px;
            margin-top: 0; /* No navbar, so no top margin needed */
        }
        .card {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 50%;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }
        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            #sidebar {
                position: relative;
                width: 100%;
                height: auto;
                box-shadow: none;
            }
            #main-content {
                margin-left: 0;
                margin-top: 20px;
            }
            #sidebar ul {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            #sidebar ul li {
                margin: 10px 0;
            }
            #sidebar ul li a {
                font-size: 18px;
                padding: 15px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside id="sidebar">
        <h4>Hello Admin <br> {{ $user->nama }}</h4>
        <ul>
            <li><a class="nav-link" href="#">Manage Produk</a></li>
            <li><a class="nav-link" href="#">Manage Users</a></li>
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration:none; color:inherit;">
                    <i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i> Logout
                </a>
            </li>
            <!-- Form Logout Tersembunyi -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="container">
            <div class="row" style="" id=trans>
                <div id="main-content">
                    <h1>Admin Dashboard</h1><hr>
                    <div class="pdc">
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
                                    <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:0px;">
                                        <div class="card" style="width: 300px; padding;0%;">
                                            <img class="card-img-top img-responsive margin" src="{{asset('storage/photo/'.$pd->prdpht)}}" alt="Product" style="width : 100%; height: 223px; object-fit: cover;">
                                            <div data-aos="fade-up" data-aos-delay="500" class="card-body">
                                                <h5 class="card-title" style="padding-top:2% 0;"><a href="#" data-toggle="modal" data-target="#prevModal{{$pd->IDCar}}" style="text-decoration:none; color:inherit;">{{ \App\Helpers\StringHelper::limitWords($pd->name, 10) }}</a></h5>
                                                <p class="card-text" style="text-align: justify;">Price: Rp{{ number_format($pd->price, 2, ',', '.') }} <br><div style="margin-top:1px;">{{ \App\Helpers\StringHelper::limitWords($pd->descr, 15) }} ...</div> </p>
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
                                                                                    Description: <textarea class="form-control w-100" name="prddescript" required="required" style="height: 100px;">{{ $pd->descr }}</textarea><br> 
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
                        <hr>
                    </div>
                    
                    <div class="trs">
                        @if ($cus->isEmpty())
                            <div class="row">
                                <div xxx="fade-up" xxx="400" class="d-flex justify-content-center align-items-center" role="alert" style="width:90%;">
                                    <a href="" style="padding:2%; border:1px solid; text-decoration:none;">Print Report Transaksi Pembelian</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    AOS.init();
</script>
</body>
</html>
