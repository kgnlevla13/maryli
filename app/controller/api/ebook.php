<?php

if ($data = form_control()) {
	$existingUser = $db->from('ebook_downloads')
	->where('name', $data['name'])
	->where('email', $data['email'])
	->first();
    if ($existingUser) {
        // Kullanıcı zaten kayıtlı, e-kitap bağlantısını yeniden gönder
        if (sendEbookEmail($data, $setting)) {
            $db->update('ebook_downloads')
                ->where('email', $data['email'])
                ->set(['email_sent' => 1]);
            $json["success"] = "E-book sent to your email.";
        } else {
            $json["error"] = "Email could not be sent.";
        }
    } else {
        // Yeni kullanıcı, veritabanına ekleyin
        $insertData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'download_date' => date('Y-m-d H:i:s'),
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'email_sent' => 1
        ];
        
        $query = $db->insert("ebook_downloads")
            ->set($insertData);
        
        if ($query) {
            // E-posta gönder
            sendEbookEmail($data, $setting);
            $json["success"] = "E-book sent to your email.";
        } else {
            $json["error"] = "Database error. Please try again!";
        }
    }
} else {
    $json["error"] = "Please fill in all fields.";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '../../classes/phpmailer/vendor/autoload.php';

function sendEbookEmail($data, $setting) {
    $mail = new PHPMailer(true);
    try {
        $mail->setLanguage('en');
        $mail->Host       = $setting['smtpserver'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $setting['smptusername'];
        $mail->Password   = $setting['smtppassword'];
        $mail->SMTPSecure = 'SSL';
        $mail->Port       = $setting['smtpport'];
        $mail->CharSet = 'UTF-8';
        $mail->setFrom($setting['smptusername'], 'E-Book | ' . $setting['site_name']);
        $mail->addAddress($data['email'], $data['name']);
        $mail->isHTML(true);
        $mail->Subject = 'Your Free Yoga E-Book | ' . $setting['site_name'];
        
        $downloadLink = site_url('public/download.php?email=' . urlencode($data['email']));
        
        $message = '<h2>Thank you for your interest in "Yoga Made Simple"</h2>';
        $message .= '<p>Dear ' . $data['name'] . ',</p>';
        $message .= '<p>Thank you for your interest in my e-book. You can download your free copy by clicking the link below:</p>';
        $message .= '<p><a href="' . $downloadLink . '" style="display:inline-block;padding:10px 15px;background:#df0e0e;color:#fff;text-decoration:none;border-radius:5px;">Download Your Free E-Book</a></p>';
        $message .= '<p>I hope you enjoy reading it and find it helpful in your yoga journey.</p>';
        $message .= '<p>Best regards,<br>Mary Li</p>';
        
        $mail->Body = $message;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
