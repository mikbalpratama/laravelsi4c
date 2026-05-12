@extends('main')
@section('title','Tambah Fakultas')
@section('content')
        <form action="{{ route('Fakultas.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama fakultas" class="form-control" value="{{ old ('nama') }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            
            </div>
            <div class="form-group mb-3">
                <label for="singkatan" class="form-label">Singkatan</label>
                <input type="text" class="form-control" id="singkatan" name="singkatan" placeholder="Masukan singkatan fakultas"  class="form-control" value="{{ old ('singkatan') }}">
                @error('singkatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="dekan" class="form-label">Nama Dekan Fakultas</label>
                <input type="text" class="form-control" id="dekan" name="dekan" placeholder="Masukan nama dekan fakultas"  class="form-control" value="{{ old ('dekan') }}">
                @error('dekan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>



    
@endsection
