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
            background: linear-gradient(135deg, #f6f8fc, #eef1f6);
        }

        .sidebar {
            width: 280px;
            height: 100vh;
            background: linear-gradient(180deg, #E30613, #8f0209);
            color: white;
            padding: 40px 25px;
            position: fixed;
            box-shadow: 10px 0 40px rgba(0, 0, 0, 0.15);
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

        .main {
            margin-left: 300px;
            padding: 30px 30px 30px 20px;
            width: 100%;
            position: relative;
        }

        .main::before {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1700px;
            height: 1700px;
            background: url('/images/logo.png') no-repeat center;
            background-size: contain;
            opacity: 0.05;
            z-index: 0;
            pointer-events: none;
        }

        .main>* {
            position: relative;
            z-index: 1;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            padding: 22px 30px;
            border-radius: 22px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .navbar h3 {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(90deg, #E30613, #ff4d57);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-buttons {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            gap: 18px;
        }

        .home-btn,
        .login-btn {
            padding: 10px 20px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            background: linear-gradient(135deg, #E30613, #b8040f);
            color: white;
            transition: 0.3s;
        }

        .home-btn:hover,
        .login-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(227, 6, 19, 0.35);
        }

        .cards {
            display: flex;
            gap: 20px;
            margin: 15px 0 25px 0;
            width: 100%;
        }

        .card {
            flex: 1;
            background: white;
            padding: 15px 20px;
            border-radius: 22px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
            border-top: 5px solid #E30613;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .card h4 {
            color: #777;
            margin-bottom: 5px;
            font-size: 15px;
        }

        .card h2 {
            font-size: 28px;
            color: #E30613;
        }

        .property-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 35px;
        }

        .property-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
            transition: 0.4s;
        }

        .property-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.08);
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
            padding: 20px;
        }

        .property-card h4 {
            color: #E30613;
            margin-bottom: 8px;
        }

        .property-card p {
            font-size: 14px;
            color: #777;
        }

        @media(max-width:900px) {
            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
                padding: 30px;
            }

            .cards {
                flex-direction: column;
            }
        }

        @media(max-width:768px) {
            .navbar {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 15px;
                flex-wrap: wrap;
                padding: 22px 20px;
            }

            .navbar h3 {
                font-size: clamp(20px, 3vw, 30px);
                font-weight: 700;
                background: linear-gradient(90deg, #E30613, #ff4d57);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                text-align: center;
            }

            .nav-buttons {
                position: static;
                transform: none;
                margin-top: 10px;
            }
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
                <option value="pasuruan" {{ request('daerah') == 'pasuruan' ? 'selected' : '' }}>
                    Pasuruan
                </option>
                <option value="jember" {{ request('daerah') == 'jember' ? 'selected' : '' }}>
                    Jember
                </option>
                <option value="banyuwangi" {{ request('daerah') == 'banyuwangi' ? 'selected' : '' }}>
                    Banyuwangi
                </option>
                <option value="situbondo" {{ request('daerah') == 'situbondo' ? 'selected' : '' }}>
                    Situbondo & Bondowoso
                </option>
                <option value="lumajang" {{ request('daerah') == 'lumajang' ? 'selected' : '' }}>
                    Lumajang
                </option>
                <option value="probolinggo" {{ request('daerah') == 'probolinggo' ? 'selected' : '' }}>
                    Probolinggo
                </option>
                <option value="sidoarjo" {{ request('daerah') == 'sidoarjo' ? 'selected' : '' }}>
                    Sidoarjo
                </option>
                <option value="jombang" {{ request('daerah') == 'jombang' ? 'selected' : '' }}>
                    Jombang & Mojokerto
                </option>
            </select>
            <button type="submit">Cari</button>
        </form>
    </div>

    <div class="main">
        <div class="navbar">
            <h3>DASHBOARD OVERVIEW</h3>

            <div class="nav-buttons">
                <a href="/" class="home-btn">Back Home</a>
                <a href="{{ route('login') }}" class="login-btn">Login</a>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <h4>Gedung Tersedia</h4>
                <h2>{{ $properties->where('area_id', 'bangunan')->count() }}</h2>
            </div>

            <div class="card">
                <h4>Total Tanah Kosong</h4>
                <h2>{{ $properties->where('area_id', 'tanah_kosong')->count() }}</h2>
            </div>

            <div class="card">
                <h4>Total Property</h4>
                <h2>{{ $properties->count() }}</h2>
            </div>
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
