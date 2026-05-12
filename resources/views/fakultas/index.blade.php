@extends('main')

@section('title','Fakultas')
@section('content')
    

<h1>data Fakultas</h1>
<a href="{{ route("Fakultas.create") }}" class="btn btn-primary mb-3">Tambah Fakultas</a>
<table class="table table-bordered table-hover"> 
    <tr>
        <th>no</th>
        <th>nama fakultas</th>
        <th>singkatan</th>
        <th>dekan</th>



    </tr>
    @foreach($result as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->singkatan }}</td>
        <td>{{ $item->dekan }}</td>

    </tr>
    
@endforeach
</table>

@endsection


