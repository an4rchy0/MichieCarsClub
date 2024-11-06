@extends('./body')
<style>
  .col-md-6{
    transition: .3s;
  }
  .col-md-6.car:hover{
    transform: scale(1.1);
  }
  .video-background { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1; }
  .content { position: relative; z-index: 1; color: white; text-align: center; padding: 20px; }
</style>
@section('container')
<video autoplay muted loop class="video-background"> 
    <source src="{{asset('Image/car/aaa.mp4')}}" type="video/mp4"> Your browser does not support the video tag. 
</video>
<div class="container">  
    <div class="container-fluid">
        <div class="row" style="margin-top: 5%">
            <div class="col-md-6" style="padding:40px 70px; background-color: rgba(252, 252, 252, 0.3);">
                <div class="row" style="color:rgba(252, 252, 252);">
                    <h1>Nissan GT-R</h1>
                </div>
                <div class="row"><p style="text-align: justify; color:rgba(252, 252, 252);">
                    Mesin: 3.8L Twin-Turbocharged V6 <br>
                    Tenaga: Sekitar 565-600 hp (tergantung model) <br>
                    Torsi: 467 lb-ft <br>
                    Transmisi: 6-speed Dual Clutch Automatic <br>
                    Penggerak: All-Wheel Drive (AWD) <br>
                    Desain aerodinamis dengan lampu depan LED dan lampu belakang khas Nissan GT-R. <br>
                    Velg 20 inci dengan rem cakram Brembo. <br>
                    Sistem kontrol traksi dan stabilitas, rem anti-lock, serta airbag di beberapa titik. <br>
                    Fitur Nissan Intelligent Mobility yang membantu stabilitas berkendara.
                </p></div>
            </div>
            <div class="col-md-6 car">
                <div class="row" style="">
                    <img src="{{asset('Image/car/mb-ns.PNG')}}" class="card-img-top" alt="Product">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:px;">
            <center><button class="btn" style="background-color:#a5430a; border-radius:15px; padding-right:60px; padding-left:60px; margin-right:10px; margin-top:10px; color: #ffffff;">
                <a href="/buy" style="text-decoration:none; color:inherit;">Buy Now!</a>
            </button></center>
        </div>
    </div>
</div>
@endsection