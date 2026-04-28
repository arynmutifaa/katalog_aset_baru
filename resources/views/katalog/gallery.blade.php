<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Telkom Property</title>

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

        .gallery-page{
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

        .gallery-wrapper{
            max-width:1250px;
            margin:0 auto;
            display:grid;
            grid-template-columns:0.85fr 1.55fr;
            gap:28px;
            align-items:stretch;
        }

        .gallery-left{
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

        .gallery-badge{
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

        .gallery-left h1{
            font-size:56px;
            line-height:1.1;
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

        .gallery-left p{
            color:rgba(255,255,255,0.86);
            font-size:15px;
            line-height:1.8;
        }

        .gallery-right{
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
            grid-template-columns:repeat(3, 1fr);
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
    min-height:180px;

    display:flex;
    flex-direction:column;
    justify-content:flex-start;
}

        .menu-card:hover{
            transform:translateY(-6px);
            box-shadow:0 16px 32px rgba(227,6,19,0.18);
        }

        .menu-number{
    width:60px;
    height:60px;
    border-radius:18px;
    background:#E30613;
    color:white;

    display:flex;
    align-items:center;
    justify-content:center;

    font-weight:800;
    margin-bottom:16px;
    box-shadow:0 8px 18px rgba(227,6,19,0.22);

    flex-shrink:0;
}

        .menu-card h3{
    font-size:21px;
    color:#2c2f38;
    margin-bottom:8px;
    font-weight:800;

    min-height:52px;
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
            font-size:20px;
            color:#333;
            margin-bottom:28px;
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

        .award-box{
            background:#d9d7d7;
            border-radius:18px;
            padding:24px;
            display:grid;
            grid-template-columns:90px 1fr;
            gap:18px;
            align-items:center;
            margin-bottom:24px;
        }

        .vertical-label{
            background:#cfcfcf;
            border-radius:18px;
            min-height:130px;
            display:flex;
            align-items:center;
            justify-content:center;
            writing-mode:vertical-rl;
            transform:rotate(180deg);
            font-size:20px;
            font-weight:800;
            color:#111;
        }

        .award-list{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:18px 28px;
        }

        .award-item{
            display:grid;
            grid-template-columns:40px 1fr;
            gap:12px;
            align-items:start;
        }

        .award-number{
            width:34px;
            height:34px;
            border-radius:50%;
            background:#9d1c2d;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-weight:800;
        }

        .award-text{
            font-size:15px;
            line-height:1.55;
        }

        .partner-box{
            background:#d9d7d7;
            border-radius:18px;
            padding:24px;
            display:grid;
            grid-template-columns:90px 1fr;
            gap:18px;
            align-items:center;
        }

        .partner-logo-grid{
            display:grid;
            grid-template-columns:repeat(5, 1fr);
            gap:16px;
            align-items:center;
        }

        .partner-logo-grid img{
            width:100%;
            max-height:60px;
            object-fit:contain;
            background:white;
            border-radius:10px;
            padding:8px;
            border:1px solid #eee;
        }

        .wide-image{
            width:100%;
            border-radius:12px;
            border:1px solid #e5e5e5;
            background:#fff;
        }

        .experience-text{
            text-align:center;
            margin:24px auto;
            color:#9d1c2d;
            font-size:20px;
            line-height:1.5;
            font-weight:500;
            max-width:760px;
            text-transform:uppercase;
        }

        .photo-category-grid{
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
            gap:18px;
        }

        .photo-panel{
            background:#fff;
            border-radius:14px;
            overflow:hidden;
            border:1px solid #e5e5e5;
            box-shadow:0 8px 18px rgba(0,0,0,0.06);
        }

        .photo-title{
            background:#d91f11;
            color:white;
            text-align:center;
            font-weight:700;
            padding:8px;
            font-size:14px;
        }

        .photo-grid{
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:5px;
            padding:8px;
        }

        .photo-grid img{
            width:100%;
            height:72px;
            object-fit:cover;
            border-radius:4px;
            background:#eee;
            cursor:pointer;
            transition:0.25s;
        }

        .photo-grid img:hover{
            transform:scale(1.04);
            box-shadow:0 8px 18px rgba(0,0,0,0.18);
        }

        .preview-overlay{
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.82);
            display:none;
            align-items:center;
            justify-content:center;
            z-index:4000;
            padding:30px;
        }

        .preview-overlay.active{
            display:flex;
        }

        .preview-overlay img{
            max-width:92vw;
            max-height:88vh;
            border-radius:14px;
            background:#fff;
        }

        .preview-close{
            position:absolute;
            top:24px;
            right:34px;
            width:44px;
            height:44px;
            border:none;
            border-radius:50%;
            background:#E30613;
            color:#fff;
            font-size:26px;
            font-weight:800;
            cursor:pointer;
        }

        @media(max-width:1200px){
            .gallery-wrapper{
                grid-template-columns:1fr;
            }

            .menu-grid{
                grid-template-columns:1fr 1fr;
            }

            .photo-category-grid{
                grid-template-columns:1fr;
            }
        }

        @media(max-width:900px){
            .award-box,
            .partner-box{
                grid-template-columns:1fr;
            }

            .vertical-label{
                writing-mode:horizontal-tb;
                transform:none;
                min-height:auto;
                padding:14px;
            }

            .award-list{
                grid-template-columns:1fr;
            }

            .partner-logo-grid{
                grid-template-columns:repeat(3, 1fr);
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

            .gallery-page{
                padding:120px 20px 40px;
                background-attachment:scroll;
            }

            .gallery-left,
            .gallery-right{
                padding:22px;
            }

            .gallery-left h1{
                font-size:36px;
            }

            .header-box{
                flex-direction:column;
            }

            .menu-grid{
                grid-template-columns:1fr;
            }

            .modal-box{
                padding:22px;
            }

            .partner-logo-grid{
                grid-template-columns:repeat(2, 1fr);
            }

            .photo-grid img{
                height:90px;
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

    <section class="gallery-page">
        <div class="gallery-wrapper">

            <div class="gallery-left">
                <div class="gallery-badge">05 • Gallery</div>
                <h1>Gallery</h1>
                <div class="mini-line"></div>

            </div>

            <div class="gallery-right">
                <div class="header-box">
                    <div class="header-number">05</div>
                    <div class="header-text">
                        <h2>Gallery</h2>

                    </div>
                </div>

                <div class="menu-grid">
                    <button class="menu-card" onclick="openModal('award')">
                        <div class="menu-number">01</div>
                        <h3>Award & Recognition</h3>
                        <p>Daftar penghargaan dan client partner Telkom Property.</p>
                    </button>

                    <button class="menu-card" onclick="openModal('experience')">
                        <div class="menu-number">02</div>
                        <h3>Building Management Experience</h3>
                        <p>Pengalaman pengelolaan gedung Telkom dari barat hingga timur Indonesia.</p>
                    </button>

                    <button class="menu-card" onclick="openModal('gallery')">
                        <div class="menu-number">03</div>
                        <h3>Photo Gallery</h3>
                        <p>Dokumentasi property development, project solution, property management, dan facility management.</p>
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

    <div class="preview-overlay" id="previewOverlay">
        <button class="preview-close" onclick="closePreview()">×</button>
        <img id="previewImage" src="" alt="Preview Gallery">
    </div>

    <script>
        function openModal(type){
            const modalContent = document.getElementById('modalContent');

            if(type === 'award'){
                modalContent.innerHTML = `
                    <div class="content-section">
                        <div class="modal-title">Award & Recognition</div>

                        <div class="award-box">
                            <div class="vertical-label">Awards</div>

                            <div class="award-list">
                                <div class="award-item">
                                    <div class="award-number">1</div>
                                    <div class="award-text">Best Mid Rise Office Dev. from Indonesia Property Award 7th <b>(2021)</b></div>
                                </div>

                                <div class="award-item">
                                    <div class="award-number">2</div>
                                    <div class="award-text">National Energy Efficiency Award (PEEN) <b>(2021 & 2019)</b></div>
                                </div>

                                <div class="award-item">
                                    <div class="award-number">3</div>
                                    <div class="award-text">The Best Asset Manager from Ministry of Finance <b>(2019)</b></div>
                                </div>

                                <div class="award-item">
                                    <div class="award-number">4</div>
                                    <div class="award-text">ASEAN Energy Award <b>(2017)</b></div>
                                </div>

                                <div class="award-item">
                                    <div class="award-number">5</div>
                                    <div class="award-text">Platinum Design Award from Green Building Council Indonesia (GBCI) <b>(2015)</b></div>
                                </div>

                                <div class="award-item">
                                    <div class="award-number">6</div>
                                    <div class="award-text">Best Futura Project dari MPIM Asia Award <b>(2015)</b></div>
                                </div>
                            </div>
                        </div>

                        <div class="partner-box">
                            <div class="vertical-label">Client & Partner</div>

                            <div class="partner-logo-grid">
                                <img src="{{ asset('images/gallery/logo-telkom-indonesia.jpg') }}" alt="Telkom Indonesia">
                                <img src="{{ asset('images/gallery/logo-telkomsel.jpg') }}" alt="Telkomsel">
                                <img src="{{ asset('images/gallery/logo-skkmigas.jpg') }}" alt="SKK Migas">
                                <img src="{{ asset('images/gallery/logo-tiki.jpg') }}" alt="TIKI">
                                <img src="{{ asset('images/gallery/logo-pertamina.jpg') }}" alt="Pertamina">
                                <img src="{{ asset('images/gallery/logo-bri.jpg') }}" alt="BRI">
                                <img src="{{ asset('images/gallery/logo-mcd.jpg') }}" alt="McDonalds">
                                <img src="{{ asset('images/gallery/logo-indofood.jpg') }}" alt="Indofood">
                                <img src="{{ asset('images/gallery/logo-cimb.jpg') }}" alt="CIMB Niaga">
                                <img src="{{ asset('images/gallery/logo-mandiri.jpg') }}" alt="Mandiri">
                                <img src="{{ asset('images/gallery/logo-starbucks.jpg') }}" alt="Starbucks">
                                <img src="{{ asset('images/gallery/logo-pizzahut.jpg') }}" alt="Pizza Hut">
                                <img src="{{ asset('images/gallery/logo-bca.jpg') }}" alt="BCA">
                                <img src="{{ asset('images/gallery/logo-bi.jpg') }}" alt="Bank Indonesia">
                                <img src="{{ asset('images/gallery/logo-toyota.jpg') }}" alt="Toyota">
                            </div>
                        </div>
                    </div>
                `;
            }

            else if(type === 'experience'){
                modalContent.innerHTML = `
                    <div class="content-section">
                        <div class="modal-title">Award & Recognition</div>

                        <img src="{{ asset('images/gallery/building-experience.jpg') }}" class="wide-image" alt="Building Management Experience">

                        <div class="experience-text">
                            Our experience in national wide building management are all Telkom's building from west to east of Indonesia
                        </div>

                        <img src="{{ asset('images/gallery/client-experience.jpg') }}" class="wide-image" alt="Client Experience">
                    </div>
                `;
            }

            else if(type === 'gallery'){
                modalContent.innerHTML = `
                    <div class="content-section">
                        <div class="modal-title">Gallery</div>
                        <div class="modal-subtitle">Dokumentasi layanan dan project Telkom Property</div>

                        <div class="photo-category-grid">
                            <div class="photo-panel">
                                <div class="photo-title">Property Development</div>
                                <div class="photo-grid">
                                    ${galleryImages('property-development', 15)}
                                </div>
                            </div>

                            <div class="photo-panel">
                                <div class="photo-title">Project Solution</div>
                                <div class="photo-grid">
                                    ${galleryImages('project-solution', 15)}
                                </div>
                            </div>

                            <div class="photo-panel">
                                <div class="photo-title">Property Management</div>
                                <div class="photo-grid">
                                    ${galleryImages('property-management', 9)}
                                </div>

                                <div class="photo-title">Facility Management</div>
                                <div class="photo-grid">
                                    ${galleryImages('facility-management', 6)}
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            document.getElementById('modalOverlay').classList.add('active');
        }

        function galleryImages(folder, total){
            let html = '';

            for(let i = 1; i <= total; i++){
                const src = `{{ asset('images/gallery') }}/${folder}-${i}.jpg`;

                html += `
                    <img src="${src}" alt="${folder} ${i}" onclick="openPreview('${src}')">
                `;
            }

            return html;
        }

        function closeModal(){
            document.getElementById('modalOverlay').classList.remove('active');
        }

        function openPreview(src){
            document.getElementById('previewImage').src = src;
            document.getElementById('previewOverlay').classList.add('active');
        }

        function closePreview(){
            document.getElementById('previewOverlay').classList.remove('active');
        }

        document.getElementById('modalOverlay').addEventListener('click', function(e){
            if(e.target === this){
                closeModal();
            }
        });

        document.getElementById('previewOverlay').addEventListener('click', function(e){
            if(e.target === this){
                closePreview();
            }
        });
    </script>

</body>
</html>
