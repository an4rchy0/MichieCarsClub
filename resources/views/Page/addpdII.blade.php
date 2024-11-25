@extends('./body')
@section('container')
<div class="container">
    <div class="container-fluid" style="padding: 50px 50px 50px 50px;">
        <div class="row">
            <div class="alert alert-success" role="alert">
                <center><h4 class="alert-heading">Add your car here!</h4>
                <p>Detailing your car segment here</p><hr></center>
            </div>
        
            <?php 
            if (!function_exists('generateid')) {
                function generateid() {
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
                    $kodejoin = "Car-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
                    return $kodejoin;
                }
            }
            ?>

        <form action="/PrdStore" method="post" class="bg-body-tertiary rounded-3" style="padding:5%" enctype="multipart/form-data">
            <fieldset>
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" name="prdid" value="<?php echo generateid(); ?>" hidden>
                </div>
                <div class="form-group">
                    Name     : <input type="text" class="form-control" name="prdname" required="required">	
                </div>
                <div class="form-group">
                    Price   : <input type="text" class="form-control" name="prdprice" required="required">
                </div>
                <div class="form-group">
                    Upload File     : <input type="file" class="form-control" name="prdpht" id="photo">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="prdus" required="required" value="{{ $userId }}" hidden>
                </div>
                <input type="submit" value="Simpan Data" class="btn btn-primary form-control" style="margin-top:3%">
            </fieldset>
        </form>
        </div>
    </div>
</div>
@endsection