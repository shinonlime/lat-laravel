@extends('layout.main')
@section('Title', 'Detail Cast')

@section('section')
<a class="btn btn-primary btn mt-3" href="/">Kembali</a>
<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">{{$cast->nama}}</h5>
        <div class="card-body">
          <h5 class="card-title">{{$cast->umur}} tahun</h5>
          <p class="card-text">{{$cast->bio}}</p>
        </div>
    </div>
</div>

@endsection