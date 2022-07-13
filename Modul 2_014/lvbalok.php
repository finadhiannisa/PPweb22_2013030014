<?php
class balok {
        private $p;
        private $l;
        private $t;

        function luas_balok($p,$l) {
            $this -> p = $p;
            $this -> l = $l;
            echo "Luas = ".$p." x ".$l." = ".$this->p * $this->l." Cm<sup>2</sup>";
        }
        function volume_balok($p,$l,$t) {
            $this -> p = $p;
            $this -> l = $l;
            $this -> t = $t;
            echo "Volume = ".$p." x ".$l." x ".$t." = " .$this->p * $this->l * $this->t ." Cm<sup>3</sup>";
        }
        function form_luasbalok() {
            echo '<form method="GET">';
            echo "<h3> Menghitung Luas dan Volume Balok</h3>";
            echo "<h3> Luas Balok";
            echo 'Panjang<br> ';
            echo '<input type="text" name="p" placeholder="masukkan nilai "> cm<br>';
            echo '<br>Lebar<br> ';
            echo '<input type="text" name="l" placeholder="masukkan nilai ">  cm<br><br>';
            echo '<input type="submit" name="submit" value="Hitung" >';
            echo '</form>';
        }
        function Form_volumebalok() {
            echo '<form method="GET">';
            echo "<br><h3>Volume Balok</h3>";
            echo 'Panjang <br> ';
            echo '<input type="text" name="p" placeholder="masukkan nilai ">  cm<br>';
            echo '<br>Lebar <br> ';
            echo '<input type="text" name="l" placeholder="masukkan nilai ">  cm<br>';
            echo '<br>Tinggi : ';
            echo '<input type="text" name="t" placeholder="masukkan nilai ">  cm<br><br>';
            echo '<input type="submit" name="volume" value="Hitung" >';
            echo '</form>';
        }
    }

$Lbalok = new balok;
$Lbalok -> form_luasbalok();
    if (isset($_GET['submit'])){
        $p = $_GET['p'];
        $l = $_GET['l'];
        echo "Hasil hitung luas balok adalah sebagai berikut: <br>";
        echo "Panjang   = ".$p." Cm<br>";
        echo "Lebar     = ".$l." Cm<br>";
        echo  $Lbalok->luas_balok($p,$l);
    }
    
$Vbalok = new balok;
$Vbalok -> form_volumebalok();
    if (isset($_GET['volume'])){
        $p = $_GET['p'];
        $l = $_GET['l'];
        $t = $_GET['t'];
        echo "Hasil hitung volume balok adalah sebagai berikut: <br>";
        echo "Panjang = ".$p." Cm<br>";
        echo "Lebar   = ".$l." Cm<br>";
        echo "Tinggi  = ".$t." Cm<br>";
        echo  $Vbalok->volume_balok($p,$l,$t);
    }
?>