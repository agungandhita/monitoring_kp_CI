# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## cara install composer dan php

`sebelum menggunakan pastikan sudah menginstall composer dan php terlebih dahulu

untuk mendownload composer dan php silahkan klik link berikut
[https://getcomposer.org/download/](https://getcomposer.org/download/)

untuk mendownload php silahkan klik link berikut
[https://www.php.net/downloads](https://www.php.net/downloads)

## Setup
setelah itu jalankan perintah git clone 
https://github.com/agungandhita/monitoring_kp_CI.git untuk menginstall aplikasi

setelah selesai clon maka jalankan perintah 
Copy `env` to `.env`

untuk menjalan aplikasi jalankan perintah

'php spark serve'

## Teknologi dan Server

Teknologi:
- Framework: CodeIgniter 4
- Database: MySQL
- Frontend: Bootstrap 5.2.3


## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library