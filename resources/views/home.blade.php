<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Telkom Land & Aset Portal</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body,html{
    height:100%;
}

.navbar{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    display:flex;
    align-items:center;
    justify-content:flex-start;
    padding:12px 60px;
    background: rgba(255, 255, 255, 0.07);
    backdrop-filter: blur(10px);
    border-bottom:1px solid rgba(255,255,255,0.15);
    z-index:100;
}

.nav-left{
    display:flex;
    align-items:center;
    gap:12px;
}

.nav-logo{
    height:45px;
}

.logo-text{
    font-size:18px;
    font-weight:500;
    color:white;
}

/* ===== HERO ===== */
.hero{
    height:100vh;
    background:url("{{ asset('images/gambar1.jpeg') }}") center center / cover no-repeat;
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}

.hero::before{
    content:'';
    position:absolute;
    inset:0;
    background: linear-gradient(
        135deg,
        rgba(33,31,31,0.85) 0%,
        rgba(0,0,0,0.65) 50%,
        rgba(144,5,17,0.543) 100%
    );
}

.hero-content{
    position:relative;
    max-width:1100px;
    padding:0 20px;
}

@keyframes fadeUp{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* JUDUL */
.hero h1{
    font-size:64px;
    font-weight:800;
    line-height:1.2;
    white-space:nowrap;
    opacity:0;
    animation: fadeUp 1.5s ease forwards;
}

.hero h1 span{
    color:#E30613;
}

.hero p{
    margin-top:25px;
    font-size:18px;
    font-weight:300;
    opacity:0;
    animation: fadeUp 1.5s ease forwards;
    animation-delay:0.6s;
}

/* WRAPPER BUTTON */
.hero-buttons{
    margin-top:45px;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
    flex-wrap:wrap;
    opacity:0;
    animation: fadeUp 1.5s ease forwards;
    animation-delay:1.2s;
}

/* BUTTON */
.hero-btn{
    display:inline-block;
    padding:14px 35px;
    border-radius:50px;
    background:#E30613;
    color:white;
    text-decoration:none;
    font-weight:600;
    letter-spacing:1px;
    transition:0.3s;
    box-shadow:0 8px 25px rgba(253,223,225,0.4);
}

.hero-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 12px 35px rgba(227,6,19,0.6);
}

@media(max-width:1200px){
    .hero h1{
        font-size:52px;
        white-space:normal;
    }
}

@media(max-width:768px){
    .navbar{
        padding:10px 20px;
    }

    .nav-logo{
        height:38px;
    }

    .logo-text{
        font-size:16px;
    }

    .hero h1{
        font-size:34px;
    }

    .hero p{
        font-size:16px;
    }

    .hero-buttons{
        flex-direction:column;
        gap:15px;
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
</div>

<section class="hero">
    <div class="hero-content">

        <h1>Katalog Asset <span>& Pelayanan Jasa</span></h1>

        <p>
            Menyediakan katalog aset dan pelayanan jasa Telkom Property Jatim Timur bagian Timur.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('dashboard') }}" class="hero-btn">
                Katalog Asset
            </a>

            <a href="{{ route('katalog.aset') }}" class="hero-btn">
                Pelayanan Jasa
            </a>
        </div>

    </div>
</section>

</body>
</html>
