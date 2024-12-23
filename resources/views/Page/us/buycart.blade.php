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
    <style>
        .col-md-4 .card{
            transition: .3s;
        }
        .col-md-4:hover .card{
            transform: scale(1.1);
        }
        .navbar-nav .nav-link {
            color: #FFFFFF;
        }
        .navbar-nav .nav-link:hover {
            background-color: #7A8F8A; 
        }
        .input-group-inline { 
            display: flex; align-items: center; 
        } 
        .input-group-inline .form-control { 
            margin-right: 10px; 
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
    <script defer> 
        function generaterandprc() { 
            return Math.floor(Math.random() * (15000 - 10000 + 1)) + 10000 + 2500; 
        } 
        document.addEventListener('DOMContentLoaded', (event) => { 
            const addressInput = document.querySelector('input[name="address"]'); 
            const priceInput = document.querySelector('input[name="price"]'); 
            addressInput.addEventListener('input', () => { 
                if (addressInput.value !== "") { 
                    priceInput.value = generaterandprc(); 
                } else { 
                    priceInput.value = ""; 
                } 
                updateTotal();
            }); 
            const prdprice = <?php echo $content->prdprice; ?>; 
            const qtyInput = document.querySelector('input[name="qty"]'); 
            const tqtyInput = document.querySelector('input[name="tqty"]'); 
            qtyInput.addEventListener('input', () => { 
                if (qtyInput.value !== "") { 
                    tqtyInput.value = `Rp. ${prdprice * qtyInput.value}`;
                } else { 
                    tqtyInput.value = ""; 
                } 
                updateTotal();
            }); 
            const totalInput = document.querySelector('input[name="total"]'); 
            function updateTotal() { 
                if (priceInput.value !== "" && tqtyInput.value !== "") { 
                    const priceValue = parseFloat(priceInput.value.replace('Rp. ', '')); 
                    const tqtyValue = parseFloat(tqtyInput.value.replace('Rp. ', '')); 
                    totalInput.value = `Rp. ${priceValue + tqtyValue}`; 
                } else { 
                    totalInput.value = ""; 
                } 
            }
            const form = document.querySelector('form'); 
            const modal = new bootstrap.Modal(document.getElementById('exampleModalToggle')); 
            const cancelButton = document.getElementById('cancelButton');
            form.addEventListener('submit', (e) => { 
                e.preventDefault(); 
                if (form.checkValidity()) { 
                    modal.show();    
                        setTimeout(() => { 
                        var totalInput = document.getElementById('total');
                        var value = totalInput.value;
                        var numericValue = value.replace('Rp. ', '');
                        totalInput.value = numericValue;
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
                        <a class="nav-link" href="/about" style="color: #FFFFFF;">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center space-x-4">
                   <a href="/develop"><button class="btn" style="background-color:#deb900; border-radius:12px; margin-right:10px;">Developer</button></a>
                    <div class="d-flex align-items-center space-x-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                        <span style="color:white; margin-right:20px;"> <span style="margin-right:10px;">IDN | </span> 
                        <button type="button" class="btn btn-primary position-relative">
                            <a href="/profile"><i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i></a></span>
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">  
        <div class="container-fluid">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="padding:2%">
                    <img src="{{asset('storage/photo/'.$content->prdpht)}}" alt="Product" width="300px" height="300px">
                    <div class="row" style="margin-top:5%;">
                        <p style="text-align:justify">{{$content->prddescript}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <span style="align-text:center;" class="d-flex">
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                    </span>
                    <p>Recommended (KuBertelur) <br> 
                    <h1>{{$content->prdname}}</h1> <br> 
                    Avaibility : {{ $content->prdqty > 0 ? 'Available' : 'Not Available' }}<br> 
                    Stok : {{$content->prdqty}}<br> 
                    Harga : Rp{{ number_format($content->prdprice, 2, ',', '.') }}<span style="padding:5px 2%; background-color: #e6c347; border-radius:12px; margin-left:2%;">20% Off</span><br>
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
                            $kodejoin = "TR-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
                            return $kodejoin;
                        }
                    ?>
                    <div class="row" style="margin-top:20px;">
                        <form action="/stbuy" method="post" class="bg-body-tertiary rounded-3" style="padding:2%" enctype="multipart/form-data">
                            <fieldset>
                                {{csrf_field()}}
                                <div class="form-group form-inline">
                                    Kuantitas : 
                                    <div class="form-group input-group-inline"> 
                                        <input type="number" class="form-control" name="qty" required="required" placeholder="Jumlah Barang"> 
                                        <input type="text" class="form-control" name="tqty" required="required" placeholder="Total" disabled> 
                                    </div>
                                </div>
                                <div class="form-group form-inline">
                                    <input type="text" class="form-control" name="trid" value="<?php echo generateid(); ?>" hidden>
                                    <input type="text" class="form-control" name="pdcid" value="{{ $pdcID }}" hidden>
                                </div>
                                <div class="form-group form-inline">
                                    Alamat : 
                                    <input type="text" class="form-control" name="address" required="required"placeholder="Alamat Anda" style="margin-right: 10px;">
                                </div>
                                <div class="form-group form-inline">
                                    Jasa Kirim & Aplikasi : 
                                    <input type="text" class="form-control" name="price" required="required" placeholder="Biaya Jasa & Aplikasi" style="margin-right: 10px;" disabled>
                                </div>
                                <div class="form-group form-inline">
                                    Total
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" name="total" id="total" required="required" placeholder="Total" style="background-color: #E7E9E7;" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-inline"> 
                                    <input type="text" class="form-control" name="usid" required="required" placeholder="Total" style="margin-right: 10px;" value="{{ $userID }}" hidden>
                                </div>
                                <div class="form-group" style="margin-top:3%;"> 
                                    <input type="submit" value="Beli Sekarang" class="btn btn-primary form-control"> 
                                </div>
                            </fieldset>
                        </form>
                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1"> 
                            <div class="modal-dialog modal-dialog-centered"> 
                                <div class="modal-content"> 
                                    <div class="modal-header text-center"> 
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Mohon scan Transaksi pembelian</h1> 
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                                    </div> 
                                    <div class="modal-body text-center justify-content-center"> <img class="img-fluid" src="{{ asset('img/barQ.png') }}" alt="bar" style="width: 40%; padding: 10px; align-content: center;"></div> 
                                    <div class="modal-footer justify-content-center"> 
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelButton">Batal</button> 
                                    </div> 
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5%">
                @foreach($pdcB as $pB)
                <div class="col-md-4 d-flex justify-content-center" style="margin-bottom:10px;" data-aos="fade-up" data-aos-delay="500">
                    <div class="card" style="width: 300px;">
                        <img src="{{asset('storage/photo/'.$pB->prdpht)}}" class="card-img-top img-responsive margin" alt="Product" style="width : 300px; height: 223px;">
                        <div class="card-body">
                            <h5 class="card-title" style="padding-top:2% 0;"><a style="text-decoration: none; color:inherit;" href="{{ route('pd.show', [$pB->idproduct, $us]) }}">{{$pB->prdname}}</a></h5>
                            <p class="card-text" style="text-align: justify;">Harga: Rp{{ number_format($pB->prdprice, 2, ',', '.') }} <br><div style="margin-top:1px;">{{ \App\Helpers\StringHelper::limitWords($pB->prddescript, 15) }} ...</div> </p>
                            <p class="card-text"><small class="text-body-secondary">Stok : {{ $pB->prdqty }}</small></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $pdcB->links('pagination::bootstrap-4') }}
                </div>
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
