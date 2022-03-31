<?php
class NilaiMahasiswa {
    var $matkul;
    var $nilai;
    var $nim;
    function __construct($matkul, $nilai, $nim) {
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    function grade() {
        if($this->nilai <= 35 && $this->nilai >= 0) {
            $this->grade = "E";
            return "E";
        }
        elseif($this->nilai <= 55  && $this->nilai >= 36) {
            $this->grade = "D";
            return "D";
        }
        elseif($this->nilai <= 69  && $this->nilai >= 56) {
            $this->grade = "C";
            return "C";
        }
        elseif($this->nilai <= 84  && $this->nilai >= 70) {
            $this->grade = "B";
            return "B";
        }
        elseif($this->nilai <= 100  && $this->nilai >= 85) {
            $this->grade = "A";
            return "A";
        }
    }
    function hasil() {
        if ($this->nilai < 56 && $this->nilai >= 0) {
            $this->hasil = "TIDAK LULUS";
            return "TIDAK LULUS";
        }
        elseif ($this->nilai >=56 && $this->nilai <100) {
            $this->hasil = "LULUS";
            return "LULUS";
        }
    }
}
?>
