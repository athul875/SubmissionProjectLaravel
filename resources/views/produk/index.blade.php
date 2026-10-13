<h1>Daftar Produk</h1>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    @forelse ($produk as $p)
    <tr>
        <td>{{ $loop -> iteration }}</td>
        <td>{{ $nama }}</td>
        <td>Rp {{ number_format($p['harga'], 0, ',', ',') }}</td>
        <td>
            @if ($p['stok'] > 10) Aman
            @elseif ($p['stok'] > 0) Menipis
            @else Habis
            @endif
        </td>
        <td><a href="{{ route('produk.show', $p['id']) }}">Detail</a></td>
    </tr>
    @empty
    <tr><td colspan="5">Belum ada produk</td></tr>
    @endforelse

    @extends('layout.app')

    @section('title', 'DaftarProduk')

    @section('content')
        <h1>Daftar Produk</h1>
    @endsection

    @push('scripts')
        <script>console.log('produk dimuat');</script>
    @endpush
</table>

