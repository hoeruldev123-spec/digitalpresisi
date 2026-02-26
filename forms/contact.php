<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST["name"]);
    $email   = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // 🛑 Validasi dasar
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        die("Error: Semua field harus diisi!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Format email tidak valid!");
    }

    // 🛑 Honeypot Field (Anti-bot)
    if (!empty($_POST["honeypot"])) {
        die("Error: Bot terdeteksi!");
    }

    // ✉ Konfigurasi email
    $to      = "hoerul.dev123@gmail.com"; // Ganti dengan email tujuan
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $body = "Nama: $name\nEmail: $email\nSubject: $subject\n\nPesan:\n$message";

    // 🛑 Batasi pengiriman (Rate Limiting)
    session_start();
    if (isset($_SESSION["last_submit"]) && (time() - $_SESSION["last_submit"] < 60)) {
        die("Error: Anda hanya bisa mengirim satu pesan per menit.");
    }
    $_SESSION["last_submit"] = time();

    // 📩 Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "OK";
    } else {
        die("Error: Gagal mengirim pesan!");
    }
} else {
    die("Error: Akses tidak sah!");
}
?>
