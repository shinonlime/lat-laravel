@extends('layout.main')

@section('title', 'Edit Cast')

@section('section')
<a class="btn btn-primary btn mt-3" href="/">Kembali</a>
<div class="row mt-3">
    <div class="col-4">
        <form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama', $cast->nama)}}">
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="umur">Umur</label>
                <input type="number" min="0" class="form-control" id="umur" name="umur" value="{{old('umur', $cast->umur)}}">
                @error('umur')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bio">Bio</label>
                <textarea type="text" class="form-control" id="bio" name="bio" style="height: 100px">{{old('bio', $cast->bio)}}</textarea>
                @error('umur')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection