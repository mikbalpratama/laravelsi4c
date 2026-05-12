@extends('main')

@section('title','Periode')
@section('content')
    

<h1>data Periode</h1>
<a href="{{ route("Periode.create") }}" class="btn btn-primary mb-3">Tambah Periode</a>
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

    </tr>
    
@endforeach
</table>

@endsection

