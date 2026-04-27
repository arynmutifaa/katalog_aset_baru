<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Scheme - Telkom Property</title>

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

        .business-page{
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

        .business-wrapper{
            max-width:1250px;
            margin:0 auto;
            display:grid;
            grid-template-columns:0.85fr 1.55fr;
            gap:28px;
            align-items:stretch;
        }

        .business-left{
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

        .business-badge{
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

        .business-left h1{
            font-size:50px;
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

        .business-left p{
            color:rgba(255,255,255,0.86);
            font-size:15px;
            line-height:1.8;
        }

        .business-right{
            background:rgba(255,255,255,0.96);
            border-radius:28px;
            padding:32px;
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
            font-size:32px;
            color:#2c2f38;
            margin-bottom:6px;
            font-weight:800;
        }

        .header-text p{
            font-size:15px;
            color:#666;
            line-height:1.7;
        }

        .menu-grid{
            display:grid;
            grid-template-columns:repeat(2, 1fr);
            gap:18px;
        }

        .menu-card{
            border:none;
            cursor:pointer;
            text-align:left;
            background:#f8f9fc;
            border:1px solid #eceef5;
            border-radius:22px;
            padding:24px;
            transition:0.3s;
            min-height:145px;
        }

        .menu-card:hover{
            transform:translateY(-6px);
            box-shadow:0 16px 32px rgba(227,6,19,0.18);
        }

        .menu-number{
            width:48px;
            height:48px;
            border-radius:14px;
            background:#E30613;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:800;
            margin-bottom:14px;
            box-shadow:0 8px 18px rgba(227,6,19,0.22);
        }

        .menu-card h3{
            font-size:21px;
            color:#2c2f38;
            margin-bottom:8px;
            font-weight:800;
        }

        .menu-card p{
            font-size:14px;
            color:#666;
            line-height:1.7;
        }

        /* MODAL */
        .modal-overlay{
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.68);
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
            max-width:1180px;
            max-height:88vh;
            background:#fff;
            border-radius:26px;
            padding:34px;
            overflow-y:auto;
            position:relative;
            box-shadow:0 25px 80px rgba(0,0,0,0.35);
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
            width:42px;
            height:42px;
            border:none;
            border-radius:50%;
            background:#E30613;
            color:white;
            font-size:24px;
            font-weight:800;
            cursor:pointer;
            z-index:10;
        }

        .modal-title{
            display:inline-block;
            background:#d91f11;
            color:white;
            padding:12px 26px;
            border-radius:9px;
            font-size:34px;
            font-weight:800;
            margin-bottom:18px;
        }

        .modal-subtitle{
            font-size:22px;
            color:#222;
            margin-bottom:24px;
        }

        .content-section{
            margin-bottom:42px;
            padding-bottom:32px;
            border-bottom:1px solid #eee;
            clear:both;
        }

        .content-section:last-child{
            border-bottom:none;
            margin-bottom:0;
        }

        /* BUSINESS SCHEME */
        .scheme-grid{
            display:grid;
            grid-template-columns:repeat(4, 1fr);
            gap:20px;
            margin-top:36px;
        }

        .scheme-card{
            position:relative;
            background:#d9d7d7;
            border-radius:18px;
            padding:50px 18px 24px;
            min-height:220px;
            text-align:center;
        }

        .scheme-card.tall{
            min-height:330px;
        }

        .scheme-card-title{
            position:absolute;
            top:-18px;
            left:14px;
            right:14px;
            background:#d91f11;
            color:white;
            border-radius:7px;
            padding:10px;
            font-size:15px;
            font-weight:800;
            line-height:1.25;
        }

        .scheme-card p{
            font-size:14px;
            line-height:1.55;
        }

        .scheme-list{
            margin-top:24px;
            display:flex;
            flex-direction:column;
            gap:18px;
            text-align:left;
        }

        .scheme-list-item{
            display:grid;
            grid-template-columns:36px 1fr;
            gap:8px;
            align-items:center;
            font-size:14px;
        }

        .scheme-circle{
            width:32px;
            height:32px;
            border-radius:50%;
            background:#c51d2a;
        }

        /* IMAGE LAYOUT */
        .image-grid-3{
            display:grid;
            grid-template-columns:0.6fr 0.6fr 1.4fr;
            gap:16px;
            align-items:start;
        }

        .image-grid-2{
            display:grid;
            grid-template-columns:1fr 1.4fr;
            gap:24px;
            align-items:center;
        }

        .image-card{
            width:100%;
            border-radius:10px;
            border:1px solid #e5e5e5;
            background:#fff;
            object-fit:cover;
        }

        .image-tall{
            height:360px;
            object-fit:cover;
        }

        .image-wide{
            width:100%;
            border-radius:10px;
            border:1px solid #e5e5e5;
            background:#fff;
        }

        .catalog-desc{
            background:#d9d7d7;
            border:2px solid #37659a;
            padding:24px;
            border-radius:4px;
            font-size:16px;
            line-height:1.8;
            color:#111;
            text-align:justify;
        }

        .catalog-note{
            margin-top:12px;
            font-size:14px;
            text-align:right;
        }

        /* TABLE */
        .legal-table,
        .expert-table{
            width:100%;
            border-collapse:collapse;
            background:#fff;
            font-size:14px;
            margin-top:18px;
        }

        .legal-table th,
        .expert-table th{
            background:#d91f11;
            color:white;
            padding:9px;
            border:2px solid #111;
            text-align:center;
        }

        .legal-table td,
        .expert-table td{
            border:2px solid #111;
            padding:8px 10px;
            vertical-align:top;
        }

        .legal-table td:first-child,
        .expert-table td:first-child,
        .expert-table td:nth-child(3),
        .expert-table td:nth-child(4){
            text-align:center;
        }

        .expert-layout{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:28px;
            align-items:start;
        }

        .expert-list{
            font-size:14px;
            line-height:1.65;
        }

        .expert-list ol{
            padding-left:22px;
        }

        .cert-grid{
            display:grid;
            grid-template-columns:0.7fr 1.3fr;
            gap:28px;
            align-items:start;
        }

        .cert-images{
            display:grid;
            grid-template-columns:repeat(2, 1fr);
            gap:10px;
        }

        .cert-images img{
            width:100%;
            border-radius:6px;
            border:1px solid #ddd;
        }

        .cert-list{
            font-size:14px;
            line-height:1.65;
        }

        .cert-list ol{
            padding-left:22px;
        }

        .cert-list li{
            margin-bottom:6px;
            font-weight:600;
        }

        @media(max-width:1200px){
            .business-wrapper{
                grid-template-columns:1fr;
            }

            .scheme-grid{
                grid-template-columns:repeat(2, 1fr);
            }
        }

        @media(max-width:900px){
            .menu-grid,
            .image-grid-3,
            .image-grid-2,
            .expert-layout,
            .cert-grid{
                grid-template-columns:1fr;
            }

            .scheme-grid{
                grid-template-columns:1fr;
            }

            .image-tall{
                height:auto;
            }

            .modal-title{
                font-size:26px;
            }
        }

        @media(max-width:768px){
            .navbar{
                padding:12px 20px;
                flex-direction:column;
                align-items:flex-start;
                gap:12px;
            }

            .business-page{
                padding:120px 20px 40px;
                background-attachment:scroll;
            }

            .business-left,
            .business-right{
                padding:22px;
            }

            .business-left h1{
                font-size:34px;
            }

            .header-box{
                flex-direction:column;
            }

            .modal-box{
                padding:22px;
            }

            .legal-table,
            .expert-table{
                font-size:11px;
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

    <section class="business-page">
        <div class="business-wrapper">

            <div class="business-left">
                <div class="business-badge">04 • Business Scheme</div>
                <h1>Business Scheme</h1>
                <div class="mini-line"></div>

            </div>

            <div class="business-right">
                <div class="header-box">
                    <div class="header-number">04</div>
                    <div class="header-text">
                        <h2>Business Scheme</h2>

                    </div>
                </div>

                <div class="menu-grid">
                    <button class="menu-card" onclick="openModal('scheme')">
                        <div class="menu-number">01</div>
                        <h3>Business Scheme</h3>
                        <p>Jenis-jenis skema kerja sama yang dapat dijalin dengan Telkom Property.</p>
                    </button>

                    <button class="menu-card" onclick="openModal('usecase')">
                        <div class="menu-number">02</div>
                        <h3>Use Case e-Katalog & LPSE</h3>
                        <p>Contoh pengadaan jasa kebersihan dan tenaga kearsipan.</p>
                    </button>

                    <button class="menu-card" onclick="openModal('catalog')">
                        <div class="menu-number">03</div>
                        <h3>Katalog Elektronik</h3>
                        <p>Informasi pendaftaran GSD pada Katalog Elektronik LKPP.</p>
                    </button>

                    <button class="menu-card" onclick="openModal('legal')">
                        <div class="menu-number">04</div>
                        <h3>Legalitas & Perijinan</h3>
                        <p>Data surat legalitas dan perizinan perusahaan.</p>
                    </button>

                    <button class="menu-card" onclick="openModal('certification')">
                        <div class="menu-number">05</div>
                        <h3>Sertifikasi & Tenaga Ahli</h3>
                        <p>Daftar sertifikasi, tenaga ahli, dan sertifikasi lainnya.</p>
                    </button>
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

            if(type === 'scheme'){
                modalContent.innerHTML = `
                    <div class="modal-title">Business Scheme</div>
                    <div class="modal-subtitle">Jenis-jenis skema kerja sama yang dapat dijalin dengan Telkom Property</div>

                    <div class="scheme-grid">
                        <div class="scheme-card">
                            <div class="scheme-card-title">Build, Operate, Transfer</div>
                            <p>
                                Kerja sama antara pemilik lahan GSD dengan mitra yang ingin membangun gedung
                                di lahan tersebut, dimana di masa akhir kontrak asset harus diberikan kepada Telkom.
                                <br><br>
                                <b>Cth: GMP dan TLT</b>
                            </p>
                        </div>

                        <div class="scheme-card tall">
                            <div class="scheme-card-title">Kerja Sama Usaha</div>
                            <p>
                                Pendanaan pembangunan/renovasi asset yang akan digunakan menggunakan capex GSD,
                                dan dimasa akhir kontrak asset harus di demolish/dikembalikan pada keadaan semula.
                            </p>

                            <div class="scheme-list">
                                <div class="scheme-list-item">
                                    <div class="scheme-circle"></div>
                                    <div><b>Revenue Sharing</b></div>
                                </div>

                                <div class="scheme-list-item">
                                    <div class="scheme-circle"></div>
                                    <div><b>Profit Sharing</b></div>
                                </div>

                                <div class="scheme-list-item">
                                    <div class="scheme-circle"></div>
                                    <div><b>Other</b><br>We are open for any kind of collaboration</div>
                                </div>
                            </div>
                        </div>

                        <div class="scheme-card">
                            <div class="scheme-card-title">Kerja Sama Operasi</div>
                            <p>
                                Masing-masing pihak sama-sama melakukan investasi dan menjalankan bisnis bersama.
                                <br><br>
                                <b>Alternatif Kerja Sama:</b><br>
                                Penyediaan SDM, Alat & Perlengkapan Bisnis (Aset), Pembangunan Gedung, dll.
                            </p>
                        </div>

                        <div class="scheme-card">
                            <div class="scheme-card-title">Kerja Sama Proyek</div>
                            <p>
                                Pelaksanaan konstruksi dan pengelolaan kegiatan proyek, baik untuk pembangunan/renovasi
                                untuk keperluan industri, perkantoran di sektor Pemerintahan, BUMN, maupun swasta.
                                <br><br>
                                <b>Alternatif Kerja Sama:</b><br>
                                Bersifat OTC, penyediaan SDM, sarana & prasarana, alat & perlengkapan pembangunan/renovasi gedung, dll.
                            </p>
                        </div>
                    </div>
                `;
            }

            else if(type === 'usecase'){
                modalContent.innerHTML = `
                    <div class="content-section">
                        <div class="modal-title">Use Case pengadaan melalui e-katalog & LPSE</div>
                        <div class="modal-subtitle">Jasa Kebersihan Petugas & Pengawas Jasa Kebersihan</div>

                        <div class="image-grid-3">
                            <img src="{{ asset('images/business/usecase-cleaning-1.jpg') }}" class="image-card image-tall" alt="Use Case Cleaning 1">
                            <img src="{{ asset('images/business/usecase-cleaning-2.jpg') }}" class="image-card image-tall" alt="Use Case Cleaning 2">
                            <img src="{{ asset('images/business/usecase-cleaning-detail.jpg') }}" class="image-card" alt="Use Case Detail">
                        </div>
                    </div>

                    <div class="content-section">
                        <div class="modal-title">Use Case pengadaan melalui e-katalog & LPSE</div>
                        <div class="modal-subtitle">Jasa Pengelolaan Tenaga Kearsipan</div>

                        <img src="{{ asset('images/business/usecase-kearsipan.jpg') }}" class="image-wide" alt="Use Case Kearsipan">
                    </div>
                `;
            }

            else if(type === 'catalog'){
                modalContent.innerHTML = `
                    <div class="modal-title">Katalog Elektronik</div>

                    <div class="image-grid-2">
                        <div class="catalog-desc">
                            <b>Katalog Elektronik</b> adalah aplikasi elektronik yang memberikan kemudahan
                            bagi kementerian/lembaga/instansi dalam proses pengadaan barang dan jasa.
                            Menjamin kepastian spesifikasi teknik akan barang/jasa yang dipesan dan
                            harga yang ditawarkan juga seragam.
                        </div>

                        <div>
                            <img src="{{ asset('images/business/katalog-elektronik.jpg') }}" class="image-wide" alt="Katalog Elektronik">
                            <div class="catalog-note">
                                <b>Cat :</b> GSD telah terdaftar di Katalog Elektronik LKPP
                            </div>
                        </div>
                    </div>
                `;
            }

            else if(type === 'legal'){
                modalContent.innerHTML = `
                    <div class="modal-title">Surat legalitas & perijinan</div>

                    <table class="legal-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Uraian</th>
                                <th>Nomor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Akta Pendirian Perusahaan</td><td>135, 30 November 1982</td></tr>
                            <tr><td>2</td><td>Akta Perubahan Terakhir</td><td>19, 28 Januari 2022</td></tr>
                            <tr><td>3</td><td>Nomor Induk Berusaha (NIB)</td><td>8120010002786, 28 Oktober 2018</td></tr>
                            <tr><td>4</td><td>NPWP</td><td>01.002.944.5-093.000</td></tr>
                            <tr><td>5</td><td>Keterangan Domisili Perusahaan</td><td>14/27.1BU.1/31.71.01.1001/-71.562/e/2017, 12 Januari 2017</td></tr>
                            <tr><td>6</td><td>Sertifikat Badan Usaha Jasa Pelaksana Konstruksi</td><td>0-3173-06-133-1-09-003890, 22 September 2021</td></tr>
                            <tr><td>7</td><td>Ijin Usaha Jasa Konstruksi Nasional</td><td>35/C.31/31.71.01.1001.05.013.P.1.e/2/-1.785.56/e/2021, 22 Maret 2021</td></tr>
                            <tr><td>8</td><td>Gabungan Rekanan Konstruksi Indonesia</td><td>09-3173-00022</td></tr>
                        </tbody>
                    </table>
                `;
            }

            else if(type === 'certification'){
                modalContent.innerHTML = `
                    <div class="content-section">
                        <div class="modal-title">Sertifikasi & Tenaga Ahli</div>

                        <div class="expert-layout">
                            <div class="expert-list">
                                <ol type="a">
                                    <li>Jasa Pelaksana Konstruksi Bangunan Fasilitas Olah Raga Indoor dan Fasilitas Rekreasi tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Hunian Tunggal dan Koppel tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Multi atau Banyak Hunian tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Gudang dan Industri tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Komersial tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Hotel, Restoran, dan Bangunan Serupa Lainnya tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Pendidikan tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Kesehatan tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Untuk Konstruksi Bangunan Gedung Lainnya tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Konstruksi Pemasangan Pendingin Udara dan Ventilasi tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Konstruksi Pemasangan Pipa Air dalam Bangunan dan Salurannya tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Konstruksi Pemasangan Lift dan Tangga Berjalan tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Instalasi Sistem Kontrol dan Instrumentasi tahun 2018-2021.</li>
                                    <li>Jasa Pelaksana Instalasi Tenaga Listrik Gedung dan Pabrik tahun 2018-2021.</li>
                                    <li>Jasa Pengembangan Real Estate Perumahan dan Pemukiman tahun 2018.</li>
                                    <li>Jasa Pengembangan Real Estate Pengembangan Properti Gedung/Ruang Perkantoran tahun 2018.</li>
                                    <li>Jasa Pengembangan Real Estate Manajemen Properti tahun 2018.</li>
                                    <li>Jasa Lainnya: Jasa Pembersih tahun 2018.</li>
                                </ol>
                            </div>

                            <table class="expert-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keahlian</th>
                                        <th>Level</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td><td>Ahli Pemeliharaan & Perawatan Bangunan</td><td>Madya</td><td>1</td></tr>
                                    <tr><td>2</td><td>Ahli Arsitek</td><td>Madya</td><td>1</td></tr>
                                    <tr><td>3</td><td>Ahli Mekanikal</td><td>Madya</td><td>1</td></tr>
                                    <tr><td>4</td><td>Ahli Tenaga Listrik</td><td>Madya</td><td>2</td></tr>
                                    <tr><td>5</td><td>Ahli Teknik Gedung</td><td>Madya</td><td>3</td></tr>
                                    <tr><td>6</td><td>Manajemen Konstruksi</td><td>Madya</td><td>1</td></tr>
                                    <tr><td>7</td><td>Ahli Manajemen Proyek</td><td>Madya</td><td>2</td></tr>
                                    <tr><td>8</td><td>Ahli K3 Konstruksi</td><td>Madya</td><td>4</td></tr>
                                    <tr><td>9</td><td>Ahli K3 Konstruksi</td><td>Muda</td><td>3</td></tr>
                                    <tr><td>10</td><td>Ahli Housekeeping and Hospitality</td><td>Muda</td><td>3</td></tr>
                                    <tr><td>11</td><td>Ahli Cleaning Service</td><td>Muda</td><td>1</td></tr>
                                    <tr><td>12</td><td>Ahli K3 Listrik</td><td>Madya</td><td>5</td></tr>
                                    <tr><td>13</td><td>Ahli K3 Listrik</td><td>Muda</td><td>26</td></tr>
                                    <tr><td>14</td><td>Ahli K3 Penanggulangan Kebakaran</td><td>Muda</td><td>6</td></tr>
                                    <tr><td>15</td><td>Ahli K3 Penyedia Operasi Lift dan Eskalator</td><td>Muda</td><td>18</td></tr>
                                    <tr><td>16</td><td>Ahli K3 Umum</td><td>Madya</td><td>2</td></tr>
                                    <tr><td>17</td><td>Ahli K3 Umum</td><td>Muda</td><td>14</td></tr>
                                    <tr><td>18</td><td>Ahli K3 P3K</td><td>Muda</td><td>6</td></tr>
                                    <tr><td>19</td><td>Ahli K3 Bidang Pesawat Uap dan Bejana Tekanan</td><td>Muda</td><td>1</td></tr>
                                    <tr><td>20</td><td>Ahli K3 Bidang Pesawat Angkat dan Angkut</td><td>Muda</td><td>2</td></tr>
                                    <tr><td>21</td><td>Ahli K3 Bidang Pesawat Tenaga dan Produksi</td><td>Muda</td><td>17</td></tr>
                                    <tr><td>22</td><td>Ahli Property Management</td><td>Muda</td><td>10</td></tr>
                                    <tr><td>23</td><td>Ahli K3 Gondola</td><td>Muda</td><td>1</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="content-section">
                        <div class="modal-title">Sertifikasi Lainnya</div>

                        <div class="cert-grid">
                            <div class="cert-images">
                                <img src="{{ asset('images/business/sertifikat-1.jpg') }}" alt="Sertifikat 1">
                                <img src="{{ asset('images/business/sertifikat-2.jpg') }}" alt="Sertifikat 2">
                                <img src="{{ asset('images/business/sertifikat-3.jpg') }}" alt="Sertifikat 3">
                                <img src="{{ asset('images/business/sertifikat-4.jpg') }}" alt="Sertifikat 4">
                                <img src="{{ asset('images/business/sertifikat-5.jpg') }}" alt="Sertifikat 5">
                                <img src="{{ asset('images/business/sertifikat-6.jpg') }}" alt="Sertifikat 6">
                            </div>

                            <div class="cert-list">
                                <p>
                                    TelkomProperty juga memiliki prosedur operasional dan pemeliharaan yang standar,
                                    dan diimplementasikan secara konsisten untuk seluruh lokasi gedung yang dikelola.
                                </p>

                                <br>

                                <ol>
                                    <li>Sertifikasi ISO 9001:2015, Quality Management System.</li>
                                    <li>Sertifikasi ISO 14001:2015, Environmental Management System.</li>
                                    <li>Sertifikasi ISO 45001:2018, Occupational Health & Management System.</li>
                                    <li>Sertifikasi Sistem Manajemen Keselamatan & Kesehatan Kerja.</li>
                                    <li>Sertifikasi Gred 6 GAPENSI.</li>
                                    <li>Sertifikasi Keahlian Asosiasi Tenaga Konstruksi Indonesia.</li>
                                    <li>Sertifikasi Keahlian Ahli Madya Pelaksana Jalan.</li>
                                    <li>Sertifikasi Keanggotaan Biasa ABUJAPI.</li>
                                    <li>Sertifikasi Badan Usaha Jasa Pelaksana Konstruksi Arsitektural.</li>
                                    <li>Sertifikasi Badan Usaha Jasa Pelaksana Konstruksi Sipil.</li>
                                    <li>Sertifikasi Badan Usaha Jasa Pelaksana Konstruksi Mekanikal.</li>
                                    <li>Sertifikasi Keanggotaan Asosiasi Pengusaha Indonesia.</li>
                                    <li>Sertifikasi Keanggotaan Asosiasi Perawatan Bangunan.</li>
                                </ol>
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
