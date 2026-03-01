<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#f4f6f9;">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-danger text-dark">
                <h4 class="mb-0">Edit Property</h4>
            </div>

            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.property.update', $property->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Nama Gedung</label>
                            <input type="text" name="nama_gedung" class="form-control"
                                value="{{ $property->nama_gedung }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status Bangunan</label>
                            <input type="text" name="area_id" class="form-control" value="{{ $property->area_id }}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control">{{ $property->alamat }}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Luas Tanah</label>
                            <input type="text" name="luas_tanah" class="form-control"
                                value="{{ $property->luas_tanah }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Luas Gedung</label>
                            <input type="text" name="luas_gedung" class="form-control"
                                value="{{ $property->luas_gedung }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status Tanah</label>
                            <input type="text" name="status_tanah" class="form-control"
                                value="{{ $property->status_tanah }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Penggunaan Saat Ini</label>
                            <input type="text" name="penggunaan_saat_ini" class="form-control"
                                value="{{ $property->penggunaan_saat_ini }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Peruntukan</label>
                            <input type="text" name="peruntukan" class="form-control"
                                value="{{ $property->peruntukan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Batas Lahan</label>
                            <input type="text" name="batas_lahan" class="form-control"
                                value="{{ $property->batas_lahan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Properti Sekitar</label>
                            <input type="text" name="properti_sekitar" class="form-control"
                                value="{{ $property->properti_sekitar }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Lebar Jalan</label>
                            <input type="text" name="lebar_jalan" class="form-control"
                                value="{{ $property->lebar_jalan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Bentuk Lahan</label>
                            <input type="text" name="bentuk_lahan" class="form-control"
                                value="{{ $property->bentuk_lahan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Lebar Lahan</label>
                            <input type="text" name="lebar_lahan" class="form-control"
                                value="{{ $property->lebar_lahan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Kedalaman Lahan</label>
                            <input type="text" name="kedalaman_lahan" class="form-control"
                                value="{{ $property->kedalaman_lahan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Potensi Pengembangan</label>
                            <input type="text" name="potensi_pengembangan" class="form-control"
                                value="{{ $property->potensi_pengembangan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Jarak Pusat Kota</label>
                            <input type="text" name="jarak_pusat_kota" class="form-control"
                                value="{{ $property->jarak_pusat_kota }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Kondisi Lahan</label>
                            <input type="text" name="kondisi_lahan" class="form-control"
                                value="{{ $property->kondisi_lahan }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Titik Koordinat</label>
                            <input type="text" name="titik_koordinat" class="form-control"
                                value="{{ $property->titik_koordinat }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Space Idle Gedung</label>
                            <input type="text" name="space_idle_gedung" class="form-control"
                                value="{{ $property->space_idle_gedung }}">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Fasilitas</label>
                            <textarea name="fasilitas" class="form-control">{{ $property->fasilitas }}</textarea>
                        </div>

                        {{-- TAMPILKAN SEMUA GAMBAR --}}
                        @if ($property->gambar)
                            <div class="col-md-12 mb-3">
                                @foreach (json_decode($property->gambar) as $img)
                                    <img src="{{ asset('storage/' . $img) }}" width="150" class="me-2 mb-2">
                                @endforeach
                            </div>
                        @endif

                        {{-- UPLOAD MULTIPLE --}}
                        <div class="col-md-12 mb-3">
                            <label>Ganti / Tambah Gambar</label>
                            <input type="file" name="gambar[]" class="form-control" multiple>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-danger">Update</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
