## Tentang

Terbilang merupakan sebuah pustaka sederhana untuk menterjemahkan angka kedalam bentuk bilangan dalam Bahasa Indonesia. Terbilang dapat menterjemahkan angka hingga satuan triliun. Terbilang menggunakan extension **bcmath** untuk memproses angka yang besar sehingga tetap dapat digunakan oleh sistem yang masih 32bit.

Berikut contoh singkat penggunaan Terbilang.

```php
<?php
use RioAstamal\AngkaTerbilang\Terbilang;

echo Terbilang::create()->terbilang(5678);
// lima ribu enam ratus tujuh puluh delapan
```

## Kebutuhan

- PHP >= 5.5
- bcmath extension

## Instalasi

Untuk instalasi Terbilang dapat digunakan composer atau melalui cara manual yaitu `require`. 

### Composer

Clone project terbilang dari Github.

```
$ git clone git@github.com:rioastamal/terbilang.git
```

Kemudian jalankan composer untuk menginstall ketergantungan paket lain.

```
$ composer install -vvv
```

### Instalasi Manual

Pustaka Terbilang hanya terdiri dari sebuah file jadi cukup menggunakan `require` pada file Terbilang.php dan Terbilang sudah siap digunakan.

```php
<?php

require '/path/ke/terbilang/src/terbilang.php';
```

### Instalasi bcmath

Extension bcmath secara default sudah terinstall dihampir semua sistem seperti pada MacOS X (via homebrew) dan Windows. Untuk mengeceknya jalankan perintah berikut pada terminal.

```
$ php -m|grep bcmath
bcmath
```

Jika bcmath muncul maka extension ini sudah terinstall di sistem. Jika belum terinstall gunakan perintah berikut untuk menginstall. 

Instalasi pada Ubuntu:

```
$ sudo apt-get install php-bcmath
```

## Contoh

Berikut beberapa contoh penggunaan pustaka Terbilang dan outputnya. Untuk contoh lebih banyak anda dapat melihat pada file tests/TerbilangTest.php.

```php
<?php
use RioAstamal\AngkaTerbilang\Terbilang;

$terbilang = new Terbilang();
$terbilang->terbilang(5); 
// lima

$terbilang->terbilang(15);
// lima belas

$terbilang->terbilang(99);
// sembilan puluh sembilan

$terbilang->terbilang(787654321);
// tujuh ratus delapan puluh tujuh juta enam ratus lima puluh empat ribu tiga ratus dua puluh satu

$terbilang->terbilang('11000000001000222');
// sebelas ribu triliun satu juta dua ratus dua puluh dua
```

Terbilang juga mendukung penggunakan pemisah ribuan.

```php
$terbilang->terbilang('3,900');
// tiga ribu sembilan ratus

$terbilang->terbilang('1,011,000');
// satu juta sebelas ribu
```

Penggunaan desimal (pemisah titik) pada angka.

```php
$terbilang->terbilang('0.005');
// nol koma nol nol lima

$terbilang->terbilang('1,000,000.025');
// satu juta koma nol dua lima
```

Penggunaan desimal (pemisah koma) pada angka. Ini adalah penulisan yang lazim digunakan di Indonesia.

```php
// Ubah pemisah desimal ke ','
$terbilang->pemisahDesimal = ',';

$terbilang->terbilang('0,005');
// nol koma nol nol lima

$terbilang->terbilang('1.000.000,025');
// satu juta koma nol dua lima
```

Shortcut `t()` untuk method `terbilang()`.

```php
$terbilang->t('1,200,000');
// satu juta dua ratus
```

## Penulis

Pustaka Terbilang ditulis oleh Rio Astamal <rio@rioastamal.net>

## Lisensi

Pustaka ini menggunakan lisensi MIT [http://opensource.org/licenses/MIT](http://opensource.org/licenses/MIT).