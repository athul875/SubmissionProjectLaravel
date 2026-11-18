<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>
</head>
<body>
    <h1>Tambah Data Jurusan</h1>

    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf

        <div>
            <label>Kode Jurusan</label>
            <input type="text" name="kode" value="{{ old('kode') }}">

            @error('kode')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Nama Jurusan</label>
            <input type="text" name="nama" value="{{ old('nama') }}">

            @error('nama')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('jurusan.index') }}">Kembali</a>
    </form>
</body>
</html>