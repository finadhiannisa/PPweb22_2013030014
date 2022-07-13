<?php
class konversi{
    public $nilai;

    function nilai($angka){
        $this -> nilai=$angka;
    }
    function rumus(){
        if($this->nilai <=100 and $this->nilai>=85){
            $grade = 'A';
        }
        elseif($this->nilai <85 and $this->nilai >=75 ) {
            $grade = 'B+';
        }
        elseif($this->nilai <75 and $this->nilai >=70 ) {
            $grade ='B';
        }
        elseif($this->nilai <70 and $this->nilai >=65 ) {
            $grade = 'B-';
        }
        elseif($this->nilai <65 and $this->nilai >=60 ) {
            $grade = 'C+';
        }
        elseif($this->nilai <60 and $this->nilai >=55 ) {
            $grade = 'C';
        }
        elseif($this->nilai <55 and $this->nilai >=40 ) {
            $grade = 'D';
        }
        elseif($this->nilai <40 and $this->nilai >=0 ) {
            $grade = 'E';
        }
        return $grade;
    }
    function form_konversi(){
        echo '<form method="GET">';
        echo "<h2>Konversi Nilai Mata Kuliah</h2>";
        echo '<input type="text" name="nilai" placeholder="Input nilai "><br><br> ';
        echo '<input type="submit" name="submit"> ';
        echo '</form>';
    }
}

$grade = new konversi;
$grade-> form_konversi();

if (isset($_GET['submit'])){
    echo 'Nilai : '.$_GET['nilai'];
    echo "<br>Nilai huruf : ";
    $angka=$grade ->nilai($_GET["nilai"]);
    echo $grade -> rumus();
}
?>