<?php
class Pasien {
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $gender;
    public $email;

    function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email)
    {
    $this->kode = $kode;
    $this->nama = $nama;
    $this->tmp_lahir = $tmp_lahir;
    $this->tgl_lahir = $tgl_lahir;
    $this->gender = $gender;
    $this->email = $email;
    }
}
?>