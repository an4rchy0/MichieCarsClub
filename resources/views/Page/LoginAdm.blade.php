@extends('./body')

@section('container')
<div class="center-element" style="margin:6%;">
    <div class="row justify-content-md-center">
        <div class="col-md-6 d-flex align-items-center justify-content-center" style="background-color:#a5430a; padding:8%; color:white;">
            <img alt="Logo" class="mr-3" src="{{ asset('Image\mcclog-1.png') }}" width="80%" height="80%"style="margin-right:10px"/>
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
                        <div class="form-group" style="margin-top:3%;">
                            <input type="submit" value="Simpan Data" class="btn btn-primary form-control" style="background-color:#a5430a; border-color:#a5430a;">
                        </div>
                    </fieldset>
                </form>
            </div>
            <center><hr><p>Belum Punya Akun? <a href="/regis">Daftar</a></p></center>
        </div>
    </div>
</div>
@endsection