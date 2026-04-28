<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Portfolio & Digital Business - Telkom Property</title>

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

        .portfolio-page{
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

        .portfolio-wrapper{
            max-width:1250px;
            margin:0 auto;
            display:grid;
            grid-template-columns:0.85fr 1.55fr;
            gap:28px;
            align-items:stretch;
        }

        .portfolio-left{
            background:rgba(255,255,255,0.10);
            border:1px solid rgba(255,255,255,0.12);
            border-radius:28px;
            padding:42px 36px;
            color:white;
            box-shadow:0 18px 40px rgba(0,0,0,0.18);
            backdrop-filter:blur(10px);
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .portfolio-badge{
            display:inline-flex;
            align-items:center;
            width:fit-content;
            padding:10px 16px;
            border-radius:999px;
            background:rgba(255,255,255,0.14);
            color:white;
            font-size:13px;
            font-weight:600;
            margin-bottom:22px;
        }

        .portfolio-left h1{
            font-size:48px;
            line-height:1.15;
            font-weight:800;
            margin-bottom:20px;
            text-transform:uppercase;
        }

        .mini-line{
            width:80px;
            height:5px;
            border-radius:10px;
            background:#E30613;
            margin:20px 0 24px;
        }

        .portfolio-left p{
            color:rgba(255,255,255,0.86);
            font-size:15px;
            line-height:1.8;
        }

        .portfolio-right{
            background:rgba(255,255,255,0.96);
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
            margin-bottom:28px;
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
            line-height:1.7;
        }

        .portfolio-grid{
            display:grid;
            grid-template-columns:repeat(4, 1fr);
            gap:16px;
        }

        .portfolio-card{
    position:relative;
    background:#d9d7d7;
    border-radius:18px;
    padding:58px 16px 20px;
    cursor:pointer;
    border:none;
    text-align:left;
    transition:0.3s;
    min-height:390px;
    overflow:visible;

    display:flex;
    flex-direction:column;
}

        .portfolio-card:hover{
            transform:translateY(-6px);
            box-shadow:0 16px 32px rgba(227,6,19,0.18);
        }

        .card-title{
            position:absolute;
            top:-18px;
            left:16px;
            right:16px;
            background:#d91f11;
            color:#fff;
            border-radius:7px;
            padding:10px 12px;
            font-size:15px;
            font-weight:800;
            text-align:center;
            line-height:1.25;
            box-shadow:0 8px 18px rgba(217,31,17,0.22);
        }

        .card-icon{
    width:95px;
    height:120px;
    margin:0 auto 18px;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:58px;
    color:#111;
    line-height:1;
}

        .service-list{
            display:flex;
            flex-direction:column;
            gap:12px;
        }

        .service-item{
            display:grid;
            grid-template-columns:34px 1fr;
            gap:10px;
            align-items:start;
        }

        .service-number{
            width:30px;
            height:30px;
            border-radius:50%;
            background:#c51d2a;
            color:#fff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:14px;
            font-weight:800;
        }

        .service-text h4{
            font-size:13px;
            font-weight:800;
            color:#111;
            line-height:1.2;
            margin-bottom:2px;
        }

        .service-text p{
            font-size:10.5px;
            line-height:1.35;
            color:#222;
        }

        .click-info{
            margin-top:22px;
            text-align:center;
            font-size:13px;
            color:#777;
            font-weight:500;
        }

        /* MODAL */
        .modal-overlay{
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.65);
            display:none;
            align-items:center;
            justify-content:center;
            z-index:3000;
            padding:24px;
        }

        .modal-overlay.active{
            display:flex;
        }

        .modal-box{
            width:100%;
            max-width:1100px;
            max-height:86vh;
            background:#fff;
            border-radius:24px;
            padding:28px;
            box-shadow:0 25px 80px rgba(0,0,0,0.35);
            position:relative;
            overflow-y:auto;
        }

        .modal-box::-webkit-scrollbar{
            width:8px;
        }

        .modal-box::-webkit-scrollbar-thumb{
            background:#d91f11;
            border-radius:20px;
        }

        .modal-close{
            position:sticky;
            top:0;
            float:right;
            width:38px;
            height:38px;
            border:none;
            border-radius:50%;
            background:#E30613;
            color:#fff;
            font-size:22px;
            cursor:pointer;
            font-weight:700;
            z-index:10;
        }

        .detail-title,
        .pm-title,
        .ps-title,
        .tms-title{
            display:inline-block;
            background:#d91f11;
            color:#fff;
            padding:10px 22px;
            border-radius:8px;
            font-size:34px;
            font-weight:800;
            margin-bottom:18px;
        }

        .detail-section{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:28px;
            margin-bottom:40px;
            align-items:start;
            clear:both;
        }

        .detail-text h3{
            font-size:24px;
            color:#111;
            margin-bottom:8px;
            font-weight:700;
        }

        .desc-box,
        .pm-desc,
        .ps-desc,
        .tms-desc{
            background:#d9d7d7;
            border-radius:14px;
            padding:16px;
            font-size:15px;
            line-height:1.6;
            color:#222;
            margin-bottom:16px;
        }

        .red-label,
        .pm-label,
        .ps-label,
        .tms-label{
            display:inline-block;
            background:#d91f11;
            color:#fff;
            padding:8px 18px;
            border-radius:7px;
            font-size:15px;
            font-weight:700;
            margin-bottom:8px;
        }

        .service-box{
            background:#d9d7d7;
            border-radius:14px;
            padding:16px;
            font-size:14px;
            line-height:1.5;
        }

        .service-box ul{
            padding-left:18px;
        }

        .service-box li{
            margin-bottom:8px;
        }

        .image-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:14px;
        }

        .image-grid img{
            width:100%;
            height:135px;
            object-fit:cover;
            border-radius:4px;
            background:#eee;
        }

        .image-grid.large img{
            height:150px;
        }

        .pm-section,
        .ps-section,
        .tms-section{
            margin-bottom:42px;
            padding-bottom:34px;
            border-bottom:1px solid #eeeeee;
            clear:both;
        }

        .pm-section:last-child,
        .ps-section:last-child,
        .tms-section:last-child{
            border-bottom:none;
            margin-bottom:0;
        }

        .pm-subtitle,
        .ps-subtitle,
        .tms-subtitle{
            font-size:24px;
            color:#111;
            font-weight:500;
            margin-bottom:14px;
        }

        .pm-two-column,
        .ps-two-column,
        .tms-two-column{
            display:grid;
            grid-template-columns:1fr 1.25fr;
            gap:28px;
            align-items:start;
        }

        .pm-image-grid,
        .ps-image-grid{
            display:grid;
            grid-template-columns:repeat(2, 1fr);
            gap:10px;
        }

        .pm-image-grid img,
        .ps-image-grid img{
            width:100%;
            height:140px;
            object-fit:cover;
            border-radius:6px;
            background:#eee;
        }

        .pm-image-full,
        .ps-image-full{
            width:100%;
            border-radius:8px;
            background:#f4f4f4;
            border:1px solid #eee;
            margin-top:12px;
        }

        .pm-paragraph,
        .ps-paragraph{
            font-size:15px;
            line-height:1.7;
            color:#222;
            margin-bottom:16px;
        }

        .pm-blue-bar{
            background:#37659a;
            color:#fff;
            padding:12px 16px;
            border-radius:7px;
            font-size:15px;
            line-height:1.6;
            margin-bottom:18px;
            box-shadow:0 6px 14px rgba(0,0,0,0.15);
        }

        .pm-feature-grid{
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:12px;
            margin-bottom:26px;
        }

        .pm-feature{
            border:2px solid #55b6c8;
            border-radius:16px;
            padding:14px;
            font-size:14px;
            line-height:1.55;
            background:#fff;
        }

        .pm-flow-grid{
            display:grid;
            grid-template-columns:2fr 1fr;
            gap:24px;
            align-items:start;
        }

        .pm-dark-title{
            background:#555;
            color:#fff;
            border-radius:6px;
            padding:10px 16px;
            font-size:18px;
            font-weight:700;
            margin-bottom:16px;
        }

        .pm-patrol-box{
            border:2px solid #55b6c8;
            border-radius:24px;
            padding:18px;
            font-size:14px;
            line-height:1.6;
            background:#fff;
        }

        .pm-patrol-box ul{
            padding-left:18px;
        }

        .pm-patrol-box li{
            margin-bottom:8px;
        }

        .ps-list{
            margin-top:16px;
            padding-left:22px;
            font-size:16px;
            line-height:1.65;
            font-weight:700;
        }

        .ps-benefit{
            background:#d9d7d7;
            border-radius:14px;
            padding:16px;
            font-size:15px;
            line-height:1.55;
            color:#222;
        }

        .ps-benefit ul{
            padding-left:18px;
        }

        .ps-small-gallery{
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:12px;
            align-items:start;
        }

        .ps-small-gallery img{
            width:100%;
            height:150px;
            object-fit:cover;
            border-radius:6px;
            background:#eee;
        }

        .ps-keywords{
            display:flex;
            justify-content:center;
            gap:28px;
            font-weight:800;
            margin-top:18px;
            font-size:15px;
        }

        /* TRANSPORTATION */
        .tms-images{
            display:grid;
            grid-template-columns:1.25fr 1fr;
            gap:14px;
            align-items:start;
        }

        .tms-main-img{
            width:100%;
            height:360px;
            object-fit:cover;
            border-radius:6px;
            background:#eee;
        }

        .tms-side-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:10px;
        }

        .tms-side-grid img{
            width:100%;
            height:120px;
            object-fit:cover;
            border-radius:10px;
            border:2px solid #d91f11;
            background:#eee;
        }

        .tms-vehicle-img{
            grid-column:1 / -1;
            width:100%;
            height:140px !important;
            object-fit:contain !important;
            border:none !important;
            background:#fff !important;
        }

        .tms-benefit{
            background:#d9d7d7;
            border-radius:14px;
            padding:16px 18px;
            font-size:14px;
            line-height:1.55;
            color:#222;
        }

        .tms-benefit ul{
            padding-left:18px;
        }

        .tms-benefit li{
            margin-bottom:9px;
        }

        .tms-benefit b{
            font-size:17px;
            color:#111;
        }

        @media(max-width:1200px){
            .portfolio-wrapper{
                grid-template-columns:1fr;
            }

            .portfolio-grid{
                grid-template-columns:repeat(2, 1fr);
            }

            .portfolio-left h1{
                font-size:42px;
            }
        }

        @media(max-width:900px){
            .detail-section,
            .pm-two-column,
            .pm-flow-grid,
            .ps-two-column,
            .tms-two-column,
            .tms-images{
                grid-template-columns:1fr;
            }

            .detail-title,
            .pm-title,
            .ps-title,
            .tms-title{
                font-size:26px;
            }

            .pm-feature-grid,
            .pm-image-grid,
            .ps-image-grid,
            .ps-small-gallery{
                grid-template-columns:1fr;
            }

            .tms-main-img{
                height:260px;
            }

            .tms-side-grid{
                grid-template-columns:1fr 1fr;
            }
        }

        @media(max-width:768px){
            .navbar{
                padding:12px 20px;
                flex-direction:column;
                align-items:flex-start;
                gap:12px;
            }

            .portfolio-page{
                padding:120px 20px 40px;
            }

            .portfolio-left,
            .portfolio-right{
                padding:22px;
            }

            .portfolio-left h1{
                font-size:34px;
            }

            .header-box{
                flex-direction:column;
            }

            .portfolio-grid{
                grid-template-columns:1fr;
            }

            .modal-box{
                padding:20px;
            }

            .image-grid{
                grid-template-columns:1fr;
            }
        }

        @media(max-width:600px){
            .tms-side-grid{
                grid-template-columns:1fr;
            }

            .tms-side-grid img,
            .tms-vehicle-img{
                height:160px !important;
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

    <section class="portfolio-page">
        <div class="portfolio-wrapper">

            <div class="portfolio-left">
                <div class="portfolio-badge">03 • Product Portfolio</div>
                <h1>Product Portfolio & Digital Business</h1>
                <div class="mini-line"></div>

            </div>

            <div class="portfolio-right">
                <div class="header-box">
                    <div class="header-number">03</div>
                    <div class="header-text">
                        <h2>Product Portfolio & Digital Busniness</h2>

                    </div>
                </div>

                <div class="portfolio-grid">

                    <button class="portfolio-card" onclick="openModal('propertyDevelopment')">
                        <div class="card-title">Property Development</div>
                        <div class="card-icon">🏢</div>

                        <div class="service-list">
                            <div class="service-item">
                                <div class="service-number">1</div>
                                <div class="service-text">
                                    <h4>Development</h4>
                                    <p>Office Building &amp; Commercial</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">2</div>
                                <div class="service-text">
                                    <h4>Lease</h4>
                                    <p>Office Space &amp; Satellite Office, Space for Ads, Smart Warehouse</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">3</div>
                                <div class="service-text">
                                    <h4>Hospitality</h4>
                                    <p>Room, Convention Hall &amp; Meeting Package</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">4</div>
                                <div class="service-text">
                                    <h4>Retail</h4>
                                    <p>Record Center, Manage Service Warehouse, Smart Locker, Incicafe, UMKM Corner, Lifestyle hub &amp; Swa-mart</p>
                                </div>
                            </div>
                        </div>
                    </button>

                    <button class="portfolio-card" onclick="openModal('propertyManagement')">
                        <div class="card-title">Property Management</div>
                        <div class="card-icon">🏬</div>

                        <div class="service-list">
                            <div class="service-item">
                                <div class="service-number">1</div>
                                <div class="service-text">
                                    <h4>Building Management</h4>
                                    <p>Housekeeping, security, management facility &amp; IT management</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">2</div>
                                <div class="service-text">
                                    <h4>Security Management</h4>
                                    <p>Security</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">3</div>
                                <div class="service-text">
                                    <h4>Smart Parking System</h4>
                                    <p>Digital Parking Services</p>
                                </div>
                            </div>
                        </div>
                    </button>

                    <button class="portfolio-card" onclick="openModal('projectSolution')">
                        <div class="card-title">Project Solution</div>
                        <div class="card-icon">📐</div>

                        <div class="service-list">
                            <div class="service-item">
                                <div class="service-number">1</div>
                                <div class="service-text">
                                    <h4>Smart &amp; Healthy Building Solution</h4>
                                    <p>Building Automation, System Integration, Office Automation, Touchless System, Air Purifier, UVC</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">2</div>
                                <div class="service-text">
                                    <h4>Interior &amp; Exterior</h4>
                                    <p>Fitout, facade &amp; landscape</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">3</div>
                                <div class="service-text">
                                    <h4>Mechanical, Electrical, Plumbing &amp; IT Installation</h4>
                                    <p>Layanan penggantian peralatan ME</p>
                                </div>
                            </div>
                        </div>
                    </button>

                    <button class="portfolio-card" onclick="openModal('transportation')">
                        <div class="card-title">Transportation Management Services</div>
                        <div class="card-icon">🚚</div>

                        <div class="service-list">
                            <div class="service-item">
                                <div class="service-number">1</div>
                                <div class="service-text">
                                    <h4>Managed Services</h4>
                                    <p>Sewa kendaraan termasuk driver, biaya operasional, dan car pooling</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">2</div>
                                <div class="service-text">
                                    <h4>Fleet Management System</h4>
                                    <p>Aplikasi monitoring dan tracking kendaraan</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">3</div>
                                <div class="service-text">
                                    <h4>Dry Lease</h4>
                                    <p>Maintenance dan operasional menjadi tanggung jawab konsumen</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-number">4</div>
                                <div class="service-text">
                                    <h4>Trends Online</h4>
                                    <p>Layanan sewa kendaraan berbasis aplikasi</p>
                                </div>
                            </div>
                        </div>
                    </button>

                </div>

                <div class="click-info">
                    Klik untuk melihat detail data layanan.
                </div>
            </div>

        </div>
    </section>

    <div class="modal-overlay" id="modalOverlay">
        <div class="modal-box">
            <button class="modal-close" onclick="closeModal()">×</button>
            <div id="modalContent"></div>
        </div>
    </div>

    <script>
        function openModal(type){
            const modalContent = document.getElementById('modalContent');

            if(type === 'propertyDevelopment'){
                modalContent.innerHTML = `
                    <div class="detail-title">Property Development</div>

                    <div class="detail-section">
                        <div class="detail-text">
                            <h3>Record Center</h3>

                            <div class="desc-box">
                                Record Center adalah suatu gedung atau fasilitas yang dirancang dan
                                dibangun secara khusus untuk menyimpan dan memberikan layanan arsip
                                dinamis aktif & inaktif bagi kepentingan manajemen instansi atau
                                perusahaan sehingga dapat menyediakan arsip sewaktu-waktu diperlukan
                                dengan cara cepat, tepat dan biaya yang efisien.
                            </div>

                            <div class="red-label">Sistem Manajemen</div>

                            <div class="desc-box">
                                <b>Record Management System</b><br>
                                Storage, organize, maintain, and document identification using
                                high-tech system, digital data storage, fireproof room, valuable
                                documents, etc.
                                <br><br>
                                <b>Racking (Storage System)</b><br>
                                Racking design, floor structure, etc.
                            </div>

                            <div class="red-label">Our Services</div>

                            <div class="service-box">
                                <ul>
                                    <li>Storage, organize document</li>
                                    <li>Pick up & delivery Service</li>
                                    <li>Maintain, indexing, identification</li>
                                    <li>Retrieve, shredding</li>
                                    <li>Digital Service</li>
                                </ul>
                            </div>
                        </div>

                        <div class="image-grid">
                            <img src="{{ asset('images/portfolio/record-center-1.jpg') }}" alt="Record Center 1">
                            <img src="{{ asset('images/portfolio/record-center-2.jpg') }}" alt="Record Center 2">
                            <img src="{{ asset('images/portfolio/record-center-3.jpg') }}" alt="Record Center 3">
                            <img src="{{ asset('images/portfolio/record-center-4.jpg') }}" alt="Record Center 4">
                            <img src="{{ asset('images/portfolio/record-center-5.jpg') }}" alt="Record Center 5">
                            <img src="{{ asset('images/portfolio/record-center-6.jpg') }}" alt="Record Center 6">
                        </div>
                    </div>

                    <div class="detail-section">
                        <div class="detail-text">
                            <h3>GSD-Xircle & Webinar Studio</h3>

                            <div class="desc-box">
                                <b style="color:#b44444; font-size:20px;">GSD XIRCLE</b>
                                merupakan fasilitas mixed use yang disiapkan untuk mendukung
                                komunitas-komunitas dan para entrepreneurs di dalam berkolaborasi
                                baik secara individu maupun ide.
                                <br><br>
                                <b>Lokasi :</b><br>
                                - Bandung (GMP Buahbatu)<br>
                                - Jogjakarta (JDV)<br>
                                - Jakarta (STO Kalibata)
                            </div>

                            <div class="red-label">Webinar Studio</div>

                            <div class="desc-box">
                                Merupakan fasilitas studio processing (video, audio, green screen)
                                yang mengakomodir kebutuhan video conference, kebutuhan hybrid
                                maupun event online event (Webinar, Podcast, dll).
                                <br><br>
                                <b>Lokasi :</b><br>
                                - Jakarta (Gunung Sahari)
                            </div>
                        </div>

                        <div class="image-grid large">
                            <img src="{{ asset('images/portfolio/gsd-1.jpg') }}" alt="GSD Xircle 1">
                            <img src="{{ asset('images/portfolio/gsd-2.jpg') }}" alt="GSD Xircle 2">
                            <img src="{{ asset('images/portfolio/gsd-3.jpg') }}" alt="GSD Xircle 3">
                            <img src="{{ asset('images/portfolio/gsd-4.jpg') }}" alt="GSD Xircle 4">
                            <img src="{{ asset('images/portfolio/gsd-5.jpg') }}" alt="GSD Xircle 5">
                            <img src="{{ asset('images/portfolio/gsd-6.jpg') }}" alt="GSD Xircle 6">
                        </div>
                    </div>
                `;
            }

            else if(type === 'propertyManagement'){
                modalContent.innerHTML = `
                    <div class="pm-section">
                        <div class="pm-title">Property Management</div>
                        <div class="pm-subtitle">Building Management</div>

                        <div class="pm-two-column">
                            <div>
                                <div class="pm-desc">
                                    Pengelolaan properti secara profesional baik gedung perkantoran,
                                    mall, kawasan industri maupun apartemen, dengan dukungan sumber
                                    daya manusia yang mumpuni, proses, dan sistem terbaik untuk
                                    mengelola, mengoperasikan dan memberikan nilai tambah bagi
                                    pemilik dan tenant.
                                </div>

                                <div class="pm-label">Security Management</div>
                                <div class="pm-desc">
                                    Penyediaan layanan keamanan yang dilakukan secara profesional
                                    dan terlatih.
                                </div>

                                <div class="pm-label">Business Process Outsource</div>
                                <div class="pm-desc">
                                    Penyediaan layanan kegiatan pengalihdayaan sebagian proses bisnis
                                    perusahaan untuk tercapainya efisiensi biaya dan risiko perusahaan,
                                    khususnya untuk tenaga cleaning service dan security.
                                </div>

                                <div class="pm-label">Smart Parking</div>
                                <div class="pm-desc">
                                    Penyediaan layanan Parking Service secara digital, dan
                                    mengoptimalkan integrasi layanan Security, parking dan property
                                    management service.
                                </div>
                            </div>

                            <div class="pm-image-grid">
                                <img src="{{ asset('images/portfolio/pm-building-1.jpg') }}" alt="Building Management 1">
                                <img src="{{ asset('images/portfolio/pm-building-2.jpg') }}" alt="Building Management 2">
                                <img src="{{ asset('images/portfolio/pm-building-3.jpg') }}" alt="Building Management 3">
                                <img src="{{ asset('images/portfolio/pm-building-4.jpg') }}" alt="Building Management 4">
                                <img src="{{ asset('images/portfolio/pm-building-5.jpg') }}" alt="Building Management 5">
                                <img src="{{ asset('images/portfolio/pm-building-6.jpg') }}" alt="Building Management 6">
                            </div>
                        </div>
                    </div>

                    <div class="pm-section">
                        <div class="pm-title">Property Management</div>
                        <div class="pm-subtitle">Smart Parking System</div>

                        <p class="pm-paragraph">
                            Smart Parking System merupakan sebuah solusi sistem parkir aman dan
                            terintegrasi, dapat termonitoring oleh seluruh stakeholder, transparansi
                            data parkir, serta menjadi sistem yang sangat efisien yang didukung oleh
                            payment system yang memberikan pengunjung berbagai pilihan metode
                            pembayaran mulai dari Card-Based Electronic Money, QR-Based hingga
                            Server-Based Electronic Money.
                        </p>

                        <img src="{{ asset('images/portfolio/pm-smart-parking.jpg') }}" class="pm-image-full" alt="Smart Parking System">
                    </div>

                    <div class="pm-section">
                        <div class="pm-subtitle">
                            a. Aplikasi Manage Service Operation (Building Management)
                        </div>

                        <p class="pm-paragraph">
                            Aplikasi ini digunakan untuk membantu proses checklist, monitoring,
                            dan pelaporan pekerjaan building management, seperti ME, HVAC, ICT,
                            housekeeping, dan area operasional lainnya.
                        </p>

                        <img src="{{ asset('images/portfolio/pm-manage-service-operation.jpg') }}" class="pm-image-full" alt="Aplikasi Manage Service Operation">
                    </div>

                    <div class="pm-section">
                        <div class="pm-subtitle">
                            b. Aplikasi Security (MyBirawa)
                        </div>

                        <div class="pm-blue-bar">
                            <b>MyBirawa Security</b> adalah aplikasi berbasis mobile apps dan web
                            untuk monitoring kegiatan patroli petugas Security.
                        </div>

                        <div class="pm-feature-grid">
                            <div class="pm-feature">
                                <b>Fitur Checkpoint</b> adalah digitalisasi kegiatan patroli petugas
                                security dengan fitur scan QR Code di setiap titik lokasi yang harus
                                dilalui petugas saat patroli dan terintegrasi dengan teknologi GPS
                                sehingga pergerakan patroli petugas dapat dipantau.
                            </div>

                            <div class="pm-feature">
                                <b>Fitur Lapor Insiden</b> adalah fitur yang berfungsi untuk melaporkan
                                jika terdapat kejadian pada saat petugas melakukan patroli, seperti
                                kehilangan aset, vandalisme, kebakaran, kebanjiran, gembok terbuka,
                                aset/perangkat kotor dan struktur pondasi rusak.
                            </div>

                            <div class="pm-feature">
                                <b>Tracking</b> berfungsi untuk monitoring kegiatan petugas selama
                                patroli berlangsung secara realtime.
                            </div>
                        </div>

                        <div class="pm-flow-grid">
                            <div>
                                <div class="pm-dark-title">Flow Aplikasi</div>
                                <img src="{{ asset('images/portfolio/pm-mybirawa-flow.jpg') }}" class="pm-image-full" alt="Flow Aplikasi MyBirawa">
                            </div>

                            <div>
                                <div class="pm-dark-title">Fitur Patroli Dalam Gedung</div>

                                <div class="pm-patrol-box">
                                    <ul>
                                        <li><b>Laporan Keluar masuk tamu</b> adalah menu untuk petugas melaporkan kegiatan kunjungan atau tamu.</li>
                                        <li><b>Laporan Mutasi</b> adalah menu untuk melaporkan kegiatan patroli secara keseluruhan setelah menyelesaikan patroli.</li>
                                        <li><b>Serah Terima Jaga</b> adalah laporan untuk serah terima jaga dengan petugas lain.</li>
                                        <li><b>Laporan Situasi</b> adalah menu untuk melaporkan situasi pada saat melaksanakan patroli.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            else if(type === 'projectSolution'){
                modalContent.innerHTML = `
                    <div class="ps-section">
                        <div class="ps-title">Project Solution</div>
                        <div class="ps-subtitle">Renovation &amp; Fitting Out Office</div>

                        <div class="ps-two-column">
                            <div>
                                <div class="ps-desc">
                                    Penyediaan layanan pembuatan dan atau perbaikan interior gedung
                                    seperti plafon, partisi, furniture, dan lain-lain dengan konsep
                                    Open Space Concept agar tercipta Collaboration &amp; Efficiency Space
                                    dengan mempertimbangkan akses untuk infrastruktur digital seperti
                                    Access Point, serta pembuatan dan perbaikan eksterior seperti
                                    landscape, facade, dan lain-lain.
                                </div>

                                <div class="ps-label">Mechanical &amp; Electrical</div>

                                <div class="ps-desc">
                                    Jasa layanan penggantian peralatan M/E dengan mengutamakan
                                    efisiensi penggunaan energi, efisiensi opex dengan preventive
                                    maintenance dan optimalisasi capex.
                                </div>
                            </div>

                            <div class="ps-image-grid">
                                <img src="{{ asset('images/portfolio/ps-renovation-1.jpg') }}" alt="Renovation 1">
                                <img src="{{ asset('images/portfolio/ps-renovation-2.jpg') }}" alt="Renovation 2">
                                <img src="{{ asset('images/portfolio/ps-renovation-3.jpg') }}" alt="Renovation 3">
                                <img src="{{ asset('images/portfolio/ps-renovation-4.jpg') }}" alt="Renovation 4">
                                <img src="{{ asset('images/portfolio/ps-renovation-5.jpg') }}" alt="Renovation 5">
                            </div>
                        </div>
                    </div>

                    <div class="ps-section">
                        <div class="ps-title">Project Solution</div>
                        <div class="ps-subtitle">Smart Property</div>

                        <p class="ps-paragraph">
                            Solusi terintegrasi Sistem Telekomunikasi, Building Automation (BA),
                            Office Automation (OA), dan Touchless System untuk mengoptimalkan
                            efisiensi, kenyamanan, fungsi, stabilitas layanan, keamanan dan
                            keselamatan di lingkungan gedung/bangunan.
                        </p>

                        <ul class="ps-list">
                            <li>Energy Management</li>
                            <li>Smart Lighting</li>
                            <li>Visitor Management System</li>
                            <li>Smart Meeting Room</li>
                            <li>Occupancy Monitoring System</li>
                            <li>PEST Control</li>
                            <li>Process Automation</li>
                            <li>Security Management System</li>
                            <li>Smart Meter</li>
                            <li>Fire Alarm</li>
                        </ul>

                        <img src="{{ asset('images/portfolio/ps-smart-property.jpg') }}" class="ps-image-full" alt="Smart Property">

                        <div class="ps-keywords">
                            <span>Wireless</span>
                            <span>Paperless</span>
                            <span>Seamless</span>
                            <span>Riskless</span>
                        </div>
                    </div>

                    <div class="ps-section">
                        <div class="ps-subtitle">Smart Property Topology</div>

                        <p class="ps-paragraph">
                            Topologi Smart Property menggambarkan integrasi sistem IBMS, BEMS,
                            BAS, IoT, access control, fire alarm, CCTV, PAVA, energy utilities,
                            equipment management, comfort service, serta monitoring fasilitas
                            gedung secara terpusat.
                        </p>

                        <img src="{{ asset('images/portfolio/ps-topology.jpg') }}" class="ps-image-full" alt="Smart Property Topology">
                    </div>

                    <div class="ps-section">
                        <div class="ps-title">Project Solution</div>
                        <div class="ps-subtitle">PJU Based on IOT</div>

                        <div class="ps-two-column">
                            <div>
                                <div class="ps-label">Smart Street Light Sensor</div>

                                <div class="ps-desc">
                                    PJU IOT Smart Street Light Sensor adalah sensor atau IoT Device
                                    yang dipasangkan di tiang lampu yang terhubung dengan lampu PJU
                                    dan akan memonitor serta mengontrol lampu PJU secara real time
                                    dari jarak jauh dengan teknologi baru LoRa.
                                </div>

                                <div class="ps-label">Benefit</div>

                                <div class="ps-benefit">
                                    <ul>
                                        <li>Monitor status lampu ON-OFF secara real time.</li>
                                        <li>Notifikasi jika ada kerusakan atau lampu mati secara real time.</li>
                                        <li>Kendali ON-OFF dari jarak jauh secara real time.</li>
                                        <li>Biaya konektivitas murah menggunakan teknologi baru LoRa dibandingkan GSM.</li>
                                        <li>Management dengan geo-location dalam satu dashboard.</li>
                                        <li>Monitoring penggunaan konsumsi energi listrik (KWH).</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="ps-small-gallery">
                                <img src="{{ asset('images/portfolio/ps-pju-1.jpg') }}" alt="PJU 1">
                                <img src="{{ asset('images/portfolio/ps-pju-2.jpg') }}" alt="PJU 2">
                                <img src="{{ asset('images/portfolio/ps-pju-3.jpg') }}" alt="PJU 3">
                                <img src="{{ asset('images/portfolio/ps-pju-4.jpg') }}" alt="PJU 4">
                                <img src="{{ asset('images/portfolio/ps-pju-5.jpg') }}" alt="PJU 5">
                                <img src="{{ asset('images/portfolio/ps-pju-6.jpg') }}" alt="PJU 6">
                            </div>
                        </div>
                    </div>
                `;
            }

            else if(type === 'transportation'){
                modalContent.innerHTML = `
                    <div class="tms-section">
                        <div class="tms-title">Transportation Management Service</div>
                        <div class="tms-subtitle">Fleet &amp; Driver (Dispatcher)</div>

                        <div class="tms-two-column">
                            <div>
                                <div class="tms-desc">
                                    Solusi penyediaan dan sewa kendaraan roda empat dan roda dua
                                    bagi operasional perusahaan seperti kendaraan dinas harian,
                                    kendaraan logistik, kendaraan eksekutif, shuttle bus atau
                                    kendaraan antar jemput karyawan yang didukung aplikasi TRENDS
                                    Online dan Fleet Management System untuk pengelolaan armada.
                                </div>

                                <div class="tms-label">Benefit</div>

                                <div class="tms-benefit">
                                    <ul>
                                        <li><b>Customer Centric :</b> Memperhatikan kebutuhan customer.</li>
                                        <li><b>All Risk Insurance :</b> Semua kendaraan sewa dilindungi oleh asuransi all risk untuk keamanan dan kenyamanan pelanggan.</li>
                                        <li><b>Smart Offering :</b> Harga sewa kendaraan yang terbaik dan kompetitif dengan perusahaan rental ternama.</li>
                                        <li><b>Full Maintenance :</b> Perawatan berkala dan perbaikan yang cepat serta berkualitas untuk menjamin kendaraan yang optimal.</li>
                                        <li><b>Coverage :</b> Memberikan layanan Transportation Management Service secara Nasional.</li>
                                        <li><b>World Class Service :</b> Berpengalaman dalam memberikan layanan secara profesional dan terintegrasi dengan Fleet Management System.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tms-images">
                                <img src="{{ asset('images/portfolio/tms-building.jpg') }}" class="tms-main-img" alt="Transportation Building">

                                <div class="tms-side-grid">
                                    <img src="{{ asset('images/portfolio/tms-driver.jpg') }}" alt="Driver Service">
                                    <img src="{{ asset('images/portfolio/tms-fleet.jpg') }}" alt="Fleet Service">
                                    <img src="{{ asset('images/portfolio/tms-trends.jpg') }}" alt="Trends Online">
                                    <img src="{{ asset('images/portfolio/tms-fms.jpg') }}" alt="Fleet Management System">
                                    <img src="{{ asset('images/portfolio/tms-vehicles.jpg') }}" class="tms-vehicle-img" alt="Vehicle Fleet">
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            document.getElementById('modalOverlay').classList.add('active');
        }

        function closeModal(){
            document.getElementById('modalOverlay').classList.remove('active');
        }

        document.getElementById('modalOverlay').addEventListener('click', function(e){
            if(e.target === this){
                closeModal();
            }
        });
    </script>

</body>
</html>
