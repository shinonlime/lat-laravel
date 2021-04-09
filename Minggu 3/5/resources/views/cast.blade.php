@extends('layout.main')

@section('title', 'Cast')

@section('section')
<a class="btn btn-primary btn mt-3" href="/cast/create">Buat data Cast baru</a>
    <div class="row mt-3">
        <div class="col">
          @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
          @endif
            <table class="table">
                <thead>
                  <tr class="table text-white bg-primary">
                    <th scope="col" class="col-1 col text-center">#</th>
                    <th scope="col" class="col-2 col text-center">Nama</th>
                    <th scope="col" class="col-2 col text-center">Umur</th>
                    <th scope="col" class="col-5 col text-center">Bio</th>
                    <th scope="col" class="col col text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody class="table-bordered border-dark">
                  @forelse ($cast as $casts)                    
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$casts->nama}}</td>
                    <td>{{$casts->umur}} tahun</td>
                    <td>{{$casts->bio}}</td>
                    <td class="col text-center">
                        <a class="btn btn-primary btn-sm" href="/cast/show/{{$casts->id}}"><!--<i class="bi bi-eye"></i>-->Lihat</a>
                        <a class="btn btn-success btn-sm" href="/cast/edit/{{$casts->id}}"><!--<i class="bi bi-pencil-square"></i>-->Edit</a>
                        <a class="btn btn-danger btn-sm" href="/cast/delete/{{$casts->id}}"><!--<i class="bi bi-trash"></i>-->Hapus</a>
                    </td>
                  </tr>
                    @empty
                    <tr>
                      <td colspan="5" style="text-align: center"><p>Tidak ada data</p></td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
        </div>
    </div>
@endsection