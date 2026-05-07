<!DOCTYPE html>
<html>
<head>
    <title>Import Property</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: Poppins; background: #f4f6f9; padding: 40px; }
        .container { background: white; padding: 30px; border-radius: 15px; max-width: 600px; margin: auto; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .header { background: #E30613; color: white; padding: 16px 20px; border-radius: 10px; margin-bottom: 24px; font-size: 20px; font-weight: 700; }
        .info { background: #fff8e1; border: 1px solid #ffe082; border-radius: 10px; padding: 16px; margin-bottom: 24px; font-size: 14px; color: #555; line-height: 1.8; }
        .info b { color: #E30613; }
        .section-title { font-size: 14px; font-weight: 700; color: #2c2f38; margin-bottom: 10px; }

        .btn-download {
            display: block;
            width: 100%;
            padding: 12px;
            background: #2c2f38;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 24px;
        }
        .btn-download:hover { background: #444; color: white; }

        .divider { border: none; border-top: 1px solid #eee; margin: 24px 0; }

        input[type=file] {
            width: 100%;
            padding: 10px;
            border: 2px dashed #ddd;
            border-radius: 8px;
            margin-bottom: 16px;
            cursor: pointer;
            font-family: Poppins;
        }
        .btn-import {
            background: #E30613;
            color: white;
            padding: 12px 28px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            font-family: Poppins;
        }
        .btn-import:hover { background: #c0000f; }
        .success { background: #e8f5e9; border: 1px solid #a5d6a7; border-radius: 10px; padding: 14px; color: #2e7d32; margin-bottom: 16px; font-weight: 600; }
        .back { display: inline-block; margin-bottom: 16px; color: #666; text-decoration: none; font-size: 14px; }
        .back:hover { color: #E30613; }
    </style>
</head>
<body>
<div class="container">

    <a href="{{ route('admin.property.create') }}" class="back">← Kembali</a>

    <div class="header">Import Data Property dari Excel</div>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="info">
        Pastikan file Excel kamu memiliki header kolom di baris pertama:<br><br>
        <b>nama_gedung, alamat, luas_tanah, luas_gedung, status_tanah, penggunaan_saat_ini, peruntukan, batas_lahan, properti_sekitar, lebar_jalan, bentuk_lahan, lebar_lahan, kedalaman_lahan, potensi_pengembangan, jarak_pusat_kota, kondisi_lahan, titik_koordinat, space_idle_gedung, fasilitas</b>
    </div>

    <!-- DOWNLOAD TEMPLATE -->
    <div class="section-title">Step 1 — Template Exel</div>
    <a href="{{ route('admin.property.template') }}" class="btn-download">Download Template Excel</a>

    <hr class="divider">

    <!-- UPLOAD & IMPORT -->
    <div class="section-title">Step 2 — Upload File Excel </div>
    <form action="{{ route('admin.property.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".xlsx,.xls,.csv" required>
        <button type="submit" class="btn-import">Import Sekarang</button>
    </form>

</div>
</body>
</html>
