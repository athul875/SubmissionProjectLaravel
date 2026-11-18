<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{route('matakuliah.create') }}">Tambah Mata Kuliah</a>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliahs as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->kode_matakuliah }}</td>
                    <td>{{ $mk->nama_matakuliah }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td><a href="{{ url('/matakuliah/'. $mk->id) }}">Detail</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Belum ada Data Jurusan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
