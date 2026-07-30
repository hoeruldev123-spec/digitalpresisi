<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 - Halaman Tidak Ditemukan | Digital Presisi</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Inter,Arial,sans-serif;
}

body{
    background:#f8fafc;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    color:#1f2937;
    padding:20px;
}

.container{
    max-width:720px;
    text-align:center;
}

.emoji{
    font-size:70px;
    margin-bottom:20px;
}

.code{
    font-size:130px;
    font-weight:800;
    color:#0EA5E9;
    line-height:1;
}

h1{
    margin:20px 0;
    font-size:40px;
}

p{
    color:#64748b;
    font-size:18px;
    line-height:1.8;
    margin-top:15px;
}

.btn{
    display:inline-block;
    margin-top:40px;
    padding:15px 32px;
    background:#0EA5E9;
    color:#fff;
    text-decoration:none;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
}

.btn:hover{
    background:#0284c7;
    transform:translateY(-2px);
}

small{
    display:block;
    margin-top:30px;
    color:#94a3b8;
}
</style>

</head>

<body>

<div class="container">

<div class="code">404</div>

<h1>Duh, halamannya gak ada.</h1>

<p>
Maaf banget, halaman yang kamu cari nyasar entah ke mana.
Sumpah, ini mah nggak sengaja kok, alias khilaf.
</p>

<p>
Tenang, <strong>Digital Presisi</strong> masih baik-baik aja.
Yuk balik ke beranda atau lanjut jelajahi layanan dan solusi digital kami.
</p>

<a href="/" class="btn">
← Kembali ke Beranda
</a>

<small>Error 404 • Page Not Found</small>

</div>

</body>
</html>
