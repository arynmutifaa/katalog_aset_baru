<!DOCTYPE html>
<html>

<head>
    <title>Dashboard - Telkom Property</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            background: linear-gradient(135deg,#f6f8fc,#eef1f6);
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 280px;
            height: 100vh;
            background: linear-gradient(180deg,#E30613,#8f0209);
            color: white;
            padding: 40px 25px;
            position: fixed;
            box-shadow: 10px 0 40px rgba(0,0,0,0.15);
        }

        .sidebar h4 {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .sidebar input,
        .sidebar select {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            margin-bottom: 18px;
            font-size: 14px;
            outline: none;
        }

        .sidebar button {
            padding: 14px;
            border-radius: 12px;
            border: none;
            background: white;
            color: #E30613;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        .sidebar button:hover {
            transform: translateY(-3px);
        }

        /* ===== MAIN ===== */
        .main {
            margin-left: 280px;
            padding: 50px;
            width: 100%;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: rgba(255,255,255,0.75);
            backdrop-filter: blur(12px);
            padding: 28px 35px;
            border-radius: 22px;
            margin-bottom: 45px;
            position: relative;
            display: flex;
            align-items: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }

        .navbar h3 {
            font-size: 26px;
            font-weight: 700;
            background: linear-gradient(90deg,#E30613,#ff4d57);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .nav-buttons {
            margin-left: auto;
        }

        .login-btn {
            padding: 12px 22px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            background: linear-gradient(135deg,#E30613,#b8040f);
            color: white;
            transition: 0.3s;
        }

        .login-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(227,6,19,0.35);
        }

        /* ===== CARDS ===== */
        .cards {
            display: flex;
            gap: 25px;
            margin-bottom: 60px;
            justify-content: center;
        }

        .card {
            width: 250px;
            background: white;
            padding: 25px;
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.05);
            border-top: 5px solid #E30613;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card h4 {
            color: #777;
            margin-bottom: 15px;
        }

        .card h2 {
            font-size: 42px;
            color: #E30613;
        }

        /* ===== PROPERTY GRID ===== */
        .property-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 35px;
        }

        .property-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.05);
            transition: 0.4s;
        }

        .property-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.08);
        }

        .property-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: 0.4s;
        }

        .property-card:hover img {
            transform: scale(1.1);
        }

        .property-card .info {
            padding: 28px;
        }

        .property-card h4 {
            color: #E30613;
            margin-bottom: 10px;
        }

        .property-card p {
            font-size: 14px;
            color: #777;
        }

        @media(max-width:900px) {
            .sidebar { display: none; }
            .main { margin-left: 0; padding: 30px; }
            .cards { flex-direction: column; }
        }
    </style>
</head>

<body>

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
        <div class="nav-buttons">
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>
    </div>

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

    <div class="navbar">
        <h3>Daftar Aset Properti JTT</h3>
    </div>

    <div class="property-grid">
        @foreach ($properties as $property)
            <a href="{{ route('property.show', $property->id) }}" style="text-decoration:none;color:inherit;">
                <div class="property-card">
                    @php $images = json_decode($property->gambar); @endphp

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
