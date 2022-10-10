<?php

namespace learn\src\tools;

use learn\src\Config\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    public function send(array $email, string $title, string $body): void
    {
        $mail = new PHPMailer(); //实例化

        $mail->SMTPDebug = 1;//debug

        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Timeout = Mail::$TimeOut;
        $mail->SMTPSecure = Mail::$SMTPSecure; // 允许 TLS 或者ssl协议
        $mail->Host = Mail::$Host; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = Mail::$UserName; // SMTP username
        $mail->Password = Mail::$Password; // SMTP password //授权密码不是登陆密码
        $mail->Port = Mail::$Port; // TCP port to connect to
        $mail->CharSet = 'utf-8';
        $mail->Encoding = "base64"; //编码方式
        $mail->setFrom(Mail::$UserName, 'lyz');  //发件人地址（也就是你的邮箱）

        foreach ($email as $value) {
            $mail->AddAddress($value);//添加收件人（地址，昵称）
        }
        //发送附件
        // if (!empty($data['attachment'])) {
        //     $mail->AddAttachment($data['attachment']);
        // }

        $mail->Subject = $title;
        $mail->Body = $body;
        // $mail->IsHTML(true); //支持html格式内容

        //发送
        if (!$mail->Send()) {
            echo("Mailer Error: " . $mail->ErrorInfo);
        } else {
            echo("发送成功,收件人:");
        }
    }
}
