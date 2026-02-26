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

/* Login Card */
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

/* Form */
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
    outline:none;
    transition:0.3s;
}

.form-group input:focus{
    border-color:#edc4c7;
}

/* Button */
.login-btn{
    width:100%;
    padding:14px;
    background:#450c10;
    border:none;
    border-radius:12px;
    color:white;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

.login-btn:hover{
    background:#b80510;
}

.back-link{
    margin-top:15px;
    font-size:13px;
}

.back-link a{
    text-decoration:none;
    color:#E30613;
}
</style>
</head>

<body>

<div class="login-container">
    <div class="logo">Telkom Property</div>
    <div class="subtitle">Silakan login untuk mengakses </div>

    <form onsubmit="return loginUser()">
        <div class="form-group">
            <label>Email</label>
            <input type="email" id="email" placeholder="Masukkan email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" id="password" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>
    </form>

    <div class="back-link">
        <a href="index.html">← Kembali ke Home</a>
    </div>
</div>

<script>
function loginUser(){

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Validasi sederhana (simulasi)
    if(email === "admin@telkom.co.id" && password === "123456"){
        window.location.href = "dashboard.html";
    } else {
        alert("Email atau password salah!");
    }

    return false;
}
</script>

</body>
</html>
