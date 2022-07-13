<?php
class bola{
    private $r;
    public $pi = 3.14;

    function luas_bola($r) {
        $this -> r = $r;
        $kuadrat = $this-> r *$this -> r;
        $luas = 4 * $this->pi * $kuadrat;
        echo 'Luas = 4 x '.$this->pi.' x '.$this->r. '<sup>2</sup> = '. ($luas).' Cm <sup>2</sup><br>';
    }
    function volume_bola($r) {
        $this -> r = $r;
        $pangkat3 = $this -> r * $this -> r * $this -> r;
        $volume = 4/3 * $this ->pi * $pangkat3;
        echo 'Volume = 4/3 x '.$this->pi.' x '.$this->r.'<sup>3</sup> =' . ($volume).' Cm<sup>3</sup>';
    }
    function form_luasbola(){
        echo '<form method="GET">';
        echo "<h2>Menghitung Luas dan Volume Bola</h2>";
        echo 'Jari-Jari : <input type="text" name="r" placeholder="Input jari-jari"> ';
        echo '<br> <input type="submit" name="submit" value="Hitung">';
        echo '</form>';
    }
}

$bola = new bola;
$bola -> form_luasbola();

if (isset($_GET['r'])){
    $r = $_GET['r'];
    echo "Hasil hitung luas dan volume bola adalah sebagai berikut: <br>";
    echo "Jari-Jari  &nbsp;= ".$r." Cm<br>";
    echo $bola -> luas_bola($r);
    echo $bola -> volume_bola($r);
}
?>