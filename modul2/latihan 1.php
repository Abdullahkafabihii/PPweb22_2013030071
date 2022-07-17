<?php
class balok {
        private $p;
        private $l;
        private $t;

        function luas_balok($p,$l) {
            $this -> p = $p;
            $this -> l = $l;
            echo "luas = ".$p." x ".$l." = ".$this->p * $this->l." Cm<sup>2</sup>";
        }
        function volume_balok($p,$l,$t) {
            $this -> p = $p;
            $this -> l = $l;
            $this -> t = $t;
            echo "volume = ".$p." x ".$l." x ".$t." = " .$this->p * $this->l * $this->t ." Cm<sup>2</sup>";
        }
        function form_luasbalok() {
            echo '<form method="GET">';
            echo "<h3> luas balok dan volume balok</h3>";
            echo "<h3> luas balok</h3>";
            echo 'panjang<br>';
            echo '<input type="text" name="p" placeholder="input nilai "> Cm<br>';
            echo '<br>lebar <br>';
            echo '<input type="text" name="l" placeholder="input nilai "> Cm<br><br>';
            echo '<input type="submit" name="submit" value="hitung" >';
            echo '</form>';
        }
        function form_volumebalok() {
            echo '<form method="GET">';
            echo "<br><h3>volume balok</h3>";
            echo 'panjang<br>';
            echo '<input type="text" name="p" placeholder="input nilai "> Cm<br>';
            echo '<br>lebar <br>';
            echo '<input type="text" name="l" placeholder="input nilai "> Cm<br>';
            echo '<br>tinggi <br>';
            echo '<input type="text" name="t" placeholder="input nilai "> Cm<br><br>';
            echo '<input type="submit" name="submit" value="hitung" >';
            echo '</form>';
        }
}

$lbalok = new balok;
$lbalok -> form_luasbalok();
    if (isset($_GET['submit'])){
        $p = $_GET['p'];
        $l = $_GET['l'];
        echo "hasil hitung volume balok adalah sebagai berikut:<br>";
        echo "panjang = ".$p." Cm<br>";
        echo "lebar = ".$l." Cm<br>";
        echo $lbalok->luas_balok($p,$l);
    }
$vbalok = new balok;
$vbalok -> form_volumebalok();
    if (isset($_GET['submit'])){
        $p = $_GET['p'];
        $l = $_GET['l'];
        $t = $_GET['t'];
        echo "hasil hitung volume balok adalah sebagai berikut:<br>";
        echo "panjang -= ".$p." Cm<br>";
        echo "lebar = ".$l." Cm<br>";
        echo "tinggi = ".$t." Cm<br>";
        echo $vbalok->volume_balok($p,$l,$t);
    }
?>    