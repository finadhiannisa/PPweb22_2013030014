<?php
    class matematika{
        public $pi = 3.14;
        function tambah($a,$b) {
            $c = $a+$b;
            return $c;
        }
        function kuadrat($x) {
            return $x * $x;
        }
        function keliling_lingkaran($r) {
            $kel = 2 * $this->pi * $r;
            return $kel;
        }
        function luas_lingkaran($r) {
            $luas = $this->pi * $this->kuadrat($r);
            return $luas;
        }
    }

    $math = new matematika();

    $jari = 10;
    $keliling_lingkaran = $math->keliling_lingkaran($jari);
    $luas_lingkaran = $math->luas_lingkaran($jari);

    echo "Menghitung Keliling dan Luas Lingkaran<br>";
    echo "Jari-Jari : ".$jari."<br>";
    echo "Keliling = ".$keliling_lingkaran."<br>";
    echo "Luas = ".$luas_lingkaran;
?>