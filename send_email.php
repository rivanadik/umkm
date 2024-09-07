<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Memuat autoloader Composer

$mail = new PHPMailer(true); // Buat instance PHPMailer dan aktifkan mode debug

try {
    // Konfigurasi server
    $mail->isSMTP();                                            // Set mailer untuk menggunakan SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Server SMTP Gmail
    $mail->SMTPAuth   = true;                                   // Aktifkan otentikasi SMTP
    $mail->Username   = 'erikorohman3@gmail.com';                 // Alamat email Gmail Anda
    $mail->Password   = 'vlpu sruy eiku iuuf';                        // Password Gmail Anda
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           // Aktifkan enkripsi TLS
    $mail->Port       = 587;                                    // Port TCP untuk koneksi SMTP

    // Pengaturan penerima
    $mail->setFrom('your_email@gmail.com', 'Mailer');           // Alamat email pengirim
    $mail->addAddress('erikorohman3@gmail.com');                 // Alamat email penerima

    // Konten email
    $mail->isHTML(true);                                        // Set email format ke HTML
    $mail->Subject = 'Pesan dari Formulir Kontak';
    $mail->Body    = 'Nama Depan: ' . htmlspecialchars($_POST['first_name']) . '<br>' .
                     'Nama Belakang: ' . htmlspecialchars($_POST['last_name']) . '<br>' .
                     'Email: ' . htmlspecialchars($_POST['email']) . '<br>' .
                     'Pesan: ' . nl2br(htmlspecialchars($_POST['message']));

    $mail->send();
    header('Location: contact.php?status=success'); // Arahkan kembali ke contact.php dengan status sukses
    exit(); // Pastikan untuk menghentikan eksekusi skrip setelah pengalihan
} catch (Exception $e) {
     // Jika ada kesalahan, arahkan kembali ke contact.php dengan status error
     header('Location: contact.php?status=error');
     exit(); // Pastikan untuk menghentikan eksekusi skrip setelah pengalihan
}
?>
