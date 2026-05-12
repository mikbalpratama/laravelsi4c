@extends('main')
@section('title','Tambah Periode')
@section('content')
        <form action="{{ route('Periode.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="kode_smt" class="form-label">kode_smt</label>
                <input type="text" class="form-control" id="kode_smt" name="kode_smt" placeholder="Masukan kode semester" class="form-control" value="{{ old ('kode_smt') }}">
                @error('kode_smt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            
            </div>
            <div class="form-group mb-3">
                <label for="tahun_akademik" class="form-label">tahun_akademik</label>
                <input type="text" class="form-control" id="tahun_akademik" name="tahun_akademik" placeholder="Masukan tahun akademik periode"  class="form-control" value="{{ old ('tahun_akademik') }}">
                @error('tahun_akademik')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </form>



    
@endsection