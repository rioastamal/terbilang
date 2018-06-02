<?php
namespace RioAstamal\AngkaTerbilang\Test;

use PHPUnit\Framework\TestCase;
use RioAstamal\AngkaTerbilang\Terbilang;

class TerbilangTest extends TestCase
{
    protected $terbilang = null;

    public function setUp()
    {
        $this->terbilang = new Terbilang();
    }

    public function tearDown()
    {
        $this->terbilang = null;
    }

    public function testStaticInstance()
    {
        $terbilang = Terbilang::create();
        $this->assertTrue($terbilang instanceof \RioAstamal\AngkaTerbilang\Terbilang);
    }

    public function testTerbilangKurangDari12()
    {
        $terbilang = new Terbilang();
        $satuan = [
            '0' => 'nol',
            '1' => 'satu',
            '2' => 'dua',
            '3' => 'tiga',
            '4' => 'empat',
            '5' => 'lima',
            '6' => 'enam',
            '7' => 'tujuh',
            '8' => 'delapan',
            '9' => 'sembilan',
            '10' => 'sepuluh',
            '11' => 'sebelas'
        ];
        foreach ($satuan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangBelasan()
    {
        $belasan = [
            '12' => 'dua belas',
            '13' => 'tiga belas',
            '17' => 'tujuh belas',
            '19' => 'sembilan belas'
        ];
        foreach ($belasan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangPuluhan()
    {
        $puluhan = [
            '20' => 'dua puluh',
            '21' => 'dua puluh satu',
            '87' => 'delapan puluh tujuh',
            '99' => 'sembilan puluh sembilan'
        ];
        foreach ($puluhan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangRatusan()
    {
        $ratusan = [
            '100' => 'seratus',
            '105' => 'seratus lima',
            '111' => 'seratus sebelas',
            '119' => 'seratus sembilan belas',
            '187' => 'seratus delapan puluh tujuh',
            '199' => 'seratus sembilan puluh sembilan',
            '200' => 'dua ratus',
            '211' => 'dua ratus sebelas',
            '222' => 'dua ratus dua puluh dua',
            '999' => 'sembilan ratus sembilan puluh sembilan',
        ];
        foreach ($ratusan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangRibuan()
    {
        $ribuan = [
            '1000' => 'seribu',
            '1011' => 'seribu sebelas',
            '1111' => 'seribu seratus sebelas',
            '1119' => 'seribu seratus sembilan belas',
            '1187' => 'seribu seratus delapan puluh tujuh',
            '1199' => 'seribu seratus sembilan puluh sembilan',
            '2200' => 'dua ribu dua ratus',
            '2211' => 'dua ribu dua ratus sebelas',
            '4222' => 'empat ribu dua ratus dua puluh dua',
            '9999' => 'sembilan ribu sembilan ratus sembilan puluh sembilan',
            '10111' => 'sepuluh ribu seratus sebelas',
            '78521' => 'tujuh puluh delapan ribu lima ratus dua puluh satu',
            '99999' => 'sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '100012' => 'seratus ribu dua belas',
            '999999' => 'sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan'
        ];
        foreach ($ribuan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangJutaan()
    {
        $jutaan = [
            '1000000' => 'satu juta',
            '1000011' => 'satu juta sebelas',
            '3250000' => 'tiga juta dua ratus lima puluh ribu',
            '9999999' => 'sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '11000000' => 'sebelas juta',
            '12000050' => 'dua belas juta lima puluh',
            '99999999' => 'sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '100000000' => 'seratus juta',
            '100000001' => 'seratus juta satu',
            '787654321' => 'tujuh ratus delapan puluh tujuh juta enam ratus lima puluh empat ribu tiga ratus dua puluh satu',
            '999999999' => 'sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan'
        ];
        foreach ($jutaan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangMilyaran()
    {
        $milyaran = [
            '1000000000' => 'satu milyar',
            '1000000001' => 'satu milyar satu',
            '1000000010' => 'satu milyar sepuluh',
            '3000000211' => 'tiga milyar dua ratus sebelas',
            '9999999999' => 'sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '11000000000' => 'sebelas milyar',
            '35200000000' => 'tiga puluh lima milyar dua ratus juta',
            '99999999999' => 'sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '125000005000' => 'seratus dua puluh lima milyar lima ribu',
            '999999999999' => 'sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan'
        ];
        foreach ($milyaran as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangTriliunan()
    {
        $triliunan = [
            '1000000000000' => 'satu triliun',
            '1000000000111' => 'satu triliun seratus sebelas',
            '1000001111111' => 'satu triliun satu juta seratus sebelas ribu seratus sebelas',
            '9999999999999' => 'sembilan triliun sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '70000360000000' => 'tujuh puluh triliun tiga ratus enam puluh juta',
            '100000000000000' => 'seratus triliun',
            '562000000000321' => 'lima ratus enam puluh dua triliun tiga ratus dua puluh satu',
            '999999999999999' => 'sembilan ratus sembilan puluh sembilan triliun sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '1000000000000000' => 'seribu triliun',
            '3500000000000000' => 'tiga ribu lima ratus triliun',
            '11000000001000222' => 'sebelas ribu triliun satu juta dua ratus dua puluh dua',
            '100000000000000000' => 'seratus ribu triliun',
            '1000000000000000000' => 'satu juta triliun',
            '100000000000000000000' => 'seratus juta triliun',
            '1000000000000000000000' => 'satu milyar triliun',
        ];
        foreach ($triliunan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang((string)$angka));
        }
    }

    public function testTerbilangSeptiliun()
    {
        $septiliun = [
            '1,000,000,000,000,000,000,000,000' => 'satu septiliun',
            '1,000,000,000,000,000,000,000,211' => 'satu septiliun dua ratus sebelas',
            '1,000,000,000,000,000,000,000,000.0001' => 'satu septiliun koma nol nol nol satu',
            '100,000,000,000,000,000,005,000,000.0001' => 'seratus septiliun lima juta koma nol nol nol satu',
            '5000,000,000,000,000,000,000,000,000.0021' => 'lima ribu septiliun koma nol nol dua satu',
            '1,000,000,000,000,000,150,000,000,000,000' => 'satu juta septiliun seratus lima puluh triliun',
            '5,000,000,000,000,000,000,000,000,000,000,000' => 'lima milyar septiliun',
            '5,000,000,000,000,000,000,000,000,000,000,000,000' => 'lima triliun septiliun',
            '10,000,000,000,000,000,000,000,000,000,000,000,000' => 'sepuluh triliun septiliun',
            '99,000,000,000,000,000,000,000,000,000,000,000,000' => 'sembilan puluh sembilan triliun septiliun',
            '99,999,999,999,999,999,999,999,999,999,999,999,999' => 'sembilan puluh sembilan triliun sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan septiliun sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan triliun sembilan ratus sembilan puluh sembilan milyar sembilan ratus sembilan puluh sembilan juta sembilan ratus sembilan puluh sembilan ribu sembilan ratus sembilan puluh sembilan',
            '100,000,000,000,000,000,000,000,000,000,000,000,000' => 'seratus triliun septiliun',
            '1,000,000,000,000,000,000,000,000,000,000,000,000,001' => 'seribu triliun septiliun satu',
        ];
        foreach ($septiliun as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang($angka));
        }
    }

    public function testTerbilangDenganKoma()
    {
        $angkaKoma = [
            '11.568' => 'sebelas koma lima enam delapan',
            '3.141592' => 'tiga koma satu empat satu lima sembilan dua',
            '1000.051' => 'seribu koma nol lima satu',
            '70.350' => 'tujuh puluh koma tiga lima nol',
            '0.0003' => 'nol koma nol nol nol tiga',
            '100000000000000.874950' => 'seratus triliun koma delapan tujuh empat sembilan lima nol'
        ];
        foreach ($angkaKoma as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang($angka));
        }
    }

    /**
     * @expectedException RioAstamal\AngkaTerbilang\TerbilangException
     * @expectedExceptionMessage ERROR: Angka tidak dapat dikenali
     */
    public function testAngkaKomaGanda()
    {
        $angka = '123.22.22';
        $this->terbilang->terbilang($angka);
    }

    public function testPemisahRibuanDenganBeberapaPemisah()
    {
        $pemisahRibuan = [
            '1 100' => 'seribu seratus',
            '1 011 000' => 'satu juta sebelas ribu',
            '1,100' => 'seribu seratus',
            '1,011,000' => 'satu juta sebelas ribu',
            '2,000,000.56' => 'dua juta koma lima enam'
        ];
        foreach ($pemisahRibuan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang($angka));
        }
    }

    public function testPemisahDesimalBukanTitik()
    {
        $this->terbilang->pemisahDesimal = ',';
        $pemisahRibuan = [
            '0,005' => 'nol koma nol nol lima',
            '2500,75' => 'dua ribu lima ratus koma tujuh lima',
            '2.500,75' => 'dua ribu lima ratus koma tujuh lima',
            '1.000.750,999' => 'satu juta tujuh ratus lima puluh koma sembilan sembilan sembilan',
            '1 000 750,999' => 'satu juta tujuh ratus lima puluh koma sembilan sembilan sembilan',
        ];
        foreach ($pemisahRibuan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->terbilang($angka));
        }
    }

    public function testShortcutMethod()
    {
        $this->terbilang->pemisahDesimal = ',';
        $pemisahRibuan = [
            '0,005' => 'nol koma nol nol lima',
            '2500,75' => 'dua ribu lima ratus koma tujuh lima',
            '2.500,75' => 'dua ribu lima ratus koma tujuh lima',
            '1.000.750,999' => 'satu juta tujuh ratus lima puluh koma sembilan sembilan sembilan',
            '1 000 750,999' => 'satu juta tujuh ratus lima puluh koma sembilan sembilan sembilan',
        ];
        foreach ($pemisahRibuan as $angka => $bilangan) {
            $this->assertEquals($bilangan, $this->terbilang->t($angka));
        }
    }
}