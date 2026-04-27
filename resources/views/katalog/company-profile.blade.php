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

        .company-left p{
            font-size:15px;
            line-height:1.8;
            color:rgba(255,255,255,0.86);
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

        .header-text p{
            font-size:15px;
            color:#666;
            line-height:1.8;
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

        /* ===== COMMISSIONERS & BOARD SECTION ===== */
        .leadership-wrapper{
            margin-top:34px;
            display:flex;
            flex-direction:column;
            gap:32px;
        }

        .org-panel{
            position:relative;
            background:#d9d7d7;
            border-radius:18px;
            padding:52px 24px 26px;
            box-shadow:0 12px 26px rgba(0,0,0,0.06);
        }

        .org-title{
            position:absolute;
            top:-22px;
            left:18px;
            width:250px;
            background:#d91f11;
            color:#fff;
            padding:10px 20px;
            border-radius:8px;
            font-size:18px;
            font-weight:700;
            text-align:center;
            box-shadow:0 8px 18px rgba(217,31,17,0.24);
        }

        .org-top{
            display:flex;
            justify-content:center;
            margin-bottom:20px;
        }

        .org-row{
            display:grid;
            gap:22px;
            align-items:start;
        }

        .org-row.four{
            grid-template-columns:repeat(4, 1fr);
        }

        .org-row.three{
            grid-template-columns:repeat(3, 1fr);
            max-width:640px;
            margin:0 auto;
        }

        .person-card{
            text-align:center;
            display:flex;
            flex-direction:column;
            align-items:center;
        }

        .person-photo{
            width:86px;
            height:86px;
            border-radius:50%;
            overflow:hidden;
            background:#f0f0f0;
            margin-bottom:10px;
            box-shadow:0 6px 16px rgba(0,0,0,0.10);
        }

        .person-photo img{
            width:100%;
            height:100%;
            object-fit:cover;
        }

        .person-name{
            font-size:13px;
            font-weight:600;
            color:#222;
            line-height:1.25;
            min-height:34px;
            display:flex;
            align-items:flex-end;
            justify-content:center;
        }

        .person-role{
            margin-top:3px;
            font-size:13px;
            font-weight:700;
            color:#c51d2a;
            line-height:1.35;
        }

        @media(max-width:1100px){
            .company-wrapper{
                grid-template-columns:1fr;
            }

            .company-left h1{
                font-size:42px;
            }

            .org-row.four{
                grid-template-columns:repeat(2, 1fr);
            }

            .org-row.three{
                grid-template-columns:repeat(2, 1fr);
                max-width:100%;
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

            .org-panel{
                padding:48px 16px 22px;
            }

            .org-title{
                width:210px;
                font-size:16px;
                padding:9px 16px;
            }

            .person-photo{
                width:78px;
                height:78px;
            }

            .person-name,
            .person-role{
                font-size:12px;
            }
        }

        @media(max-width:560px){
            .org-row.four,
            .org-row.three{
                grid-template-columns:1fr;
            }

            .org-title{
                left:50%;
                transform:translateX(-50%);
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
                        <p>
                            Profil singkat perusahaan serta informasi umum mengenai
                            peran Telkom Property dalam pengelolaan aset dan layanan properti.
                        </p>
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

                <div class="leadership-wrapper">

                    <div class="org-panel">
                        <div class="org-title">Commissioners</div>

                        <div class="org-top">
                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/heri-supriadi.jpg') }}" alt="Heri Supriadi">
                                </div>
                                <div class="person-name">Heri Supriadi</div>
                                <div class="person-role">Komisaris Utama</div>
                            </div>
                        </div>

                        <div class="org-row four">
                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/amalia-adininggar.jpg') }}" alt="Amalia Adininggar Widyasanti">
                                </div>
                                <div class="person-name">Amalia Adininggar Widyasanti</div>
                                <div class="person-role">Komisaris</div>
                            </div>

                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/r-muharam.jpg') }}" alt="R. Muharam Perbawamukti">
                                </div>
                                <div class="person-name">R. Muharam Perbawamukti</div>
                                <div class="person-role">Komisaris</div>
                            </div>

                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/neno-hamriono.jpg') }}" alt="Neno Hamriono">
                                </div>
                                <div class="person-name">Neno Hamriono</div>
                                <div class="person-role">Komisaris</div>
                            </div>

                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/verry-surya.jpg') }}" alt="Verry Surya Hendrawan">
                                </div>
                                <div class="person-name">Verry Surya Hendrawan</div>
                                <div class="person-role">Komisaris</div>
                            </div>
                        </div>
                    </div>

                    <div class="org-panel">
                        <div class="org-title">Board of Director</div>

                        <div class="org-top">
                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/mohammad-firdaus.jpg') }}" alt="Mohammad Firdaus">
                                </div>
                                <div class="person-name">Mohammad Firdaus</div>
                                <div class="person-role">President Director</div>
                            </div>
                        </div>

                        <div class="org-row three">
                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/fandi-wijaya.jpg') }}" alt="Fandi Wijaya">
                                </div>
                                <div class="person-name">Fandi Wijaya</div>
                                <div class="person-role">Planning Director</div>
                            </div>

                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/setio-nuranto.jpg') }}" alt="Setio Nuranto">
                                </div>
                                <div class="person-name">Setio Nuranto</div>
                                <div class="person-role">Finance &amp; Risk Management Director</div>
                            </div>

                            <div class="person-card">
                                <div class="person-photo">
                                    <img src="{{ asset('images/leadership/amin-kusumawati.jpg') }}" alt="Amin Kusumawati">
                                </div>
                                <div class="person-name">Amin Kusumawati</div>
                                <div class="person-role">Business Director</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

</body>
</html>

