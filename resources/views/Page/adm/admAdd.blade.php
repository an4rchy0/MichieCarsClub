<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KuBertelur | Tambah Produk</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        .form-group{
            padding-top:2%;
        }
    </style>
</head>
<body>
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
                <button class="btn" style="background-color:#deb900; border-radius:12px; margin-right:10px;">Developer</button>
                <div class="d-flex align-items-center space-x-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                    <span style="color:white; margin-right:20px;"> <span style="margin-right:10px;">IDN | </span> 
                    <a href="/profile"><i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="container-fluid" style="padding: 50px 50px 50px 50px;">
        <div class="row">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Hello Hello!</h4>
                <p>Ramaikan akunmu dengan penuhi berbagai konten yukk!</p><hr>
                <p class="mb-0">Mohon gunakan kata - kata yang baik dan cukup bijak didalam membuat konten! <b>Melanggar ketentuan akan mendapatkan sanksi yang sepadan!</p>
            </div>
        
        <?php 
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
                $kodejoin = "PC-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
                return $kodejoin;
            }
        ?>
        <form action="/PrdStore" method="post" class="bg-body-tertiary rounded-3" style="padding:2%" enctype="multipart/form-data">
            <fieldset>
                {{csrf_field()}}
                <div class="row" style="margin-top: 5%;">
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="padding:1%;">
                        <img src="{{ asset('img/imgexm.png') }}" alt="Product" width="300px" height="300px">
                        <div class="form-group">
                            <input type="text" class="form-control" name="prdid" value="<?php echo generateid(); ?>" hidden>
                        </div>
                        <div class="form-group w-100"> 
                            Deskripsi: <textarea class="form-control w-100" name="prddescript" required="required" style="height: 100px;"></textarea><br> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Tambahkan Produk Anda Disini!<br>
                        <div class="form-group">
                            Nama Produk: <input type="text" class="form-control" name="prdname" required="required">
                        </div>
                        <div class="form-group">
                            Harga Produk: <input type="number" class="form-control" name="prdprice" required="required">
                        </div>
                        <div class="form-group">
                            Stok: <input type="number" class="form-control" name="prdqty" required="required">
                        </div>
                        <div class="form-group">
                            Upload Foto Produkmu! <input type="file" class="form-control" name="prdpht" id="photo" required="required">
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