<?php
class BMIpasien extends BMI {
    public $tgl_periksa;
    function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $berat, $tinggi, $tgl_periksa){
        parent::__construct($kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $berat, $tinggi);
        $this->tgl_periksa = $tgl_periksa;
    }
}
?>