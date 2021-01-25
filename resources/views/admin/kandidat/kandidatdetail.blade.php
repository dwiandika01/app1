@extends('template._master')
@section('judul_halaman','Kandidat>Detail')

@section('konten')
<h4 style="text-align: center; font-size: 50px;">DETAIL KANDIDAT</h4>
<div class="box">
    <div id="overlay">
        <div class="image"><img class="potokandidat" src="{{ asset('foto_kandidat/'.$detailkandidat->foto )}}" alt="">
            <div class="trick">

            </div>
        </div>
        <ul class="text">{{ $detailkandidat->nama }}</ul>
    </div>
</div>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading " role="tab" id="headingTwo">
        <h4 class="panel-title ">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="" aria-controls="collapseOne">
            <div class="title  btn btn-danger btn-outline btn-lg" style="color: black">VISI</div>
          </a>
        </h4>   
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <p>{!! $detailkandidat->visi !!}</p>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <div class="title btn btn-danger btn-outline btn-lg" style="color: black">MISI</div>
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
            <p>{!! $detailkandidat->misi !!}</p>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col text-center mt-2">
            <a href="/admin/kandidat" class="btn btn-danger" style="width:115px;">KEMBALI</a>
            <a href="{{ route('admin.kandidat.edit',$detailkandidat->id) }}" class="btn btn-primary" style="width:115px;">EDIT</a>
        </div>
    </div>
</div>


@endsection