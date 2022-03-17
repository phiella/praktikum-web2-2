<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance:textfield;
}</style>
</head>
<body>
    <?php include_once 'atas.php'; ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h6>Sistem Penilaian</h6>
            </div>
            <div class="card-body">
                <h1>Form Nilai Siswa</h1>
                <form class="mt-3" method="POST" action="form_nilai.php">
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
                        <div class="col-8">
                        <input name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
                        <div class="col-8">
                        <select name="matkul" class="form-select">
                            <option value="ddp">Dasar Dasar Pemrograman</option>
                            <option value="dbs">Basis Data</option>
                            <option value="pw2">Pemrograman Web</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                        <input name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                        <input name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="tgs" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                        <div class="col-8">
                        <input name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="number" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row mb-3">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                <?php
                $proses = $_POST['submit'];
                $nama = $_POST['nama'];
                $mata_kuliah = $_POST['matkul'];
                $nilai_uts = $_POST['nilai_uts'];
                $nilai_uas = $_POST['nilai_uas'];
                $nilai_tugas = $_POST['nilai_tugas'];
                //var baru
                $total = ((int)$_POST['nilai_uts']*0.3)+((int)$_POST['nilai_uas']*0.35)+((int)$_POST['nilai_tugas']*0.35);
                //if & switch
                if ($nilai_uts>=0 && $nilai_uts<=35 || $nilai_uas>=0 && $nilai_uas<=35 || $nilai_tugas>=0 && $nilai_tugas<=35){
                    $grade = "E";
                    //echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : E';
                    //echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : E';
                    //echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : E';
                }
                elseif ($nilai_uts>=36 && $nilai_uts<=55 || $nilai_uas>=36 && $nilai_uas<=55 || $nilai_tugas>=36 && $nilai_tugas<=55){
                    $grade = "D";
                    //echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : D';
                    //echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : D';
                    //echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : D';
                }
                elseif ($nilai_uts>=56 && $nilai_uts<=69 || $nilai_uas>=56 && $nilai_uas<=69 || $nilai_tugas>=56 && $nilai_tugas<=69){
                    $grade = "C";
                    //echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : C';
                    //echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : C';
                    //echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : C';
                }
                elseif ($nilai_uts>=70 && $nilai_uts<=84 || $nilai_uas>=70 && $nilai_uas<=84 || $nilai_tugas>=70 && $nilai_tugas<=84){
                    $grade = "B";
                    /*echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : B';
                    echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : B';
                    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : B';*/
                }
                elseif ($nilai_uts>=85 && $nilai_uts<=100 || $nilai_uas>=85 && $nilai_uas<=100 || $nilai_tugas>=85 && $nilai_tugas<=100){
                    $grade = "A";
                    /*echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : A';
                    echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : A';
                    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : A';*/
                }
                elseif ($nilai_uts>=100 && $nilai_uts<=0 || $nilai_uas>=100 && $nilai_uas<=0 || $nilai_tugas>=100 && $nilai_tugas<=0){
                    $grade = "I";
                    /*echo '<br>Nilai UTS : '.$nilai_uts.' '.'Grade : I';
                    echo '<br>Nilai UAS : '.$nilai_uas.' '.'Grade : I';
                    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.'Grade : I';*/
                }
                if (isset($proses)){
                echo 'Proses : '.$proses;
                echo '<br>Nama Siswa : '.$nama;
                echo '<br>Mata Kuliah : '.$mata_kuliah;
                echo '<br>Nilai UTS : '.$nilai_uts.' '.$grade;
                echo '<br>Nilai UAS : '.$nilai_uas.' '.$grade;
                echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas.' '.$grade;
                if ($total>55){
                    echo '<br>Lulus';
                }
                else {
                    echo '<br>Tidak Lulus';
                }
                switch ($grade){
                    case "E":
                        echo ' Grade E (Sangat Kurang)';
                        break;
                    case "D":
                        echo ' Grade D (Kurang)';
                        break;
                    case "C":
                        echo ' Grade C (Cukup)';
                        break;
                    case "B":
                        echo ' Grade B (Memuaskan)';
                        break;
                    case "A":
                        echo ' Grade A (Sangat Memuaskan)';
                        break;
                    case "I":
                        echo ' Grade I (Tidak Ada)';
                        break;
                    default:
                        echo ' Apa Ya?';
                }
                }
                ?>
            </div>
            <?php include_once 'bawah.php'; ?>
        </div>
    </div>
</body>
</html>
