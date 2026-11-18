<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Mata Kuliah</title>
    </head>
    <body>
        <h1>Detail mata kuliah</h1>
        <table border="1" cellpadding="6">
            <tr>
                <th>Kode</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Dibuat</th>
                <th>Diperbarui</th>
            </tr>
            <tr>
                <td>{{ $matakuliah->kode_matakuliah }}</td>
                <td>{{ $matakuliah->nama_matakuliah }}</td>
                <td>{{ $matakuliah->sks }}</td>
                <td>{{ $matakuliah->created_at->format('d-m-Y H:i') }}</td>
                <td>{{ $matakuliah->updated_at->format('d-m-Y H:i') }}</td>
            </tr>
        </table>
    </body>
</html>