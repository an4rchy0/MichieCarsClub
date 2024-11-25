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
<div class="container">
    <div class="container-fluid" style="margin-top:70px;">
        <div class="row" id="bio" style="margin-top:50px;">
                <hr><h4>Hello</h4>
                <h3 style="margin-bottom: 10px;">{{ $user->username }}</h3><hr>
        </div>
        <div class="row d-flex" style="margin-top:25px; margin-bottom:25%;">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start"><h5>Catalog</h5></div>
                <div class="col-md-6 d-flex justify-content-md-end"><div class="alert alert-success" role="alert"><a href="{{ route('addpdII', ['userId' => $user->IDAdmin]) }}" style="text-decoration: none; color:inherit;">Add Cars</a></div></div><hr>
            </div>
            @if ($contents->isEmpty())
                <div class="row">
                    <div class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Yohhoo u don't have any cars to show!<a href="{{ route('addpdII', ['userId' => $user->IDAdmin]) }}" class="alert-link" style="margin-left:5px;">Click here to add your cars</a>
                    </div>
                </div>
            @else
                @foreach ($contents as $content)
                <div class="row" style="margin-bottom:2%;">
                    <div style="padding:2%; background-color:#e0f0f8; border-radius:12px;">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center justify-content-md-start"><h4><a href="{{ route('ct.show', $content->idpct) }}" style="text-decoration:none; color:inherit;">{{ $content->title }}</a></h4><hr></div>
                            <div class="col-md-6 d-flex justify-content-md-end"><div class="alert alert-secondary" role="alert"><a href="{{ route('ct.up', ['id' => $content->idpct]) }}" style="color:#a3a3a3"><i class="fa fa-edit" style="font-size: 15px; margin-right: 5px;"></i></a><a href="#" data-toggle="modal" data-target="#deleteModal{{$content->idpct}}" style="color:#a3a3a3"><i class="fa fa-trash" style="font-size: 15px;"></i></a></div></div><hr>
                        </div>
                        <p>{{ $content->prevdesc }}</p>
                        <div class="modal fade" id="deleteModal{{$content->idpct}}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{$content->idpct}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModal{{$content->idpct}}">Konfirmasi Hapus</h5>
                                    </div>
                                    <div class="modal-body">Apakah Anda yakin ingin menghapus Post ini?</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <a href="{{ route('ct.del', ['id' => $content->idpct]) }}" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
  </div>
@endsection