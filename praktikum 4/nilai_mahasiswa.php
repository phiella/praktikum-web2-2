<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inputan Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">
                    <h2>Form Nilai Ujian</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="nilai_mahasiswa.php">
                        <div class="form-group mb-3 row">
                            <label class="col-4 col-form-label" for="name">Nama</label> 
                            <div class="col-8">
                            <input id="name" name="name" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="nim" class="col-4 col-form-label">NIM</label> 
                            <div class="col-8">
                            <input id="nim" name="nim" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="matkul" class="col-4 col-form-label">Matkul</label> 
                            <div class="col-8">
                            <select id="matkul" name="matkul" class="form-select" required="required">
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="PPKN">PPKN</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group mb-3 row">
                            <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                            <div class="col-8">
                            <input id="nilai" name="nilai" type="number" class="form-control" min="0" max="100" required="required">
                            </div>
                        </div> 
                        <div class="form-group mb-3 row">
                            <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    require_once "class_nilaimahasiswa.php";
                    $nama = $_POST["name"];
                    $nim = $_POST["nim"];
                    $matkul = $_POST["matkul"];
                    $nilai = $_POST["nilai"];
                    
                    $mhs = new NilaiMahasiswa($matkul,$nilai,$nim);

                    echo '<br> Nama : '.$nama;
                    echo '<br> NIM : '.$mhs->nim;
                    echo '<br> MK : '.$mhs->matkul;
                    echo '<br> Nilai : '.$mhs->nilai;
                    echo '<br> Grade : '.$mhs->grade();
                    echo '<br> Status : '.$mhs->hasil();
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
