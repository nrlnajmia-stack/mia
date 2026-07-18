<?php
session_start();
require_once __DIR__ . '/lib/validate.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

$name = sanitize_text($_POST['name'] ?? '');
$email = sanitize_email($_POST['email'] ?? '');
$message = sanitize_text($_POST['message'] ?? '');
$honeypot = trim($_POST['website'] ?? '');

$errors = [];
if ($honeypot !== '') {
    header('Location: index.php#contact');
    exit;
}

if ($name === '') {
    $errors['name'] = 'Nama harus diisi.';
}
if ($email === '' || !validate_email($email)) {
    $errors['email'] = 'Format email tidak valid.';
}
if ($message === '') {
    $errors['message'] = 'Pesan tidak boleh kosong.';
}

$_SESSION['form_old'] = ['name' => $name, 'email' => $email, 'message' => $message];

if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    header('Location: index.php#contact');
    exit;
}

$to = 'pemilik@domain.com';
$subject = 'Pesan baru dari formulir kontak portofolio';
$emailBody = "Nama: $name\nEmail: $email\n\nPesan:\n$message\n";
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

$sent = mail($to, $subject, $emailBody, $headers);

if ($sent) {
    $_SESSION['form_flash'] = [
        'type' => 'success',
        'message' => 'Pesan berhasil dikirim. Terima kasih!'
    ];
} else {
    $_SESSION['form_flash'] = [
        'type' => 'error',
        'message' => 'Pesan gagal dikirim. Silakan coba lagi nanti.'
    ];
}

header('Location: index.php#contact');
exit;
