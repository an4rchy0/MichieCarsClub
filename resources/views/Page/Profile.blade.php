<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>KuBertelur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .navbar-nav .nav-link {
            color: #FFFFFF;
        }
        .navbar-nav .nav-link:hover {
            background-color: #7A8F8A; 
        }
        .d-flex.flex-column a {
            color: inherit;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="font-roboto bg-gray-100">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000e86;">
    <div class="container">
        <div class="d-flex align-items-center">
            <img alt="Logo" class="mr-3" height="40" src="{{ asset('img/logo.png') }}" width="40" style="margin-right:10px"/>
            <a class="navbar-brand" href="/" style="font-weight: bold; color: #FFFFFF;">KuBertelur</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color: #FFFFFF;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kat" style="color: #FFFFFF;">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" style="color: #FFFFFF;">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontakk" style="color: #FFFFFF;">Komunitas</a>
                </li>
            </ul>
            <div class="d-flex align-items-center space-x-4">
                <!--<input class="form-control rounded-full text-black" placeholder="Apa yang kamu cari?" type="text" style="margin-right:10px;"/>-->
                <button class="btn" style="background-color:#deb900; border-radius:12px; margin-right:10px;">Developer</button>
                <div class="d-flex align-items-center space-x-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                    <span style="color:white; margin-right:20px;"> <span style="margin-right:10px;">IDN | </span> 
                    <a href="/login"><i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="p-0 mb-1 bg-body-tertiary rounded-3">
    <div class="container-fluid py-10" style="background-image: url({{ asset('img/ban1-5.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center; padding:5% 20%; color:white"> <!-- 688px; width:1107px -->
        <div class="row" style="display-5">
            <div class="col-md-6 justify-content-md-start">
                <h4>Hello</h4>
                <h1>{{ $user->name }}</h1>
                <h3>{{ $user->email }}</h3>
            </div>
            <div class="col-md-6 justify-content-md-start">
                <p style="font-size:18px; margin-top:20px;"><span style="margin-right:5px; background-color:#172bd2; padding:10px 20px; border-radius:25px;">Transaksi</span>
                <span style="margin-right:15px; background-color:#172bd2; padding:10px 20px; border-radius:18px;">Komunitas</span> <br><br>
                <span style="margin-right:5px; background-color:#172bd2; padding:10px 20px; border-radius:18px;">Konten</span>
                <span style="margin-right:15px; background-color:#172bd2; padding:10px 20px; border-radius:18px;">Produkku</span> <br><br>
                <span style="margin-right:15px; background-color:#172bd2; padding:10px 20px; border-radius:18px;">Statistik</span></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row" style="margin-top:60px">
            <div class="col-md-6 justify-content-md-start"><h4>Transaksi Pembelian <i class="fa-solid fa-bucket" style="font-size:24px; margin-left:10px;"></i></h4></div>
            <div class="col-md-6 d-flex justify-content-end"><h4></h4></div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-md-6 justify-content-md-start" style="">
                <h5>Sedang dikirim</h5><hr>
                <div class="d-flex justify-content-around">
                    <div class="card" style="width: 15rem;">
                        <img src="{{asset('img/ban1-4.png')}}" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Lele sunggut Madura</h5>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <img src="{{asset('img/ban1-4.png')}}" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Lele sunggut Madura</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 justify-content-end">
                <div class="row">
                    <div class="col-md-12 justify-content-md-start"><h5>Selesai</h5><hr></div>
                    <div class="d-flex justify-content-around">
                        <div class="card" style="width: 15rem;">
                            <img src="{{asset('img/ban1-4.png')}}" class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Lele sunggut Madura</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 15rem;">
                            <img src="{{asset('img/ban1-4.png')}}" class="card-img-top" alt="Product">
                            <div class="card-body">
                                <h5 class="card-title">Lele sunggut Madura</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center" style="margin-top:50px; background-image: url({{ asset('img/ban1-5.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center; padding:5% 20%; color:white;">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h4>Kelola akunmu yuk!</h4>
                </div>
            </div>
        </div>
        <div class="row d-flex" style="margin-top:25px;">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start"><h5>Komunitasku</h5></div>
                <div class="col-md-6 d-flex justify-content-md-end"><div class="alert alert-success" role="alert"><a href="" style="text-decoration:none; color:inherit;">Tambah komunitas +</a></div></div><hr>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex" style="margin-top:25px;">
                    <div class="card" style="">
                        <img src="{{asset('img/ban1-4.png')}}" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Lele sunggut Madura</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex" style="margin-top:25px;">
                    <div class="card" style="">
                        <img src="{{asset('img/ban1-4.png')}}" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Lele sunggut Madura</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex" style="margin-top:25px;">
                    <div class="card" style="">
                        <img src="{{asset('img/ban1-4.png')}}" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Lele sunggut Madura</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex" style="margin-top:25px;">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start"><h5>Kontenku</h5></div>
                <div class="col-md-6 d-flex justify-content-md-end"><div class="alert alert-success" role="alert"><a href="{{ route('addcont', ['userId' => $user->idusr_kbt]) }}" style="text-decoration:none; color:inherit;">Tambah konten +</a></div></div><hr>
            </div>
            @if ($contents->isEmpty())
                <div class="row">
                    <div class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Upss.. kamu belum posting atau upload konten nih <a href="a" class="alert-link" style="margin-left:5px;">Tambah konten kamu disini</a>
                    </div>
                </div>
            @else
                @foreach ($contents as $content)
                <div class="row">
                    <div style="padding:2%; background-color:#ececec; border-radius:12px;">
                        <h4><a href="{{ route('content.show', $content->id) }}">{{ $content->title }}
                        <p>{{ $content->prevdesc }}</p>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="row d-flex" style="margin-top:25px;">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start"><h5>Produkku</h5></div>
                <div class="col-md-6 d-flex justify-content-md-end"><div class="alert alert-success" role="alert"><a href="{{ route('addprd', ['userId' => $user->idusr_kbt]) }}" style="text-decoration:none; color:inherit;">Tambah produk +</a></div></div><hr>
            </div>
            @if ($pdc->isEmpty())
                <div class="row">
                    <div class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Belum ada produk yang ditambahkan &nbsp <a href="{{ route('addprd', ['userId' => $userId]) }}" class="alert-link"> Tambahkan produk anda disini</a>
                    </div>
                </div>
            @else
                <div class="row d-flex justify-content-center align-items-center">
                    @foreach ($pdc as $pd)
                        <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                            <div class="card" style="">
                                <img src="{{asset('storage/photo/'.$pd->prdpht)}}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                                <div class="card-body">
                                    <h5 class="card-title">{{ $pd->prdname }}</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="#"><i class="fa fa-edit" style="font-size: 24px; margin-right: 10px;"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash" style="font-size: 24px;"></i></a>
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus produk ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <a href="pasienview/hapus/" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</div>

<footer class="footer bg-dark text-white" style="margin-top :20px; background-color: #343a40;">
    <div class="container">
        <div class="row" style="padding: 20px;">
            <div class="col-md-4 justify-content-md-center">
                <img class="img-fluid mb-3" src="{{ asset('img/logo.png') }}" alt="Company Logo" style="border-radius: 50%; border: 2px solid white; width: 40%; padding: 10px; align-content: center;">
            </div>
            <div class="col-md-8">
                <div class="row" style="display: flex; align-items: center; justify-content: center;  text-align: justify; margin-bottom:5px;">
                    <p>Mari bersama majukan pangan negeri! <br> KuBertelur market & community</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Kontak Pusat </h5>
                        <p> <i class="fa-brands fa-whatsapp"></i> +62 8888-888-888</p>
                        <p> <i class="fa-regular fa-envelope"></i> KuBertelurIdn@company.com</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Sosial Media </h5>
                        <div class="d-flex flex-column">
                            <a href="/" class="text-white mb-2"><i class="fa-brands fa-instagram"></i> Youtube : KuBertelur</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="display: flex; align-items: center; justify-content: center; height: 5vh; text-align: center;">
                <hr><p>&copy; <span id="year"></span>Copyright | KuBertelur</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
