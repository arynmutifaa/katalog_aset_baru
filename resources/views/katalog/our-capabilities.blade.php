<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Capabilities - Telkom Property</title>

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
            background:rgba(44,47,56,0.88);
            backdrop-filter:blur(10px);
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
            color:#fff;
            font-size:18px;
            font-weight:600;
        }

        .nav-btn{
            display:inline-block;
            padding:10px 22px;
            border-radius:30px;
            background:#E30613;
            color:#fff;
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
            background-attachment:fixed;
        }

        .main-layout{
            max-width:1250px;
            margin:0 auto;
            display:grid;
            grid-template-columns:0.85fr 1.55fr;
            grid-template-areas:
                "left top"
                "left bottom";
            column-gap:28px;
            row-gap:0;
            align-items:stretch;
        }

        .left-panel{
            grid-area:left;
            background:rgba(255,255,255,0.10);
            border:1px solid rgba(255,255,255,0.12);
            border-radius:28px;
            color:#fff;
            box-shadow:0 18px 40px rgba(0,0,0,0.18);
            backdrop-filter:blur(10px);
            padding:48px 38px;
            min-height:100%;
            display:flex;
            flex-direction:column;
            justify-content:flex-start;
        }

        .panel-badge{
            display:inline-flex;
            align-items:center;
            gap:8px;
            width:fit-content;
            padding:10px 16px;
            border-radius:999px;
            background:rgba(255,255,255,0.14);
            color:#fff;
            font-size:13px;
            font-weight:600;
            margin-bottom:26px;
        }

        .left-panel h1{
            font-size:54px;
            line-height:1.12;
            font-weight:800;
            margin-bottom:18px;
            text-transform:uppercase;
        }

        .mini-line{
            width:86px;
            height:5px;
            border-radius:10px;
            background:#E30613;
            margin:18px 0 24px;
        }

        .left-panel p{
            color:rgba(255,255,255,0.90);
            font-size:15px;
            line-height:1.9;
        }

        .top-section{
            grid-area:top;
            background:rgba(255,255,255,0.97);
            border-radius:28px 28px 0 0;
            padding:30px 30px 22px;
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
            color:#fff;
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
            line-height:1.7;
        }

        .capability-grid{
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:16px;
        }

        .capability-card{
            background:#f8f9fc;
            border:1px solid #eceef5;
            border-radius:22px;
            overflow:hidden;
            box-shadow:0 10px 24px rgba(0,0,0,0.06);
        }

        .top-label{
            background:#d91f11;
            color:#fff;
            text-align:center;
            padding:10px;
            font-size:14px;
            font-weight:800;
        }

        .main-box{
            min-height:190px;
            margin:14px;
            padding:22px 18px 58px;
            border-radius:18px;
            text-align:center;
            position:relative;
            overflow:hidden;
        }

        .main-box::after{
            content:"";
            position:absolute;
            left:50%;
            bottom:0;
            transform:translateX(-50%);
            width:150px;
            height:90px;
            background:rgba(227,6,19,0.14);
            clip-path:polygon(0 0, 100% 0, 50% 100%);
            z-index:1;
        }

        .yellow{
            background:#f6df7e;
        }

        .peach{
            background:#f4c9b7;
        }

        .cream{
            background:#f8f7ef;
        }

        .yellow::after{
            background:rgba(227,6,19,0.18);
        }

        .peach::after{
            background:rgba(227,6,19,0.16);
        }

        .cream::after{
            background:rgba(227,6,19,0.10);
        }

        .main-box h3{
            color:#c7192d;
            font-size:20px;
            line-height:1.15;
            font-weight:800;
            margin-bottom:16px;
            position:relative;
            z-index:2;
        }

        .main-box p{
            color:#222;
            font-size:13px;
            line-height:1.7;
            position:relative;
            z-index:2;
        }

        .focus-label{
            background:#d91f11;
            color:#fff;
            font-size:13px;
            font-weight:700;
            text-align:center;
            margin:0 14px 10px;
            padding:10px;
            border-radius:8px;
        }

        .capability-list{
            display:flex;
            flex-direction:column;
            gap:8px;
            padding:0 14px 16px;
        }

        .capability-item{
            display:flex;
            align-items:center;
            gap:10px;
            background:#d8d8d8;
            padding:9px 10px;
            border-radius:7px;
            font-size:12.5px;
            color:#333;
            font-weight:500;
        }

        .capability-icon{
            width:28px;
            height:28px;
            min-width:28px;
            border-radius:7px;
            background:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:15px;
        }

        .bottom-section{
            grid-area:bottom;
            background:rgba(255,255,255,0.98);
            border-radius:0 0 28px 28px;
            padding:26px 34px 38px;
            margin-top:-1px;
            box-shadow:0 18px 40px rgba(0,0,0,0.18);
        }

        .labor-top-line{
            width:74%;
            height:7px;
            background:#9d1f32;
            margin:0 auto 28px;
        }

        .labor-title{
            text-align:center;
            font-size:21px;
            font-style:italic;
            color:#111;
            margin-bottom:42px;
            letter-spacing:1px;
        }

        .labor-title span{
            color:#E30613;
            font-style:normal;
        }

        .labor-icons{
            display:grid;
            grid-template-columns:repeat(7, 1fr);
            gap:14px;
            align-items:center;
            margin-bottom:34px;
        }

        .labor-icon{
            width:90px;
            height:90px;
            border-radius:50%;
            background:#d9d9d9;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:0 auto;
            box-shadow:0 8px 20px rgba(0,0,0,0.08);
            font-size:40px;
        }

        .labor-data{
            background:#f1f3ff;
            padding:24px 14px;
            display:grid;
            grid-template-columns:repeat(7, 1fr);
            gap:8px;
            text-align:center;
            border-radius:14px;
        }

        .labor-item h3{
            font-size:21px;
            line-height:1.2;
            color:#06384a;
            font-weight:800;
            margin-bottom:14px;
        }

        .labor-item p{
            font-size:23px;
            color:#8b1c2c;
            font-weight:500;
        }

        @media(max-width:1200px){
            .left-panel h1{
                font-size:46px;
            }

            .capability-grid{
                grid-template-columns:1fr;
            }

            .labor-icons,
            .labor-data{
                grid-template-columns:repeat(2, 1fr);
            }
        }

        @media(max-width:900px){
            .main-layout{
                grid-template-columns:1fr;
                grid-template-areas:
                    "left"
                    "top"
                    "bottom";
                row-gap:20px;
            }

            .left-panel h1{
                font-size:38px;
            }

            .top-section{
                border-radius:28px;
            }

            .bottom-section{
                border-radius:28px;
                margin-top:0;
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
                background-attachment:scroll;
            }

            .left-panel,
            .top-section,
            .bottom-section{
                padding:22px;
            }

            .header-box{
                flex-direction:column;
            }

            .labor-title{
                font-size:17px;
                margin-bottom:30px;
            }

            .labor-icons,
            .labor-data{
                grid-template-columns:1fr;
            }

            .labor-item h3{
                font-size:22px;
            }

            .labor-item p{
                font-size:24px;
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
        <div class="main-layout">

            <div class="left-panel">
                <div class="panel-badge">02 • Our Capabilities</div>
                <h1>OUR INTERNAL CAPABILITIES</h1>
                <div class="mini-line"></div>

            </div>

            <div class="top-section">
                <div class="header-box">
                    <div class="header-number">02</div>
                    <div class="header-text">
                        <h2>Our Internal Capabilities</h2>

                    </div>
                </div>

                <div class="capability-grid">

                    <div class="capability-card">
                        <div class="top-label">Digitalisasi</div>

                        <div class="main-box yellow">
                            <h3>Serving Digital Businesses</h3>
                            <p>
                                Servicing property needs of digital business such as
                                e-commerce digital only businesses.
                            </p>
                        </div>

                        <div class="focus-label">Focus on digital industry need</div>

                        <div class="capability-list">
                            <div class="capability-item">
                                <div class="capability-icon">🚚</div>
                                <span>Record Center</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">🏬</div>
                                <span>Smart Warehouse</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">🏨</div>
                                <span>Virtual Hotel Operator</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">🎙️</div>
                                <span>GSD Xircle & Webinar studio</span>
                            </div>
                        </div>
                    </div>

                    <div class="capability-card">
                        <div class="top-label">Digitalisasi</div>

                        <div class="main-box peach">
                            <h3>Providing Digital Businesses</h3>
                            <p>
                                Develop smart "digital services" under each portofolio.
                            </p>
                        </div>

                        <div class="focus-label">Focus on digital offerings</div>

                        <div class="capability-list">
                            <div class="capability-item">
                                <div class="capability-icon">🏢</div>
                                <span>Workplace Platform Services</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">☁️</div>
                                <span>Smart Building Program</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">🖥️</div>
                                <span>MSO Data Center</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">🏛️</div>
                                <span>Satellite Office</span>
                            </div>
                        </div>
                    </div>

                    <div class="capability-card">
                        <div class="top-label">Digitisasi</div>

                        <div class="main-box cream">
                            <h3>Leveraging Digital for Efficiency</h3>
                            <p>
                                Leverage digital technologies to improve cost to serve.
                            </p>
                        </div>

                        <div class="focus-label">Focus on internal operations</div>

                        <div class="capability-list">
                            <div class="capability-item">
                                <div class="capability-icon">🚗</div>
                                <span>Automatic Vehicle Scanning</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">⚙️</div>
                                <span>Energy Management</span>
                            </div>

                            <div class="capability-item">
                                <div class="capability-icon">🏢</div>
                                <span>Office Space Utilisation</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="bottom-section">
                <div class="labor-top-line"></div>

                <div class="labor-title">
                    “WE USED <span>12.893</span> PROFESSIONAL AND CERTIFIED LABOR”
                </div>

                <div class="labor-icons">
                    <div class="labor-icon">👩‍💼</div>
                    <div class="labor-icon">🧹</div>
                    <div class="labor-icon">👷</div>
                    <div class="labor-icon">👮</div>
                    <div class="labor-icon">🚘</div>
                    <div class="labor-icon">📍</div>
                    <div class="labor-icon">🏢</div>
                </div>

                <div class="labor-data">
                    <div class="labor-item">
                        <h3>Staff</h3>
                        <p>288</p>
                    </div>

                    <div class="labor-item">
                        <h3>House<br>keeping</h3>
                        <p>3.981</p>
                    </div>

                    <div class="labor-item">
                        <h3>Engineer</h3>
                        <p>608</p>
                    </div>

                    <div class="labor-item">
                        <h3>Security</h3>
                        <p>7.982</p>
                    </div>

                    <div class="labor-item">
                        <h3>Driver</h3>
                        <p>34</p>
                    </div>

                    <div class="labor-item">
                        <h3>Lokasi</h3>
                        <p>2.848</p>
                    </div>

                    <div class="labor-item">
                        <h3>Gedung</h3>
                        <p>1.890</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
