<?php
class BMI extends Pasien {
    public $berat, $tinggi;
    function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $berat, $tinggi){
        parent::__construct($kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email);
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    function statusBMI(){
        if($nilaiBMI < 18.5) {
            $statusBMI = "kekurangan berat badan";
            return "kekurangan berat badan";
        }
        elseif($nilaiBMI >= 18.5 and nilaiBMI <= 24.9){
            $statusBMI = "Normal (ideal)";
            return "Normal (ideal)";
        }
        elseif($nilaiBMI >= 25.0 and nilaiBMI <= 29.9){
            $statusBMI = "kelebihan berat badan";
            return "kelebihan berat badan";
        }
        elseif($nilaiBMI >= 30.0){
            $statusBMI = "obesitas";
            return "obesitas";
        }
        else{
            $statusBMI = "tidak valid";
            return "tidak valid";
        }
    }
}