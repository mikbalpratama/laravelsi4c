@extends('main')

@section('title','Fakultas')
@section('content')
    

<h1>data Fakultas</h1>
<a href="{{ route("fakultas.create") }}" class="btn btn-primary mb-3">Tambah Fakultas</a>
@session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $value }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession
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
        <td>
            <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-warning btn-rounded">Edit</a>
            <form method="POST" action="{{ route('fakultas.destroy', $item->id) }}">
@csrf
<input name="_method" type="hidden" value="DELETE">
<button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
    data-toggle="tooltip" title='Delete'
    data-nama='{{ $item->nama }}'>Hapus</button>
</form>
        </td>

    </tr>
    
@endforeach
</table>

@endsection


