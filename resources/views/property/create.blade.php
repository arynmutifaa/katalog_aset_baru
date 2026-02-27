<!DOCTYPE html>
<html>
<head>
    <title>Tambah Property</title>
</head>
<body>

<h2>Tambah Property</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form action="{{ route('property.store') }}" method="POST">
    @csrf

    <label>Nama Gedung</label><br>
    <input type="text" name="nama_gedung" required><br><br>

    <label>Alamat</label><br>
    <input type="text" name="alamat" required><br><br>

    <label>Luas Tanah</label><br>
    <input type="text" name="luas_tanah"><br><br>

    <label>Luas Gedung</label><br>
    <input type="text" name="luas_gedung"><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>

</body>
</html>
