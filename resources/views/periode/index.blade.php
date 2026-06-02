@extends('main')

@section('title','Periode')
@section('content')
    

<h1>data Periode</h1>
<a href="{{ route("periode.create") }}" class="btn btn-primary mb-3">Tambah Periode</a>
@session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $value }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession
<table class="table table-bordered table-hover"> 
    <tr>
        <th>no</th>
        <th>kode semester</th>
        <th>tahun akademik</th>



    </tr>
    @foreach($result as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->kode_smt }}</td>
        <td>{{ $item->tahun_akademik }}</td>
        <td><form method="POST" action="{{ route('periode.destroy', $item->id) }}">
@csrf
<input name="_method" type="hidden" value="DELETE">
<button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
    data-toggle="tooltip" title='Delete'
    data-nama='{{ $item->kode_smt }}'>Hapus</button>
</form></td>

    </tr>
    
@endforeach
</table>

@endsection

