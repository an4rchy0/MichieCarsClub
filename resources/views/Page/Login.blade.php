<div class="center-element" style="margin:5%;">
    <div class="row justify-content-md-center">
        <div class="col-md-6" style="background-color:#4051E0; padding:8%; color:white;">
            <h3>Perkenalkan, Kami KuBertelur!</h3><br>
            <p>Website pengembang usaha untuk UMKM di bidang perikanan. Beberapa fitur yang kami tawarkan di website ini adalah: <br><br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Jual beli produk & bibit ikan &nbsp; <br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Penyedia fitur klasifikasi air &nbsp; <br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Membangun Komunitas di bidang Perikanan &nbsp; <br>
            </p>
        </div>
        <div class="col-md-6" style="padding:3%; color:#4051E0;">
            <div class="row justify-content-md-center">
                <h3>Halo, Selamat Datang.</h3><br><p>Masuk ke akunmu, yuk</p>
                @if (session('msg'))
                    <div class="alert alert-danger">
                        {{ session('msg') }}
                    </div>
                @endif
                <form action="{{ route('pslogin') }}" method="post" class="bg-body-tertiary rounded-3" style="padding:5%" enctype="multipart/form-data">
                    <fieldset>
                        {{csrf_field()}}
                        <div class="form-group">
                            Username     : <input type="text" class="form-control" name="username" required="required">	
                        </div>
                        <div class="form-group">
                            Password: <input type="password" class="form-control" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <a href="">Lupa Password?</a>
                        </div>
                        <div class="form-group" style="margin-top:3%;">
                            <input type="submit" value="Simpan Data" class="btn btn-primary form-control">
                        </div>
                    </fieldset>
                </form>
            </div>
            <center><hr><p>Belum Punya Akun? <a href="/regis">Daftar</a></p></center>
        </div>
    </div>
</div>