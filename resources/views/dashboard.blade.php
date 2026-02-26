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

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #E30613;
            color: white;
            padding: 20px;
            position: fixed;
        }

        .sidebar h4 {
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 15px 0;
            padding: 10px;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Main */
        .main {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }

        /* Navbar */
        .navbar {
            background: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h3 {
            color: #E30613;
        }

        .login-btn {
            background: #E30613;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
        }

        /* Cards Statistik */
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.08);
        }

        .card h4 {
            margin-bottom: 10px;
            color: #555;
        }

        .card h2 {
            color: #E30613;
        }

        /* Property Section */
        .property-section {
            margin-top: 20px;
        }

        .property-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .property-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .property-card:hover {
            transform: scale(1.03);
        }

        /* FOTO */
        .property-card img {
            width: 100%;
            height: 180px;
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

        @media(max-width:768px){
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

<div class="sidebar">
    <h4>Telkom Property</h4>
    <a href="{{ route('dashboard') }}">Dashboard Overview</a>
</div>

<div class="main">

    <div class="navbar">
        <h3>Dashboard Overview</h3>
        <a href="{{ route('login') }}" class="login-btn">Login</a>
    </div>

    <!-- Statistik -->
    <div class="cards">
        <div class="card">
            <h4>Total Properti</h4>
            <h2>{{ $properties->count() }}</h2>
        </div>

        <div class="card">
            <h4>Properti Tersedia</h4>
            <h2>{{ $properties->count() }}</h2>
        </div>

        <div class="card">
            <h4>Total Transaksi</h4>
            <h2>230</h2>
        </div>
    </div>

    <!-- Property List -->
    <div class="property-section">
        <h3 style="margin-bottom:15px;">Properti Terbaru</h3>

        <div class="property-grid">

            @foreach($properties as $property)
                <a href="{{ route('property.show', $property->id) }}"
                   style="text-decoration:none;color:inherit;">

                    <div class="property-card">

                        <!-- FOTO DARI DATABASE -->
                        <img src="{{ asset($property->gambar) }}" alt="Property">

                        <div class="info">
                            <h4>{{ $property->alamat }}</h4>
                            <p>Luas Tanah: {{ $property->luas_tanah }}</p>
                        </div>

                    </div>

                </a>
            @endforeach

        </div>
    </div>

</div>

</body>
</html>
