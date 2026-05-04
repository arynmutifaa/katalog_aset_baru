<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Telkom Property</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg, #E30613, #99040d);
}

.login-container{
    background:white;
    padding:40px;
    width:360px;
    border-radius:18px;
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
    text-align:center;
}

.logo{
    font-size:22px;
    font-weight:600;
    color:#E30613;
    margin-bottom:10px;
}

.subtitle{
    font-size:14px;
    color:#666;
    margin-bottom:30px;
}

.form-group{
    margin-bottom:20px;
    text-align:left;
}

.form-group label{
    font-size:13px;
    font-weight:500;
}

.form-group input{
    width:100%;
    padding:12px;
    margin-top:6px;
    border-radius:10px;
    border:1px solid #ddd;
}

.login-btn{
    width:100%;
    padding:14px;
    background:#450c10;
    border:none;
    border-radius:12px;
    color:white;
    font-weight:600;
    cursor:pointer;
}

.login-btn:hover{
    background:#b80510;
}

.error{
    color:red;
    font-size:13px;
    margin-bottom:10px;
}

.divider{
    display:flex;
    align-items:center;
    margin:20px 0;
    gap:10px;
    color:#aaa;
    font-size:13px;
}

.divider::before,
.divider::after{
    content:'';
    flex:1;
    height:1px;
    background:#ddd;
}

.google-btn{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:12px;
    background:white;
    cursor:pointer;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    font-size:14px;
    font-weight:500;
    color:#444;
    text-decoration:none;
    transition:background 0.2s;
}

.google-btn:hover{
    background:#f5f5f5;
}

.google-btn img{
    width:20px;
    height:20px;
}
</style>
</head>

<body>

<div class="login-container">

    <div class="logo">Telkom Property</div>
    <div class="subtitle">Silakan login untuk mengakses</div>

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.process') }}">

        @csrf

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>

    </form>

    <div class="divider">atau</div>

    <a href="{{ route('auth.google') }}" class="google-btn">
        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google">
        Login dengan Google
    </a>

</div>

</body>
</html>
