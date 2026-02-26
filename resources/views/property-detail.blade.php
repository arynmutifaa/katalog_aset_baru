<!DOCTYPE html>
<html>
<head>
    <title>Detail Properti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            background:white;
            padding:30px;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
            max-width:900px;
            margin:auto;
        }

        h2{
            color:#E30613;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table td{
            border:1px solid #ccc;
            padding:12px;
        }

        table td:first-child{
            font-weight:600;
            background:#f8f8f8;
            width:35%;
        }

        .back{
            display:inline-block;
            margin-bottom:20px;
            background:#E30613;
            color:white;
            padding:8px 15px;
            border-radius:8px;
            text-decoration:none;
        }
    </style>
</head>
<body>

<div class="container">

    <a href="{{ route('dashboard') }}" class="back">← Kembali</a>

    <h2>Detail Properti</h2>

    <table>
        <tr><td>ALAMAT</td><td>{{ $property->alamat }}</td></tr>
        <tr><td>LUAS TANAH</td><td>{{ $property->luas_tanah }}</td></tr>
        <tr><td>LUAS GEDUNG</td><td>{{ $property->luas_gedung }}</td></tr>
        <tr><td>STATUS TANAH</td><td>{{ $property->status_tanah }}</td></tr>
        <tr><td>PENGGUNAAN</td><td>{{ $property->penggunaan_saat_ini }}</td></tr>
        <tr><td>PERUNTUKAN</td><td>{{ $property->peruntukan }}</td></tr>
        <tr><td>BATAS LAHAN</td><td>{{ $property->batas_lahan }}</td></tr>
        <tr><td>PROPERTI SEKITAR</td><td>{{ $property->properti_sekitar }}</td></tr>
        <tr><td>LEBAR JALAN</td><td>{{ $property->lebar_jalan }}</td></tr>
        <tr><td>BENTUK LAHAN</td><td>{{ $property->bentuk_lahan }}</td></tr>
        <tr><td>LEBAR LAHAN</td><td>{{ $property->lebar_lahan }}</td></tr>
        <tr><td>KEDALAMAN LAHAN</td><td>{{ $property->kedalaman_lahan }}</td></tr>
        <tr><td>POTENSI</td><td>{{ $property->potensi_pengembangan }}</td></tr>
    </table>

</div>

</body>
</html>
