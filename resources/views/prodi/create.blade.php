@extends('main')
@section('title','Tambah Program Studi')
@section('content')
        <form action="{{ route('prodi.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nama" class="form-label">Nama Prodi</label>
                <input type="text" class="form-control" id="nama" name="nama_prodi" placeholder="Masukan nama prodi" class="form-control" value="{{ old ('nama_prodi') }}">
                @error('nama_prodi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            
            </div>
            <div class="form-group mb-3">
                <label for="singkatan" class="form-label">Singkatan</label>
                <input type="text" class="form-control" id="singkatan" name="singkatan" placeholder="Masukan singkatan prodi"  class="form-control" value="{{ old ('singkatan') }}">
                @error('singkatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                <input type="text" class="form-control" id="kaprodi" name="kaprodi" placeholder="Masukan nama kaprodi"  class="form-control" value="{{ old ('kaprodi') }}">
                @error('kaprodi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="fakultas_id" class="form-label">Fakultas</label>
                <select class="form-control" id="fakultas_id" name="fakultas_id">
                    <option value="">Pilih Fakultas</option>
                    @foreach($fakultas as $fak)
                        <option value="{{ $fak->id }}" {{ old('fakultas_id') == $fak->id ? 'selected' : '' }}>{{ $fak->nama }}</option>
                    @endforeach
                </select>
                @error('fakultas_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>



    
@endsection
