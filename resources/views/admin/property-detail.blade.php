<!DOCTYPE html>
<html>

<head>
    <title>Detail Properti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f6f9;
            padding: 40px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            max-width: 950px;
            margin: auto;
        }

        h2 {
            color: #E30613;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table td {
            border: 1px solid #e0e0e0;
            padding: 12px;
        }

        table td:first-child {
            font-weight: 600;
            background: #f8f8f8;
            width: 35%;
        }

        .btn {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
        }

        .back {
            background: #6c757d;
            color: white;
        }

        .edit {
            background: #ffc107;
            color: black;
        }

        .delete {
            background: #dc3545;
            color: white;
            border: none;
        }

        .top-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .image-box {
            text-align: center;
            margin-bottom: 25px;
            width: 100%;
            max-width: 1000px;
            /* bikin slider lebih besar */
            margin: auto;
        }

        .image-box img {
            width: 100%;
            border-radius: 12px;
        }

        .slider {
            width: 100%;
            aspect-ratio: 16 / 9;
            overflow: hidden;
        }

        .slide {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
            border-radius: 14px;
        }

        .slider-controls {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
        }

        .slider-controls button {
            padding: 12px 25px;
            font-size: 40px;
            background: #ffffff;
            color: rgb(0, 0, 0);
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .slider-controls button:hover {
            background: #d6d6d6;
        }

        @media (max-width:768px) {
            body {
                padding: 20px;
            }

            .container {
                padding: 20px;
            }

            table td {
                font-size: 14px;
            }
        }
    </style>
</head>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = (i === index) ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        if (slides.length > 0) {
            showSlide(0);
        }

        window.nextSlide = nextSlide;
        window.prevSlide = prevSlide;

    });
</script>

<body>

    <div class="container">

        <div class="top-buttons">
            <a href="{{ route('admin.dashboard') }}" class="btn back">Kembali</a>
            <a href="{{ route('admin.property.edit', $property->id) }}" class="btn edit">Edit</a>

            <form action="{{ route('admin.property.destroy', $property->id) }}" method="POST"
                onsubmit="return confirm('Yakin hapus data?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn delete">Hapus</button>
            </form>
        </div>

        <h2>{{ $property->nama_gedung }}</h2>
        <div class="subtitle">Detail Informasi Aset Gedung</div>

        @if ($property->gambar)
            @php $images = json_decode($property->gambar); @endphp

            <div class="image-box">
                <div class="slider">
                    @foreach ($images as $img)
                        <img src="{{ asset('storage/' . $img) }}" class="slide">
                    @endforeach
                </div>

                <div class="slider-controls">
                    <button onclick="prevSlide()">‹</button>
                    <button onclick="nextSlide()">›</button>
                </div>
            </div>
        @endif
        <table>
            <tr>
                <td>BAGUNAN/TANAH KOSONG
                </td>
                <td>{{ $property->area_id }}</td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>{{ $property->alamat }}</td>
            </tr>
            <tr>
                <td>LUAS TANAH</td>
                <td>{{ $property->luas_tanah }}</td>
            </tr>
            <tr>
                <td>LUAS GEDUNG</td>
                <td>{{ $property->luas_gedung }}</td>
            </tr>
            <tr>
                <td>STATUS TANAH</td>
                <td>{{ $property->status_tanah }}</td>
            </tr>
            <tr>
                <td>PENGGUNAAN SAAT INI</td>
                <td>{{ $property->penggunaan_saat_ini }}</td>
            </tr>
            <tr>
                <td>PERUNTUKAN</td>
                <td>{{ $property->peruntukan }}</td>
            </tr>
            <tr>
                <td>BATAS LAHAN</td>
                <td>{{ $property->batas_lahan }}</td>
            </tr>
            <tr>
                <td>PROPERTI SEKITAR</td>
                <td>{{ $property->properti_sekitar }}</td>
            </tr>
            <tr>
                <td>LEBAR JALAN</td>
                <td>{{ $property->lebar_jalan }}</td>
            </tr>
            <tr>
                <td>BENTUK LAHAN</td>
                <td>{{ $property->bentuk_lahan }}</td>
            </tr>
            <tr>
                <td>LEBAR LAHAN</td>
                <td>{{ $property->lebar_lahan }}</td>
            </tr>
            <tr>
                <td>KEDALAMAN LAHAN</td>
                <td>{{ $property->kedalaman_lahan }}</td>
            </tr>
            <tr>
                <td>POTENSI PENGEMBANGAN</td>
                <td>{{ $property->potensi_pengembangan }}</td>
            </tr>
            <tr>
                <td>JARAK KE PUSAT KOTA</td>
                <td>{{ $property->jarak_pusat_kota }}</td>
            </tr>
            <tr>
                <td>KONDISI LAHAN</td>
                <td>{{ $property->kondisi_lahan }}</td>
            </tr>
            <tr>
                <td>TITIK KOORDINAT</td>
                <td>{{ $property->titik_koordinat }}</td>
            </tr>
            <tr>
                <td>SPACE IDLE GEDUNG</td>
                <td>{{ $property->space_idle_gedung }}</td>
            </tr>
            <tr>
                <td>FASILITAS</td>
                <td>{{ $property->fasilitas }}</td>
            </tr>
        </table>

    </div>

</body>

</html>
