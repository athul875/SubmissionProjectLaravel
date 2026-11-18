<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
</head>
<body>
    <h1>Data Jurusan</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{route('jurusan.create') }}">Tambah Jurusan</a>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Jurusan</th>
                <!-- <th>Dibuat</th>
                <th>Detail</th> -->
            </tr>
        </thead>
        <tbody>
            @forelse ($jurusans as $j)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->kode }}</td>
                    <td>{{ $j->nama }}</td>
                    <!-- <td>{{ $j->created_at->format('d-m-Y H:i') }}</td>
                    <td><a href="{{ url('/jurusan/'. $j->id) }}">Detail</a></td> -->
                </tr>
                @empty
                <tr>
                    <td colspan="3">Belum ada Data Jurusan</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
