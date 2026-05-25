<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Export Aset - {{ $property->nama_gedung }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 11px;
            color: #222;
            padding: 20px 25px;
        }

        .header {
            margin-bottom: 12px;
            border-bottom: 3px solid #E30613;
            padding-bottom: 10px;
        }
        .header h1 { font-size: 16px; color: #E30613; }
        .header p { font-size: 10px; color: #777; margin-top: 3px; }

        h2 { font-size: 13px; color: #E30613; margin-bottom: 2px; margin-top: 12px; }
        .subtitle { font-size: 10px; color: #777; margin-bottom: 10px; }

        .images { margin-bottom: 12px; }

        /* Foto proporsional — tidak stretch */
        .img-full {
            display: block;
            width: 100%;
            height: auto;
            max-height: 200px;
            border-radius: 6px;
            margin-bottom: 6px;
        }
        .image-grid { width: 100%; border-collapse: collapse; }
        .image-grid td { width: 50%; padding: 3px; vertical-align: top; }
        .image-grid img {
            display: block;
            width: 100%;
            height: auto;
            max-height: 120px;
            border-radius: 5px;
        }

        table.info { width: 100%; border-collapse: collapse; margin-top: 8px; }
        table.info td { border: 1px solid #ddd; padding: 6px 10px; }
        table.info td:first-child { font-weight: bold; background: #f8f8f8; width: 40%; }

        .footer { margin-top: 12px; font-size: 9px; color: #aaa; text-align: right; }
    </style>
</head>
<body>

    <div class="header">
        <h1>Katalog Aset Gedung</h1>
        <p>Dokumen ini digenerate secara otomatis pada {{ date('d M Y, H:i') }} WIB</p>
    </div>

    <h2>{{ $property->nama_gedung }}</h2>
    <p class="subtitle">Detail Informasi Aset Gedung</p>

    @php
        $images = [];
        if ($property->gambar) {
            $images = is_array($property->gambar)
                ? $property->gambar
                : json_decode($property->gambar, true);
            $images = $images ?? [];
        }
    @endphp

    @if (count($images) > 0)
        <div class="images">
            {{-- Foto pertama full width, proporsional --}}
            <img class="img-full" src="{{ public_path('storage/' . $images[0]) }}">

            {{-- Foto sisanya grid 2 kolom --}}
            @if (count($images) > 1)
                @php $rest = array_slice($images, 1); @endphp
                <table class="image-grid">
                    @foreach (array_chunk($rest, 2) as $pair)
                        <tr>
                            @foreach ($pair as $img)
                                <td><img src="{{ public_path('storage/' . $img) }}"></td>
                            @endforeach
                            @if (count($pair) === 1)<td></td>@endif
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    @endif

    <table class="info">
        <tr><td>BAGUNAN/TANAH KOSONG</td><td>{{ $property->area_id ?? '-' }}</td></tr>
        <tr><td>ALAMAT</td><td>{{ $property->alamat ?? '-' }}</td></tr>
        <tr><td>LUAS TANAH</td><td>{{ $property->luas_tanah ?? '-' }}</td></tr>
        <tr><td>LUAS GEDUNG</td><td>{{ $property->luas_gedung ?? '-' }}</td></tr>
        <tr><td>STATUS TANAH</td><td>{{ $property->status_tanah ?? '-' }}</td></tr>
        <tr><td>PENGGUNAAN SAAT INI</td><td>{{ $property->penggunaan_saat_ini ?? '-' }}</td></tr>
        <tr><td>PROPERTI SEKITAR</td><td>{{ $property->properti_sekitar ?? '-' }}</td></tr>
        <tr><td>LEBAR JALAN</td><td>{{ $property->lebar_jalan ?? '-' }}</td></tr>
        <tr><td>POTENSI PENGEMBANGAN</td><td>{{ $property->potensi_pengembangan ?? '-' }}</td></tr>
        <tr><td>JARAK KE PUSAT KOTA</td><td>{{ $property->jarak_pusat_kota ?? '-' }}</td></tr>
        <tr><td>TITIK KOORDINAT</td><td>{{ $property->titik_koordinat ?? '-' }}</td></tr>
        <tr><td>SPACE IDLE GEDUNG</td><td>{{ $property->space_idle_gedung ?? '-' }}</td></tr>
        <tr><td>FASILITAS</td><td>{{ $property->fasilitas ?? '-' }}</td></tr>
    </table>

    <div class="footer">Katalog Aset &mdash; Dicetak: {{ date('d/m/Y H:i') }}</div>

</body>
</html>