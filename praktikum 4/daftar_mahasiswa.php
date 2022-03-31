<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.datatable').DataTable();
                $('#datatables').DataTable();
            } );
        </script>
    </head>
    <body>
        <table class="table datatable" id="datatables">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Tahun Angkatan</th>
                    <th scope="col">IPK</th>
                </tr>
            </thead>
            <?php
            require_once "class_mahasiswa.php";
            $mah1 = new Mahasiswa("01001", "Faiz Fikri", 2012, "TI", 3.80);
            $mah2 = new Mahasiswa("01002", "Alissa Khairunnisa", 2012, "TI", 3.96);
            $mah3 = new Mahasiswa("01003", "Rosalie Naurah", 2010, "SI", 3.76);
            $mah4 = new Mahasiswa("01012", "Defghi Muhammad", 2010, "SI", 4.00);
            echo "<tbody><tr>
                    <td>1</td>
                    <td>".$mah1->nim."</td>
                    <td>".$mah1->nama."</td>
                    <td>".$mah1->prodi."</td>
                    <td>".$mah1->thn_angkatan."</td>
                    <td>".$mah1->ipk."</td>
                        </tr>
                        <tr>
                    <td>2</td>
                    <td>".$mah2->nim."</td>
                    <td>".$mah2->nama."</td>
                    <td>".$mah2->prodi."</td>
                    <td>".$mah2->thn_angkatan."</td>
                    <td>".$mah2->ipk."</td>
                        </tr>
                        <tr>
                    <td>3</td>
                    <td>".$mah3->nim."</td>
                    <td>".$mah3->nama."</td>
                    <td>".$mah3->prodi."</td>
                    <td>".$mah3->thn_angkatan."</td>
                    <td>".$mah3->ipk."</td>
                        </tr>
                        <tr>
                    <td>4</td>
                    <td>".$mah4->nim."</td>
                    <td>".$mah4->nama."</td>
                    <td>".$mah4->prodi."</td>
                    <td>".$mah4->thn_angkatan."</td>
                    <td>".$mah4->ipk."</td>
                        </tr>
                    </tbody>"
            ?>
        </table>
    </body>
</html>
