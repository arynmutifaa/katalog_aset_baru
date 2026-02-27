<!DOCTYPE html>
<html>
<head>
<title>Tambah Property</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{font-family:Poppins;background:#f4f6f9;padding:40px}
.container{background:white;padding:30px;border-radius:15px;max-width:900px;margin:auto}
input,textarea{width:100%;padding:10px;margin-bottom:15px;border:1px solid #ddd;border-radius:8px}
button{background:#E30613;color:white;padding:10px 20px;border:none;border-radius:8px}
</style>
</head>
<body>

<div class="container">
<h2>Tambah Property</h2>

<form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="nama_gedung" placeholder="Nama Gedung" required>
<textarea name="alamat" placeholder="Alamat"></textarea>

<input type="text" name="luas_tanah" placeholder="Luas Tanah">
<input type="text" name="luas_gedung" placeholder="Luas Gedung">
<input type="text" name="status_tanah" placeholder="Status Tanah">
<input type="text" name="penggunaan_saat_ini" placeholder="Penggunaan Saat Ini">
<input type="text" name="peruntukan" placeholder="Peruntukan">
<input type="text" name="batas_lahan" placeholder="Batas Lahan">
<input type="text" name="properti_sekitar" placeholder="Properti Sekitar">
<input type="text" name="lebar_jalan" placeholder="Lebar Jalan">
<input type="text" name="bentuk_lahan" placeholder="Bentuk Lahan">
<input type="text" name="lebar_lahan" placeholder="Lebar Lahan">
<input type="text" name="kedalaman_lahan" placeholder="Kedalaman Lahan">
<input type="text" name="potensi_pengembangan" placeholder="Potensi Pengembangan">
<input type="text" name="jarak_pusat_kota" placeholder="Jarak dari Pusat Kota">
<input type="text" name="kondisi_lahan" placeholder="Kondisi Lahan">
<input type="text" name="titik_koordinat" placeholder="Titik Koordinat">
<input type="text" name="space_idle" placeholder="Space Idle Gedung">
<input type="text" name="fasilitas" placeholder="Fasilitas">

<label>Upload Multiple Gambar</label>
<input type="file" name="images[]" multiple>

<button type="submit">Simpan Property</button>

</form>
</div>

</body>
</html>