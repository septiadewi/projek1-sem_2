<?php
class BMI{
    public $bb;
    public $tb;

    function __construct($bb,$tb){
        $this->bb = $bb;
        $this->tb = $tb;
    }

    public function hasil_BMI(){
        $hasil_BMI = $this->bb / pow($this->tb, 2);
        return $hasil_BMI;
    }
    public function statusBMI(){
        if ($hasil_BMI > 30.0  ) {
            return 'ANDA OBESITAS';
        }elseif ($hasil_BMI > 25.0){
            return 'BERAT BADAN ANDA BERLEBIH';
        }elseif ($hasil_BMI > 24.9){
            return 'BERAT BADAN ANDA IDEAL';
        }elseif ($hasil_BMI > 18.0){
            return 'ANDA KURUS';
        }
    }

}


?> 
 10  
project1 sem2 new/class_BMIpasien.php
@@ -0,0 +1,10 @@
<?php

class BmiPasien {
    //properti
    public $id;
    public $bmi;
    public $tgl_periksa;
    public $name;