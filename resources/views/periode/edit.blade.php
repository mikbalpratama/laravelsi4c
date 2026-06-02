@extends('main')
@section('title','Edit Fakultas')
@section('content')
        <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama fakultas" class="form-control" value="{{ old ('nama')?? $fakultas->nama }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            
            </div>
            <div class="form-group mb-3">
                <label for="singkatan" class="form-label">Singkatan</label>
                <input type="text" class="form-control" id="singkatan" name="singkatan" placeholder="Masukan singkatan fakultas"  class="form-control" value="{{ old ('singkatan')?? $fakultas->singkatan }}">
                @error('singkatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="dekan" class="form-label">Nama Dekan Fakultas</label>
                <input type="text" class="form-control" id="dekan" name="dekan" placeholder="Masukan nama dekan fakultas"  class="form-control" value="{{ old ('dekan')?? $fakultas->dekan }}">
                @error('dekan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>



    
@endsection
