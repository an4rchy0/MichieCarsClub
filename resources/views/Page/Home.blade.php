@extends('./body')

@section('container')
<div class="p-0 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-10" style="background-image: url({{ asset('Image/ban-1.png') }}); background-size: 100% 180%; background-repeat: no-repeat; background-position: center center; padding:6% 10%; color:white"> <!-- 688px; width:1107px -->
        <h1 class="display-5 fw-bold" style="">Michie Cars <span style="color: #f86611"> Club </span></h1>
        <button class="btn" style="background-color:#a5430a; border-radius:15px; padding-right:60px; padding-left:60px; margin-right:10px; margin-top:10px; color: #ffffff;">Get ready now!</button>
    </div>
</div>
<div class="container">
    <div class="container-fluid" style="margin-top:70px;">
            <div class="row" id="biodata" style="margin-top:50px;">
                <hr>
                <h4>Our Cars</h4>
                <h3 style="margin-bottom: 10px;">The best cars is here</h3>
            </div>
            <div class="row d-flex justify-content-md-center" id="cargall" style="margin-top:10px;">
                <hr>
                <div class="col-md-4 d-flex justify-content-md-center" style="margin-bottom: 40px;">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/mb-911.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Porsche 911</h5>
                          <p class="card-text">
                            The Porsche 911 is an iconic sports car known for its timeless design, exceptional performance, and engineering excellence
                          </p>
                          <a href="#" class="btn btn-primary">Check it!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-md-center" style="margin-bottom: 40px;">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/mb-bx.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Porsche Boxster</h5>
                          <p class="card-text">
                            The Porsche Boxster is a sleek, mid-engine roadster that offers dynamic performance and an open-air driving experience. 
                          </p>
                          <a href="#" class="btn btn-primary">Check it!</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-md-center" style="margin-bottom: 40px;">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/mb-cy.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Porsche Cayenne</h5>
                          <p class="card-text">
                            The Porsche Cayenne is a powerful and luxurious SUV combining sports car performance with practicality and comfort.
                          </p>
                          <a href="#" class="btn btn-primary">Check it!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-top: 30px;">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./img/3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Dinner Together is Real!</h5>
                          <p>Celebrate our win with the bigest our team w<p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="./img/4.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Let's party tonight!</h5>
                          <p>Create some party or join our community</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="./img/5.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>The real star are we</h5>
                          <p>Lets join to be a star together</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="row justify-content-md-center" id="biodata" style="margin-top:5%; align-content: center;">
                <hr>
                <h4>Our circuit party's</h4>
                <h3 style="margin-bottom: 10px;">Lets choose the best circuit in here!</h3>
                <hr>
                <div class="col-md-4" style="margin-bottom: 40px;">
                    <div class="card">
                        <img src="./img/cs-js.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">South Jakarta Circuit area</h5>
                          <p class="card-text">Put your pedal to the metal at our adrenaline-pumping race circuit in South Jakarta, where every lap is a thrill!</p>
                          <a href="#" class="btn btn-primary">I wanna race here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 40px;">
                    <div class="card">
                        <img src="./img/cs-pik.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Pantai Indah Kapuk Circuit area</h5>
                          <p class="card-text">Experience the ultimate thrill at our state-of-the-art racing circuit in Pantai Indah Kapuk, where speed meets scenic beauty! </p>
                          <a href="#" class="btn btn-primary">I wanna race here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection