<!DOCTYPE html>
<html>

<head>
    <title>Dashboard - Telkom Property</title>
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
            display: flex;
            background-color: #f4f6f9;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #E30613;
            color: white;
            padding: 20px;
            position: fixed;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 20px;
            font-weight: 600;
        }

        .sidebar input,
        .sidebar select {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
            outline: none;
        }

        .sidebar button {
            width: 100%;
            padding: 10px;
            background: white;
            color: #E30613;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }

        /* MAIN */
        .main {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);

            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .navbar h3 {
            color: #E30613;
            font-weight: 600;
        }

        .login-btn {
            background: #E30613;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;

            position: absolute;
            right: 20px;
        }

        /* SECTION TITLE (SAMA SEPERTI NAVBAR) */
        .section-title {
            background: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .section-title h3 {
            color: #E30613;
            font-weight: 600;
        }

        /* CARDS */
        .cards {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .card h4 {
            margin-bottom: 10px;
            color: #555;
        }

        .card h2 {
            color: #E30613;
        }

        /* PROPERTY */
        .property-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .property-card {
            width: 300px;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .property-card:hover {
            transform: scale(1.03);
        }

        .property-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .property-card .info {
            padding: 15px;
        }

        .property-card h4 {
            margin-bottom: 5px;
        }

        .property-card p {
            color: #777;
            font-size: 14px;
        }

        @media(max-width:768px) {
            .cards {
                flex-direction: column;
            }

            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR DENGAN FILTER -->
    <div class="sidebar">
        <h4>Telkom Property</h4>

        <form method="GET" action="{{ route('dashboard') }}">
            <input type="text" name="search" placeholder="Mencari lokasi...">

            <select name="daerah">
                <option value="">Semua Daerah</option>
                <option value="tanggul">Tanggul</option>
                <option value="pasuruan">Pasuruan</option>
                <option value="jember">Jember</option>
                <option value="banyuwangi">Banyuwangi</option>
                <option value="situbondo">Situbondo</option>
                <option value="bondowoso">Bondowoso</option>
                <option value="lumajang">Lumajang</option>
                <option value="probolinggo">Probolinggo</option>
                <option value="sidoarjo">Sidoarjo</option>
                <option value="pandaan">Pandaan</option>
                <option value="jombang">Jombang</option>
                <option value="mojokerto">Mojokerto</option>
            </select>

            <button type="submit">Cari</button>
        </form>
    </div>

    <div class="main">

        <div class="navbar">
            <h3>Dashboard Overview</h3>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>

        <!-- Statistik -->
        <div class="cards">
            <div class="card">
                <h4>Gedung Tersedia</h4>
                <h2>{{ $properties->count() }}</h2>
            </div>

            <div class="card">
                <h4>Total Tanah Kosong</h4>
                <h2>{{ $properties->count() }}</h2>
            </div>

         <div class="card">
                <h4>Total Property</h4>
                <h2>{{ $properties->count() }}</h2>
            </div>
        </div>

        <!-- TITLE BAR BARU -->
        <div class="section-title">
            <h3>Daftar Aset Properti JTT</h3>
        </div>

        <!-- Property List -->
        <div class="property-grid">
            @foreach ($properties as $property)
                <a href="{{ route('property.show', $property->id) }}" style="text-decoration:none;color:inherit;">

                    <div class="property-card">
                        @php
                            $images = json_decode($property->gambar);
                        @endphp

                        @if ($images && count($images) > 0)
                            <img src="{{ asset('storage/' . $images[0]) }}">
                        @endif
                        <div class="info">
                            <h4>{{ $property->nama_gedung }}</h4>
                            <p>{{ $property->alamat }}</p>
                        </div>
                    </div>

                </a>
            @endforeach
        </div>

    </div>

</body>

</html>
