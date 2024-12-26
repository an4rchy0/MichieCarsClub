<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCC | User Register</title>
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
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        #bgVideo {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            background-size: cover;
        }
    </style>
</head>
<body class="font-roboto bg-gray-100">
<audio autoplay loop id="bgMusic">
    <source src="{{ asset('images/banM/m.mp3') }}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<video autoplay muted loop id="bgVideo"> 
    <source src="{{ asset('images/banM/V2.mp4') }}" type="video/mp4"> 
    Your browser does not support HTML5 video. 
</video>

<div class="center-element" style="margin:5%;">
    <div class="row justify-content-md-center">
        <div class="col-md-12" style="padding:3%;" data-aos="slide-right" data-aos-delay="100">
            <div class="row justify-content-md-center" style="background-color: rgba(255, 255, 255, 0.5); padding:20px;">
                <?php 
                    if (!function_exists('genid')) { 
                        function genid() { 
                            $hari = date('l'); 
                            $tanggal = date('d'); 
                            $bulan = date('M'); 
                            $blnangka = date('m'); 
                            $tahun = date('y'); 
                            $jam = date('H'); 
                            $minute = date('i'); 
                            $detik = date('s'); 
                            $haricut = substr($hari, 0, 1); 
                            $bulancut = substr($bulan, 0, 1); 
                            $hourcut = substr($jam, 0, 1); 
                            $minutecut = substr($minute, 0, 1); 
                            $detikcut = substr($detik, 0, 1); 
                            $kodejoin = "USPT-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}"; 
                            return $kodejoin;
                        }
                    }
                ?>
                <h3 style="text-align:center; padding:15px;">Create Account</h3>
                <form action="/UsReg" method="post" name="userForm" class="bg-body-tertiary rounded-3" style="padding:3%" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <fieldset>
                        {{csrf_field()}}
                        <div class="form-input mb-3">
                            <input type="text" class="form-control" name="usid" value="<?php echo genid(); ?>" hidden>
                        </div>
                        <div class="input-group mb-3">
                            <input data-aos="fade-up" data-aos-delay="100" type="text" class="form-control" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <div class="input-group mb-3">
                            <input data-aos="fade-up" data-aos-delay="200" type="text" class="form-control" name="usname" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <div class="input-group mb-3">
                            <input data-aos="fade-up" data-aos-delay="300" type="text" class="form-control" name="usemail" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2" required="required">
                            <span data-aos="fade-up" data-aos-delay="400" class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                        <div class="form-input mb-3">
                            <textarea type="text" name="address" id="address" class="form-control" placeholder="Address" style="height: 100px;" required></textarea>
                        </div>
                        <div class="form-input mb-3">
                            <input data-aos="fade-up" data-aos-delay="600" type="password" class="form-control" name="uspass" placeholder="Password" aria-label="Recipient's username" aria-describedby="basic-addon2" required="required">
                        </div>
                        <div class="form-input mb-3" style="margin-top:3%;">
                            <input data-aos="fade-up" data-aos-delay="700" type="submit" value="Daftar" class="btn form-control" style="background-color:#FFD017;color:black;">
                        </div>
                    </fieldset>
                </form>
                <center><hr><b>Have an account? <a href="/loginus">Click here</a></b></center>
            </div>
        </div>
    </div>
</div>
<script>
    AOS.init();

    function validateForm() { 
        const email = document.forms["userForm"]["usemail"].value;
        const password = document.forms["userForm"]["uspass"].value;
        const name = document.forms["userForm"]["name"].value;
        const usname = document.forms["userForm"]["usname"].value;

        // Name validation 
        if (!validateNameOrUsername(name)) { 
            alert("Nama hanya mengandung huruf! minimal mengandung 5 karakter dan maksimal mengandung 30 karakter!"); 
            return false; 
        } 
        // Username validation 
        if (!validateNameOrUsername(usname)) { 
            alert("Username hanya mengandung huruf! dan maksimal mengandung 30 karakter!"); 
            return false; 
        }
        // Email validation
        if (!validateEmail(email)) {
            alert("Email harus valid dan maksimal mengandung 40 karakter!");
            return false;
        }
        // Password validation
        if (!validatePassword(password)) {
            alert("Password harus mengandung huruf, simbol dan angka, serta minimal mengandung 10 karakter dan maksimal 20 karakter!");
            return false;
        }
        return true;
    }

    function validateEmail(email) {
        // Regular expression for email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email) && email.length <= 40;
    }

    function validatePassword(password) {
        // Regular expression for password validation: at least one letter, one number, and one special character
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,20}$/;
        return passwordRegex.test(password);
    }

    function validateNameOrUsername(input) { 
        // Regular expression for name and username validation: only letters and between 5 to 30 characters
        const nameOrUsernameRegex = /^[A-Za-z]{5,30}$/; 
        return nameOrUsernameRegex.test(input); 
    }
</script>
</body>
</html>