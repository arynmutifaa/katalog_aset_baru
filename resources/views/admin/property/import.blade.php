<!DOCTYPE html>
<html>
<head>
    <title>Import Property</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Poppins, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(227, 6, 19, 0.09), transparent 34%),
                linear-gradient(135deg, #f7f8fc 0%, #eef1f7 100%);
            padding: 40px;
            margin: 0;
            min-height: 100vh;
            color: #2c2f38;
        }

        .container {
            background: rgba(255, 255, 255, 0.96);
            padding: 34px;
            border-radius: 24px;
            max-width: 720px;
            margin: auto;
            box-shadow: 0 22px 55px rgba(30, 34, 45, 0.13);
            border: 1px solid rgba(255, 255, 255, 0.9);
        }

        .back {
            display: inline-block;
            margin-bottom: 18px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 8px 14px;
            border-radius: 9px;
            transition: 0.25s ease;
            box-shadow: 0 5px 14px rgba(108, 117, 125, 0.25);
        }

        .back:hover {
            background: #5a6268;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 8px 18px rgba(108, 117, 125, 0.35);
        }

        .header {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #E30613, #b8000c);
            color: white;
            padding: 22px 24px;
            border-radius: 18px;
            margin-bottom: 24px;
            font-size: 22px;
            font-weight: 700;
            box-shadow: 0 12px 26px rgba(227, 6, 19, 0.25);
            letter-spacing: 0.2px;
        }

        .header::after {
            content: "";
            position: absolute;
            width: 140px;
            height: 140px;
            right: -45px;
            top: -55px;
            background: rgba(255, 255, 255, 0.18);
            border-radius: 50%;
        }

        .success {
            background: #e8f5e9;
            border: 1px solid #a5d6a7;
            border-left: 5px solid #2e7d32;
            border-radius: 14px;
            padding: 14px 16px;
            color: #2e7d32;
            margin-bottom: 18px;
            font-weight: 600;
            box-shadow: 0 6px 14px rgba(46, 125, 50, 0.12);
        }

        .info {
            background: linear-gradient(135deg, #fffaf0, #fff4d6);
            border: 1px solid #ffe08a;
            border-left: 5px solid #E30613;
            border-radius: 16px;
            padding: 18px;
            margin-bottom: 24px;
            font-size: 14px;
            color: #555;
            line-height: 1.8;
            box-shadow: 0 8px 18px rgba(255, 193, 7, 0.12);
        }

        .info b {
            color: #E30613;
            font-weight: 700;
        }

        .template-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            background: #ffffff;
            border: 1px solid #eceef3;
            border-radius: 18px;
            padding: 18px;
            margin-bottom: 24px;
            box-shadow: 0 10px 26px rgba(30, 34, 45, 0.08);
        }

        .template-text {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #1f222a;
            font-size: 15px;
            font-weight: 700;
        }

        .template-text::before {
            content: "";
            width: 10px;
            height: 10px;
            background: #E30613;
            border-radius: 50%;
            box-shadow: 0 0 0 5px rgba(227, 6, 19, 0.10);
            flex-shrink: 0;
        }

        .btn-download {
            display: inline-block;
            padding: 11px 18px;
            background: linear-gradient(135deg, #2c2f38, #1f222a);
            color: white;
            border-radius: 11px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            text-align: center;
            transition: 0.25s ease;
            box-shadow: 0 8px 18px rgba(44, 47, 56, 0.22);
            white-space: nowrap;
        }

        .btn-download:hover {
            background: linear-gradient(135deg, #444, #2c2f38);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 10px 22px rgba(44, 47, 56, 0.28);
        }

        .divider {
            border: none;
            border-top: 1px solid #eceef3;
            margin: 26px 0;
        }

        .upload-box {
            background: #ffffff;
            border: 1px solid #eceef3;
            border-radius: 18px;
            padding: 20px;
            box-shadow: 0 10px 26px rgba(30, 34, 45, 0.08);
        }

        .section-title {
            font-size: 15px;
            font-weight: 700;
            color: #1f222a;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title::before {
            content: "";
            width: 10px;
            height: 10px;
            background: #E30613;
            border-radius: 50%;
            box-shadow: 0 0 0 5px rgba(227, 6, 19, 0.10);
            flex-shrink: 0;
        }

        input[type=file] {
            width: 100%;
            padding: 16px;
            border: 2px dashed #d7dbe5;
            border-radius: 14px;
            margin-bottom: 18px;
            cursor: pointer;
            font-family: Poppins, sans-serif;
            background: #fafbff;
            color: #555;
            transition: 0.25s ease;
        }

        input[type=file]:hover {
            border-color: #E30613;
            background: #fff7f7;
        }

        input[type=file]:focus {
            outline: none;
            border-color: #E30613;
            box-shadow: 0 0 0 4px rgba(227, 6, 19, 0.08);
        }

        .btn-import {
            background: linear-gradient(135deg, #E30613, #b8000c);
            color: white;
            padding: 14px 28px;
            border: none;
            border-radius: 13px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            font-family: Poppins, sans-serif;
            transition: 0.25s ease;
            box-shadow: 0 10px 22px rgba(227, 6, 19, 0.28);
        }

        .btn-import:hover {
            background: linear-gradient(135deg, #c0000f, #9e000a);
            transform: translateY(-1px);
            box-shadow: 0 12px 26px rgba(227, 6, 19, 0.35);
        }

        @media (max-width: 600px) {
            body {
                padding: 20px;
            }

            .container {
                padding: 24px;
                border-radius: 18px;
            }

            .header {
                font-size: 18px;
                padding: 18px;
            }

            .info {
                font-size: 13px;
            }

            .template-box {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-download {
                width: 100%;
                padding: 12px;
            }
        }
    </style>
</head>

<body>
<div class="container">

    <a href="{{ route('admin.property.create') }}" class="back">Kembali</a>

    <div class="header">Import Data Property</div>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="info">
    Pastikan file Excel kamu memiliki header kolom di baris pertama:<br><br>
    <b>nama_gedung, area_id, alamat, luas_tanah, luas_gedung, status_tanah, penggunaan_saat_ini, properti_sekitar, lebar_jalan, potensi_pengembangan, jarak_pusat_kota, titik_koordinat, space_idle_gedung, fasilitas</b>
</div>

    <div class="template-box">
        <div class="template-text">Step 1 — Template Excel</div>
        <a href="{{ route('admin.property.template') }}" class="btn-download">Download Template</a>
    </div>

    <hr class="divider">

    <div class="upload-box">
        <div class="section-title">Step 2 — Upload File Excel</div>
        <form action="{{ route('admin.property.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" accept=".xlsx,.xls,.csv" required>
            <button type="submit" class="btn-import">Import Sekarang</button>
        </form>
    </div>

</div>
</body>
</html>
