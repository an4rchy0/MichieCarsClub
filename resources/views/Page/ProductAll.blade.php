@extends('./body')
<style>
  .col-md-4.card{
    transition: .3s;
  }
  .col-md-4:hover{
    transform: scale(1.1);
  }
</style>
@section('container')
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:  #a5430a; ">
        <div class="container">
            <div class="d-flex align-items-center">
                <img alt="Logo" class="mr-3" height="40" src="{{ asset('Image\mcclog-1.png') }}" width="40" style="margin-right:10px"/>
                <a class="navbar-brand" href="/" style="font-weight: bold; color: #ffffff;">Michie Cars Club</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: #ffffff;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/prds" style="color: #ffffff;">Product</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center space-x-4">
                    <form class="form-inline d-flex my-2 my-lg-0" action="/search">
                        <input class="form-control mr-2" type="search" placeholder="Let's find out your car!" aria-label="Search" name="search" style="margin-right:10px;">
                        <button class="btn btn-outline-light" type="submit" style="margin-right:10px;">Search</button>
                    </form>
                    <button class="btn" style="background-color: #be4f0e; border-radius:12px; margin-right:10px; color: #ffffff;">Event</button>
                    <div class="d-flex align-items-center space-x-2" style="margin-right: 10px;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                        <span style="color:white; margin-right:10px;">IDN</span>
                        <button type="button" class="btn btn-danger position-relative">
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
<div class="p-0 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-10" style="background-image: url({{ asset('Image/ban-1.png') }}); background-size: 100% 180%; background-repeat: no-repeat; background-position: center center; padding:6% 10%; color:white"> <!-- 688px; width:1107px -->
        <h1 class="display-5 fw-bold" style="">Michie Cars <span style="color: #f86611"> Club </span></h1>
        <p>Your car is your Michie!</p>
    </div>
</div>
<div class="container">
    <div class="container-fluid" style="margin-top:70px;">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;"><a href="ppd" style="text-decoration:none; color:inherit;">Porch 911</a></h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                <div class="card" style="">
                    <img src="{{ asset('Image/car/mb-911.PNG') }}" class="card-img-top img-responsive margin" alt="Product" style="width:250px;"> <!-- Pastikan field image ada -->
                    <div class="card-body">
                        <h5 class="card-title" style="margin: 5% 0;">Porch 911</h5>
                        <i class="fa-solid fa-gas-pump fa-beat"></i> &nbsp; 90L &nbsp;
                        <i class="fa-solid fa-circle fa-beat"></i> &nbsp; Manual &nbsp;
                        <i class="fa-solid fa-person fa-beat"></i> &nbsp; 2 <br>
                        <i class="fa-solid fa-dollar-sign fa-beat"></i> &nbsp; $147,235 <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 25px;">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection