<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Telkom Property</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

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

/* ===== NAVBAR ===== */
.navbar{
    position:absolute;
    top:0;
    width:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:25px 60px;
    z-index:10;
}

.logo{
    font-size:22px;
    font-weight:700;
    color:white;
}

.nav-links{
    display:flex;
    gap:40px;
}

.nav-links a{
    text-decoration:none;
    color:white;
    font-weight:500;
    font-size:14px;
    transition:0.3s;
}

.nav-links a:hover{
    color:#E30613;
}

/* ===== HERO SECTION ===== */
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
    background:rgba(0,0,0,0.6);
}

.hero-content{
    position:relative;
    max-width:900px;
}

.hero h1{
    font-size:64px;
    font-weight:700;
}

.hero h1 span{
    color:#E30613;
}

.hero p{
    margin-top:20px;
    font-size:18px;
    font-weight:300;
}

.hero-btn{
    margin-top:40px;
    display:inline-block;
    padding:14px 32px;
    border:2px solid white;
    border-radius:40px;
    color:white;
    text-decoration:none;
    font-weight:500;
    transition:0.3s;
}

.hero-btn:hover{
    background:#E30613;
    border-color:#E30613;
}

/* Scroll indicator */
.scroll-down{
    position:absolute;
    bottom:30px;
    left:50%;
    transform:translateX(-50%);
    font-size:14px;
    opacity:0.8;
}

@media(max-width:768px){
    .hero h1{
        font-size:40px;
    }
    .navbar{
        padding:20px;
    }
    .nav-links{
        gap:20px;
    }
}
</style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<div class="navbar">
    <div class="logo">PT Graha Saran Duta</div>
    <div class="nav-links">

    </div>
</div>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-content">
        <h1>Telkom <span>Property Sidoarjo</span></h1>
        <p>Mengoptimalkan dan mengembangkan aset properti Telkom Jatim Timur bagian Timur.</p>

        <a href="{{ route('dashboard') }}" class="hero-btn">
            Masuk Dashboard
        </a>
    </div>
</section>

</body>
</html>
