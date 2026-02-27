<!DOCTYPE html>
<html>
<head>
    <title>Edit Properti</title>
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
            max-width:800px;
            margin:auto;
        }

        h2{
            color:#E30613;
            margin-bottom:25px;
        }

        label{
            font-weight:600;
            display:block;
            margin-top:15px;
            margin-bottom:5px;
        }

        input{
            width:100%;
            padding:10px;
            border-radius:8px;
            border:1px solid #ccc;
        }

        .btn{
            margin-top:25px;
            padding:10px 18px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            font-size:14px;
        }

        .update{
            background:#E30613;
            color:white;
        }

        .back{
            background:#6c757d;
            color:white;
            text-decoration:none;
            padding:10px 18px;
            border-radius:8px;
            margin-left:10px;
        }

        .top{
            display:flex;
            gap:10px;
            margin-bottom:20px;
        }

        .success{
            background:#d4edda;
            padding:10px;
            border-radius:6px;
            color:#155724;
            margin-bottom:15px;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Edit Properti</h2>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('property.update', $property->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Gedung</label>
        <input type="text" name="nama_gedung"
               value="{{ $property->nama_gedung }}" required>

        <label>Alamat</label>
        <input type="text" name="alamat"
               value="{{ $property->alamat }}" required>

        <label>Luas Tanah</label>
        <input type="text" name="luas_tanah"
               value="{{ $property->luas_tanah }}">

        <label>Luas Gedung</label>
        <input type="text" name="luas_gedung"
               value="{{ $property->luas_gedung }}">

        <label>Status Tanah</label>
        <input type="text" name="status_tanah"
               value="{{ $property->status_tanah }}">

        <label>Penggunaan Saat Ini</label>
        <input type="text" name="penggunaan_saat_ini"
               value="{{ $property->penggunaan_saat_ini }}">

        <label>Peruntukan</label>
        <input type="text" name="peruntukan"
               value="{{ $property->peruntukan }}">

        <label>Batas Lahan</label>
        <input type="text" name="batas_lahan"
               value="{{ $property->batas_lahan }}">

        <label>Properti Sekitar</label>
        <input type="text" name="properti_sekitar"
               value="{{ $property->properti_sekitar }}">

        <label>Lebar Jalan</label>
        <input type="text" name="lebar_jalan"
               value="{{ $property->lebar_jalan }}">

        <label>Bentuk Lahan</label>
        <input type="text" name="bentuk_lahan"
               value="{{ $property->bentuk_lahan }}">

        <label>Lebar Lahan</label>
        <input type="text" name="lebar_lahan"
               value="{{ $property->lebar_lahan }}">

        <label>Kedalaman Lahan</label>
        <input type="text" name="kedalaman_lahan"
               value="{{ $property->kedalaman_lahan }}">

        <label>Potensi Pengembangan</label>
        <input type="text" name="potensi_pengembangan"
               value="{{ $property->potensi_pengembangan }}">

        <div style="margin-top:25px;">
            <button type="submit" class="btn update">Update Data</button>
            <a href="{{ route('property.show', $property->id) }}" class="back">
                Batal
            </a>
        </div>

    </form>

</div>

</body>
</html>
