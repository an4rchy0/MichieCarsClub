<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KuBertelur | Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs@1.5.0/dist/purecounter_vanilla.min.js"></script>
    <!-- Font Awesome Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            display: flex;
            background-image: url({{ asset('images/block1.jpg') }});
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
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

<div class="center-element" style="margin:5%;">
    <div class="row justify-content-md-center">
    <div class="col-12" style="padding:3%; color:#4051E0;" data-aos="slide-left" data-aos-delay="300">
        <div class="row justify-content-md-center bg1" style="background-color: rgba(255, 255, 255, 0.75); padding:50px;">
            <h3>Hello Admin</h3><hr>
            @if (session('msg'))
                <div class="alert alert-danger">
                    {{ session('msg') }}
                </div>
            @endif
            <form action="{{ route('pslogin') }}" method="post" class="bg-body-tertiary rounded-3" style="padding:5%" enctype="multipart/form-data">
                <fieldset>
                    {{csrf_field()}}
                    <div class="form-group">
                        Username: <input type="text" class="form-control" name="username" required="required" data-aos="fade-up" data-aos-delay="400">
                    </div>
                    <div class="form-group">
                        Password: <input type="password" class="form-control" name="password" required="required" data-aos="fade-up" data-aos-delay="500">
                    </div>
                    <div class="form-group" style="margin-top:3%;">
                        <input type="submit" value="Masuk" class="btn btn-primary form-control" data-aos="fade-up" data-aos-delay="600">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div>
</div>
<script>
    AOS.init();
</script>
</body>
</html>