```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#f4f6f9;">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0">Tambah Property</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Nama Gedung</label>
                        <input type="text" name="nama_gedung" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Bangunan / Tanah Kosong</label>
                        <select name="area_id" class="form-select">
                            <option value="">-- Pilih Jenis --</option>
                            <option value="bangunan">Bangunan</option>
                            <option value="tanah_kosong">Tanah Kosong</option>
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Luas Tanah</label>
                        <input type="text" name="luas_tanah" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Luas Gedung</label>
                        <input type="text" name="luas_gedung" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Status Tanah</label>
                        <input type="text" name="status_tanah" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Penggunaan Saat Ini</label>
                        <input type="text" name="penggunaan_saat_ini" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Peruntukan</label>
                        <input type="text" name="peruntukan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Batas Lahan</label>
                        <input type="text" name="batas_lahan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Properti Sekitar</label>
                        <input type="text" name="properti_sekitar" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Lebar Jalan</label>
                        <input type="text" name="lebar_jalan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Bentuk Lahan</label>
                        <input type="text" name="bentuk_lahan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Lebar Lahan</label>
                        <input type="text" name="lebar_lahan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Kedalaman Lahan</label>
                        <input type="text" name="kedalaman_lahan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Potensi Pengembangan</label>
                        <input type="text" name="potensi_pengembangan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Jarak ke Pusat Kota</label>
                        <input type="text" name="jarak_pusat_kota" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Kondisi Lahan</label>
                        <input type="text" name="kondisi_lahan" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Titik Koordinat</label>
                        <input type="text" name="titik_koordinat" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Space Idle Gedung</label>
                        <input type="text" name="space_idle_gedung" class="form-control">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Fasilitas</label>
                        <textarea name="fasilitas" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Upload Gambar (bisa lebih dari 1)</label>
                        <input type="file" name="gambar[]" class="form-control" multiple>
                    </div>

                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-danger">Simpan</button>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>
```
