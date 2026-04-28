<h2>data Berita</h2>
@foreach($result as $item)
    {{ $item->judul }}<br/>
    {{ $item->deskripsi }}<br/>
@endforeach