<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile - Telkom Property</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f4f6fb;
            color:#222;
        }

        .navbar{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            z-index:1000;
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:14px 60px;
            background: rgba(44,47,56,0.88);
            backdrop-filter: blur(10px);
            border-bottom:1px solid rgba(255,255,255,0.08);
        }

        .nav-left{
            display:flex;
            align-items:center;
            gap:12px;
        }

        .nav-logo{
            height:42px;
        }

        .logo-text{
            color:white;
            font-size:18px;
            font-weight:600;
        }

        .nav-btn{
            display:inline-block;
            padding:10px 22px;
            border-radius:30px;
            background:#E30613;
            color:white;
            text-decoration:none;
            font-size:14px;
            font-weight:600;
            transition:0.3s;
        }

        .nav-btn:hover{
            transform:translateY(-2px);
            box-shadow:0 8px 20px rgba(227,6,19,0.35);
        }

        .company-page{
            min-height:100vh;
            padding:120px 60px 60px;
            background:
                linear-gradient(
                    135deg,
                    rgba(19,23,34,0.90) 0%,
                    rgba(22,26,38,0.88) 45%,
                    rgba(123,10,19,0.82) 100%
                ),
                url("{{ asset('images/gambar1.jpeg') }}") center center / cover no-repeat;
        }

        .company-wrapper{
            max-width:1250px;
            margin:0 auto;
            display:grid;
            grid-template-columns: 0.95fr 1.35fr;
            gap:28px;
            align-items:stretch;
        }

        .company-left{
            background: rgba(255,255,255,0.10);
            border:1px solid rgba(255,255,255,0.12);
            border-radius:28px;
            padding:40px 35px;
            color:white;
            box-shadow:0 18px 40px rgba(0,0,0,0.18);
            backdrop-filter: blur(10px);
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .company-badge{
            display:inline-flex;
            align-items:center;
            gap:8px;
            width:fit-content;
            padding:10px 16px;
            border-radius:999px;
            background:rgba(255,255,255,0.14);
            color:white;
            font-size:13px;
            font-weight:600;
            margin-bottom:22px;
        }

        .company-left h1{
            font-size:54px;
            line-height:1.1;
            font-weight:800;
            margin-bottom:20px;
        }

        .mini-line{
            width:80px;
            height:5px;
            border-radius:10px;
            background:#E30613;
            margin:20px 0 24px;
        }

        .company-right{
            background: rgba(255,255,255,0.96);
            border-radius:28px;
            padding:30px;
            box-shadow:0 18px 40px rgba(0,0,0,0.18);
        }

        .header-box{
            display:flex;
            align-items:flex-start;
            gap:16px;
            padding-bottom:22px;
            border-bottom:1px solid #ececec;
            margin-bottom:24px;
        }

        .header-number{
            min-width:60px;
            height:60px;
            border-radius:18px;
            background:#E30613;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:20px;
            font-weight:700;
            box-shadow:0 8px 18px rgba(227,6,19,0.22);
        }

        .header-text h2{
            font-size:30px;
            color:#2c2f38;
            margin-bottom:8px;
            font-weight:800;
        }

        .content-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:18px;
        }

        .info-card{
            background:#f8f9fc;
            border:1px solid #eceef5;
            border-radius:22px;
            padding:22px;
        }

        .info-card h3{
            font-size:22px;
            color:#2c2f38;
            margin-bottom:12px;
            font-weight:700;
        }

        .info-card p,
        .info-card li{
            font-size:15px;
            color:#666;
            line-height:1.9;
        }

        .info-card ul{
            padding-left:20px;
        }

        .full-width{
            grid-column:1 / -1;
        }

        @media(max-width:1100px){
            .company-wrapper{
                grid-template-columns:1fr;
            }

            .company-left h1{
                font-size:42px;
            }
        }

        @media(max-width:768px){
            .navbar{
                padding:12px 20px;
                flex-direction:column;
                align-items:flex-start;
                gap:12px;
            }

            .company-page{
                padding:120px 20px 40px;
            }

            .company-left,
            .company-right{
                padding:22px;
            }

            .company-left h1{
                font-size:34px;
            }

            .content-grid{
                grid-template-columns:1fr;
            }

            .header-box{
                flex-direction:column;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="nav-left">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="nav-logo">
            <div class="logo-text">Telkom Property Sidoarjo</div>
        </div>

        <a href="{{ route('katalog.aset') }}" class="nav-btn">Back</a>
    </div>

    <section class="company-page">
        <div class="company-wrapper">

            <div class="company-left">
                <div class="company-badge">01 • Company Profile</div>
                <h1>ABOUT US</h1>
                <div class="mini-line"></div>
            </div>

            <div class="company-right">
                <div class="header-box">
                    <div class="header-number">01</div>
                    <div class="header-text">
                        <h2>Company Profile</h2>
                    </div>
                </div>

                <div class="content-grid">
                    <div class="info-card">
                        <h3>Profil Perusahaan</h3>
                        <p>
                            Telkom Property merupakan bagian dari ekosistem Telkom
                            yang berfokus pada pengelolaan properti, aset, fasilitas,
                            dan layanan pendukung perusahaan secara profesional.
                        </p>
                    </div>

                    <div class="info-card">
                        <h3>Gambaran Umum</h3>
                        <p>
                            Perusahaan hadir untuk mendukung optimalisasi aset dan
                            properti melalui pengelolaan yang terintegrasi, efisien,
                            dan bernilai tambah bagi perusahaan maupun mitra.
                        </p>
                    </div>

                    <div class="info-card">
                        <h3>Visi</h3>
                        <p>
                            Menjadi perusahaan pengelola properti dan aset yang unggul,
                            adaptif, dan mampu memberikan kontribusi strategis terhadap
                            pengembangan bisnis perusahaan.
                        </p>
                    </div>

                    <div class="info-card">
                        <h3>Misi</h3>
                        <ul>
                            <li>Mengelola aset dan properti secara efektif, profesional, dan berkelanjutan.</li>
                            <li>Meningkatkan nilai guna dan nilai ekonomi aset perusahaan.</li>
                            <li>Mendukung kebutuhan bisnis melalui layanan properti yang terintegrasi.</li>
                            <li>Membangun kerja sama yang produktif dengan berbagai mitra strategis.</li>
                        </ul>
                    </div>

                    <div class="info-card full-width">
                        <h3>Peran Telkom Property</h3>
                        <p>
                            Telkom Property berperan dalam mendukung pengelolaan fasilitas,
                            pemanfaatan aset, pengembangan properti, dan penyediaan layanan
                            yang menunjang efektivitas operasional serta pertumbuhan bisnis.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
