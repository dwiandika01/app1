@extends('template._master')
@section('judul_halaman','Kandidat')

@section('konten')
<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="panel-title">E-Voting | Kandidat</div>
        <div class="panel-subtitle">Periode : 2019-2020</div>
    </div>
    <div class="panel-body" style="margin-bottom:20px;">
        <div class="row">
            <div class="col-md-5">
                <a href="{{ route('admin.kandidat.tambah') }}" class="btn btn-primary"><i class="fa fa-fw fa-user-plus"></i> Tambah Kandidat</a>
            </div>
        </div>
        {{-- <div class="row">
                <!-- TAMPILKAN DATA KANDIDAT -->
            @foreach($kandidat as $key)
            <div class="col-md-4">
                <div class="kartu">
                    <img src="{{ url('foto_kandidat/'.$key->foto)}}" class="card-img-top" width="242" height="250" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $key->nama }}</h4>
                                <div class="row">
                                    <div class="col text-center">
                                        <a href="{{ route('admin.kandidat.detail',$key->id) }}" class="btn btn-primary" style="width:115px;">Detail</a>
                                        <a href="{{ route('admin.kandidat.hapus',$key->id) }}" class="btn btn-danger" style="width:115px;" onclick="return confirm('Hapus data ?');">Hapus</a>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
            @endforeach
        </div> --}}

        <div class="row pb-5 mb-4 mt-5">
            @foreach($kandidat as $key)
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-4">
                <!-- Card-->
                <div class="card rounded shadow-sm border-1">
                    <div class="card-body p-4"><img src="{{ url('foto_kandidat/'.$key->foto)}}" class="card-img-top" width="242" height="250" alt="...">
                        <h4 class="card-title text-center mt-3">{{ $key->nama }}</h4>
                        <div class="row">
                            <div class="col text-center">
                                <a href="{{ route('admin.kandidat.detail',$key->id) }}" class="btn btn-primary" style="width:115px;">Detail</a>
                                <a href="{{ route('admin.kandidat.hapus',$key->id) }}" class="btn btn-danger" style="width:115px;" onclick="return confirm('Hapus data ?');">Hapus</a>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection