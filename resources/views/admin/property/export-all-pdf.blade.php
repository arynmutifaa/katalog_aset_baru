<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Export Semua Aset</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 10px;
            color: #222;
            padding: 15px 20px;
        }

        .page {
            min-height: 100%;
        }

        .header {
            margin-bottom: 8px;
            border-bottom: 3px solid #E30613;
            padding-bottom: 8px;
        }

        .header h1 {
            font-size: 14px;
            color: #E30613;
        }

        .header p {
            font-size: 9px;
            color: #777;
            margin-top: 2px;
        }

        h2 {
            font-size: 12px;
            color: #E30613;
            margin-bottom: 2px;
            margin-top: 8px;
        }

        .subtitle {
            font-size: 9px;
            color: #777;
            margin-bottom: 8px;
        }

        .images {
            margin-bottom: 8px;
        }

        table.info {
            width: 100%;
            border-collapse: collapse;
            margin-top: 6px;
        }

        table.info td {
            border: 1px solid #ddd;
            padding: 4px 8px;
        }

        table.info td:first-child {
            font-weight: bold;
            background: #f8f8f8;
            width: 40%;
        }

        .footer {
            margin-top: 8px;
            font-size: 8px;
            color: #aaa;
            text-align: right;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>

    @foreach ($properties as $property)
        <div class="page">

            <div class="header">
                <h1>Katalog Aset Gedung</h1>
                <p>
                    Dokumen ini digenerate secara otomatis pada
                    {{ now('Asia/Jakarta')->format('d M Y, H:i') }} WIB
                </p>
            </div>

            <h2>{{ $property->nama_gedung }}</h2>
            <p class="subtitle">Detail Informasi Aset Gedung</p>

            @php
                $images = [];

                if ($property->gambar) {
                    $images = is_array($property->gambar) ? $property->gambar : json_decode($property->gambar, true);

                    $images = $images ?? [];
                }
            @endphp

            @if (count($images) > 0)
                @php
                    $total = count($images);

                    if ($total <= 2) {
                        $cols = $total;
                    } elseif ($total % 2 === 0 && $total % 3 !== 0) {
                        $cols = 2;
                    } else {
                        $cols = 3;
                    }

                    $colWidth = round(100 / $cols);
                @endphp

                <div class="images">
                    <table width="100%" style="border-collapse:collapse;">
                        @foreach (array_chunk($images, $cols) as $row)
                            <tr>
                                @foreach ($row as $img)
                                    @php
                                        $imgPath = public_path('storage/' . $img);
                                    @endphp

                                    <td width="{{ $colWidth }}%" style="padding:2px;">
                                        <div
                                            style="
                                    width:100%;
                                    height:144px;
                                    background-image:url('{{ $imgPath }}');
                                    background-size:cover;
                                    background-position:center;
                                    background-repeat:no-repeat;
                                    border-radius:3px;
                                ">
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table>
                </div>
            @endif

            <table class="info">

                <tr>
                    <td>BAGUNAN/TANAH KOSONG</td>
                    <td>{{ $property->area_id ?? '-' }}</td>
                </tr>

                <tr>
                    <td>ALAMAT</td>
                    <td>{{ $property->alamat ?? '-' }}</td>
                </tr>

                <tr>
                    <td>LUAS TANAH</td>
                    <td>{{ $property->luas_tanah ?? '-' }}</td>
                </tr>

                <tr>
                    <td>LUAS GEDUNG</td>
                    <td>{{ $property->luas_gedung ?? '-' }}</td>
                </tr>

                <tr>
                    <td>STATUS TANAH</td>
                    <td>{{ $property->status_tanah ?? '-' }}</td>
                </tr>

                <tr>
                    <td>PENGGUNAAN SAAT INI</td>
                    <td>{{ $property->penggunaan_saat_ini ?? '-' }}</td>
                </tr>

                <tr>
                    <td>PROPERTI SEKITAR</td>
                    <td>{{ $property->properti_sekitar ?? '-' }}</td>
                </tr>

                <tr>
                    <td>LEBAR JALAN</td>
                    <td>{{ $property->lebar_jalan ?? '-' }}</td>
                </tr>

                <tr>
                    <td>POTENSI PENGEMBANGAN</td>
                    <td>{{ $property->potensi_pengembangan ?? '-' }}</td>
                </tr>

                <tr>
                    <td>JARAK KE PUSAT KOTA</td>
                    <td>{{ $property->jarak_pusat_kota ?? '-' }}</td>
                </tr>

                <tr>
                    <td>TITIK KOORDINAT</td>
                    <td>

                        @if ($property->titik_koordinat)
                            @php
                                $mapsUrl =
                                    'https://www.google.com/maps/search/?api=1&query=' . $property->titik_koordinat;

                                $qr = \SimpleSoftwareIO\QrCode\Facades\QrCode::format('svg')
                                    ->size(80)
                                    ->generate($mapsUrl);
                            @endphp

                            <table style="border:none;width:auto;border-collapse:collapse;">
                                <tr>

                                    <td
                                        style="
                                border:none;
                                padding:0;
                                vertical-align:middle;
                                text-align:center;
                            ">
                                        <img src="data:image/svg+xml;base64,{{ base64_encode($qr) }}" width="55"
                                            height="55">

                                        <br>

                                        <span
                                            style="
                                    font-size:7px;
                                    color:#E30613;
                                    font-weight:bold;
                                ">
                                            Scan untuk melihat lokasi
                                        </span>
                                    </td>

                                    <td
                                        style="
                                border:none;
                                padding:0 0 0 8px;
                                vertical-align:middle;
                                font-size:9px;
                                color:#555;
                            ">
                                        {{ $property->titik_koordinat }}
                                    </td>

                                </tr>
                            </table>
                        @else
                            -
                        @endif

                    </td>
                </tr>

                <tr>
                    <td>SPACE IDLE GEDUNG</td>
                    <td>{{ $property->space_idle_gedung ?? '-' }}</td>
                </tr>

                <tr>
                    <td>FASILITAS</td>
                    <td>{{ $property->fasilitas ?? '-' }}</td>
                </tr>

            </table>
            <div class="footer">
                Katalog Aset — Dicetak:
                {{ now()->timezone('Asia/Jakarta')->format('d/m/Y H:i') }} WIB
            </div>

        </div>

        @if (!$loop->last)
            <div class="page-break"></div>
        @endif
    @endforeach

</body>

</html>
