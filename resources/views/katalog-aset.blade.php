<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outline Katalog Aset - Telkom Property</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#101525;
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

        /* BACKGROUND SAMA UNTUK COVER DAN OUTLINE */
        .cover-page,
        .outline-page{
            background:
                linear-gradient(
                    90deg,
                    rgba(8,12,32,0.88) 0%,
                    rgba(10,15,38,0.82) 42%,
                    rgba(80,16,36,0.78) 68%,
                    rgba(180,10,24,0.70) 100%
                ),
                url("{{ asset('images/gambar1.jpeg') }}") center center / cover no-repeat;
            background-attachment:fixed;
        }

        /* ================= COVER AWAL ================= */
        .cover-page{
            min-height:100vh;
            padding:120px 60px 0;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .cover-content{
            position:relative;
            width:100%;
            max-width:1250px;
            min-height:78vh;
            overflow:hidden;
            display:flex;
            flex-direction:column;
            justify-content:space-between;

            /* GARIS TEPI LUAR DIPERJELAS */
            border:2px solid rgba(255,255,255,0.55);
            box-shadow:
                0 24px 60px rgba(0,0,0,0.28),
                0 0 0 2px rgba(255,255,255,0.28),
                inset 0 0 0 1px rgba(255,255,255,0.18);

            background:
                linear-gradient(
                    90deg,
                    rgba(8,12,32,0.88) 0%,
                    rgba(10,15,38,0.82) 42%,
                    rgba(80,16,36,0.78) 68%,
                    rgba(180,10,24,0.70) 100%
                ),
                url("{{ asset('images/gambar1.jpeg') }}") center center / cover no-repeat;
        }

        /* GARIS TEPI DALAM */
        .cover-content::before{
            content:"";
            position:absolute;
            inset:18px;
            border:2px solid rgba(255,255,255,0.65);
            box-shadow:
                0 0 0 1px rgba(255,255,255,0.25),
                inset 0 0 18px rgba(255,255,255,0.10);
            pointer-events:none;
            z-index:1;
        }

        .cover-text{
            position:relative;
            z-index:2;
            flex:1;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:flex-start;
            padding:80px 70px 40px;
            color:white;
        }

        .cover-text h1{
            font-size:78px;
            line-height:0.95;
            font-weight:800;
            letter-spacing:1px;
            margin-bottom:18px;
            text-transform:uppercase;
            max-width:900px;
        }

        .cover-text p{
            font-size:24px;
            line-height:1.5;
            font-weight:400;
            font-style:italic;
            color:rgba(255,255,255,0.92);
            max-width:none;
            white-space:nowrap;
        }

        .cover-footer{
            position:relative;
            z-index:2;
            width:82%;
            background:white;
            display:flex;
            align-items:flex-end;
            justify-content:space-between;
            gap:20px;
            padding:26px 34px 20px;
            border-top:2px solid rgba(0,0,0,0.12);
            border-right:2px solid rgba(0,0,0,0.12);
        }

        .cover-footer-left{
            flex:1;
        }

        .cover-footer-left h2{
            font-size:28px;
            line-height:1.35;
            font-weight:800;
            color:#111;
            text-transform:uppercase;
            margin-bottom:12px;
        }

        .cover-footer-line{
            width:100%;
            max-width:520px;
            height:4px;
            background:#111;
            border-radius:20px;
        }

        .cover-footer-right{
            min-width:auto;
            display:flex;
            align-items:flex-end;
            justify-content:flex-end;
            gap:18px;
        }

        .cover-year{
            font-size:28px;
            font-weight:800;
            color:#111;
            line-height:1;
        }

        /* ================= OUTLINE PAGE ================= */
        .outline-page{
            min-height:100vh;
            padding:80px 60px 60px;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .outline-wrapper{
            width:100%;
            max-width:1250px;
            display:grid;
            grid-template-columns:1fr 1.25fr;
            gap:28px;
            align-items:stretch;
        }

        .outline-left{
            background:rgba(255,255,255,0.10);
            border:1px solid rgba(255,255,255,0.12);
            border-radius:28px;
            padding:40px 35px;
            color:white;
            box-shadow:0 18px 40px rgba(0,0,0,0.18);
            backdrop-filter:blur(10px);
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .outline-left h1{
            font-size:56px;
            line-height:1.1;
            font-weight:800;
            margin-bottom:20px;
        }

        .outline-left .mini-line{
            width:80px;
            height:5px;
            border-radius:10px;
            background:#E30613;
            margin:20px 0 24px;
        }

        .outline-right{
            background:rgba(255,255,255,0.95);
            border:1px solid rgba(255,255,255,0.45);
            border-radius:28px;
            padding:26px;
            box-shadow:0 18px 40px rgba(0,0,0,0.18);
        }

        .outline-top{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:20px;
            margin-bottom:20px;
            padding:10px 6px 22px;
            border-bottom:1px solid #ececec;
        }

        .outline-list{
            display:flex;
            flex-direction:column;
            gap:16px;
        }

        .outline-item{
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:18px;
            background:#f8f9fc;
            border-radius:20px;
            padding:18px 20px;
            transition:0.3s;
            border:1px solid #eceef5;
            text-decoration:none;
            color:inherit;
        }

        .outline-item:hover{
            transform:translateX(6px);
            border-color:#E30613;
            box-shadow:0 10px 24px rgba(227,6,19,0.08);
        }

        .item-left{
            display:flex;
            align-items:flex-start;
            gap:16px;
        }

        .item-number{
            min-width:52px;
            height:52px;
            border-radius:16px;
            background:#E30613;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:16px;
            font-weight:700;
            box-shadow:0 8px 18px rgba(227,6,19,0.22);
        }

        .item-text h3{
            font-size:20px;
            color:#2c2f38;
            margin-bottom:6px;
            font-weight:700;
        }

        .item-text p{
            font-size:14px;
            color:#666;
            line-height:1.8;
            max-width:620px;
        }

        .item-arrow{
            min-width:44px;
            width:44px;
            height:44px;
            border-radius:50%;
            background:#4f46e5;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:20px;
            font-weight:700;
            text-decoration:none;
        }

        @media(max-width:1100px){
            .cover-text{
                padding:70px 40px 30px;
            }

            .cover-text h1{
                font-size:58px;
            }

            .cover-text p{
                font-size:20px;
                white-space:normal;
            }

            .cover-footer{
                width:90%;
            }

            .cover-footer-left h2{
                font-size:24px;
            }

            .outline-wrapper{
                grid-template-columns:1fr;
            }

            .outline-left h1{
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

            .cover-page{
                padding:120px 20px 0;
            }

            .cover-content{
                min-height:auto;
            }

            .cover-content::before{
                inset:10px;
                border:1.5px solid rgba(255,255,255,0.55);
            }

            .cover-text{
                padding:50px 24px 28px;
            }

            .cover-text h1{
                font-size:38px;
                line-height:1.05;
            }

            .cover-text p{
                font-size:16px;
                white-space:normal;
            }

            .cover-footer{
                width:100%;
                flex-direction:column;
                align-items:flex-start;
                padding:20px 24px;
            }

            .cover-footer-left h2{
                font-size:20px;
            }

            .cover-footer-right{
                min-width:auto;
                width:100%;
                justify-content:flex-end;
            }

            .cover-year{
                font-size:22px;
            }

            .outline-page{
                padding:60px 20px 40px;
                background-attachment:scroll;
            }

            .outline-left,
            .outline-right{
                padding:22px;
            }

            .outline-left h1{
                font-size:34px;
            }

            .outline-top{
                flex-direction:column;
                align-items:flex-start;
            }

            .outline-item{
                align-items:flex-start;
            }

            .item-left{
                flex-direction:row;
            }

            .item-text h3{
                font-size:18px;
            }

            .item-arrow{
                display:none;
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

        <a href="{{ route('home') }}" class="nav-btn">Back Home</a>
    </div>

    <section class="cover-page">
        <div class="cover-content">
            <div class="cover-text">
                <h1>TELKOM PROPERTY</h1>
                <p>The most preferred technology-led property company in Indonesia</p>
            </div>

            <div class="cover-footer">
                <div class="cover-footer-left">
                    <h2>TELKOM PROPERTY / PT GSD</h2>
                    <div class="cover-footer-line"></div>
                </div>

                <div class="cover-footer-right">
                    <div class="cover-year">2026</div>
                </div>
            </div>
        </div>
    </section>

    <section class="outline-page">
        <div class="outline-wrapper">

            <div class="outline-left">
                <h1>WHAT ARE WE GOING TO DISCUSS?</h1>
                <div class="mini-line"></div>
            </div>

            <div class="outline-right">
                <div class="outline-top"></div>

                <div class="outline-list">

                    <a href="{{ route('company.profile') }}" class="outline-item">
                        <div class="item-left">
                            <div class="item-number">01</div>
                            <div class="item-text">
                                <h3>Company Profile</h3>
                                <p>
                                    Menampilkan profil perusahaan, visi, misi, dan gambaran umum Telkom Property.
                                </p>
                            </div>
                        </div>
                        <div class="item-arrow">›</div>
                    </a>

                    <a href="{{ route('our.capabilities') }}" class="outline-item">
                        <div class="item-left">
                            <div class="item-number">02</div>
                            <div class="item-text">
                                <h3>Our Internal Capabilities</h3>
                                <p>
                                    Menjelaskan kemampuan internal dan dukungan sumber daya perusahaan.
                                </p>
                            </div>
                        </div>
                        <div class="item-arrow">›</div>
                    </a>

                    <a href="{{ route('product.portfolio') }}" class="outline-item">
                        <div class="item-left">
                            <div class="item-number">03</div>
                            <div class="item-text">
                                <h3>Product Portfolio & Digital Business</h3>
                                <p>
                                    Berisi portofolio produk, aset, layanan, dan solusi digital yang ditawarkan.
                                </p>
                            </div>
                        </div>
                        <div class="item-arrow">›</div>
                    </a>

                    <a href="{{ route('business.scheme') }}" class="outline-item">
                        <div class="item-left">
                            <div class="item-number">04</div>
                            <div class="item-text">
                                <h3>Business Scheme</h3>
                                <p>
                                    Menampilkan bentuk skema kerja sama yang dapat dijalankan bersama mitra.
                                </p>
                            </div>
                        </div>
                        <div class="item-arrow">›</div>
                    </a>

                    <a href="{{ route('gallery') }}" class="outline-item">
                        <div class="item-left">
                            <div class="item-number">05</div>
                            <div class="item-text">
                                <h3>Gallery</h3>
                                <p>
                                    Menampilkan dokumentasi visual proyek, fasilitas, aset, dan layanan perusahaan.
                                </p>
                            </div>
                        </div>
                        <div class="item-arrow">›</div>
                    </a>

                </div>
            </div>

        </div>
    </section>

</body>
</html>
