<?php

namespace learn\src\Config;

class Mail
{
    public static int $TimeOut = 15;

    public static int $Port = 465;

    public static string $SMTPSecure = 'ssl';

    public static string $Host = 'smtp.qq.com';

    public static string $UserName = '';

    public static string $Password = '';
}
