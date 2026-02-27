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
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
            max-width:950px;
            margin:auto;
        }

        h2{
            color:#E30613;
            margin-bottom:10px;
        }

        .subtitle{
            color:#777;
            margin-bottom:25px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table td{
            border:1px solid #e0e0e0;
            padding:12px;
        }

        table td:first-child{
            font-weight:600;
            background:#f8f8f8;
            width:35%;
        }

        .btn{
            display:inline-block;
            padding:8px 15px;
            border-radius:8px;
            text-decoration:none;
            font-size:14px;
            transition:0.2s;
        }

        .back{
            background:#6c757d;
            color:white;
        }

        .edit{
            background:#e4d31c;
            color:black;
        }

        .delete{
            background:#dc3545;
            color:white;
            border:none;
            cursor:pointer;
        }

        .btn:hover{
            opacity:0.85;
        }

        .success{
            background:#d4edda;
            padding:10px;
            margin-bottom:15px;
            border-radius:6px;
            color:#155724;
        }

        .top-buttons{
            display:flex;
            gap:10px;
            margin-bottom:20px;
        }

        .image-box{
            margin-bottom:20px;
            text-align:center;
        }

        .image-box img{
            width:100%;
            max-height:300px;
            object-fit:cover;
            border-radius:12px;
        }
    </style>
</head>
<body>

<div class="container">

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="top-buttons">
        <a href="{{ route('admin.dashboard') }}" class="btn back">Kembali</a>

        <a href="{{ route('property.edit', $property->id) }}" class="btn edit">
            Edit
        </a>

        <form action="{{ route('property.destroy', $property->id) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn delete">
                Hapus
            </button>
        </form>
    </div>

    <h2>{{ $property->nama_gedung }}</h2>
    <div class="subtitle">Detail Informasi Aset Gedung</div>

    {{-- Gambar Property --}}
    @if($property->gambar)
        <div class="image-box">
            <img src="{{ asset($property->gambar) }}" alt="Property Image">
        </div>
    @endif

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
