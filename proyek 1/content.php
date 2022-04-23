<main id="main" class="main">

<div class="pagetitle">
  <h1>BMI calculator</h1>
  <nav class="float-end">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
      <li class="breadcrumb-item active">Proyek individu</li>
      <li class="breadcrumb-item active">BMI calculator</li>
    </ol>
  </nav>
  <div class="row my-4">
  </div>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">
            Daftar Pasien
          </h5>
          <form method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-lg-2 align-self-center">
                <label for="nama" class="form-label">Nama</label>
            </div>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="nama" id="nama" required>
                <div class="invalid-feedback">Mohon masukkan nama.</div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-2 align-self-center">
                <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
            </div>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" required>
                <div class="invalid-feedback">Mohon masukkan tempat lahir.</div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-2 align-self-center">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            </div>
            <div class="col-lg-4">
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                <div class="invalid-feedback">Mohon masukkan tanggal lahir.</div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-2 align-self-center">
                <label for="email" class="form-label">Email</label>
            </div>
            <div class="col-lg-8">
                <input type="email" class="form-control" name="email" id="email" required>
                <div class="invalid-feedback">Mohon masukkan alamat email.</div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2 align-self-center">
                <label for="gender" class="form-label">Gender</label>
            </div>
            <div class="col-lg-8">
                <select class="form-select" name="gender" id="gender" required>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
                <div class="invalid-feedback">Mohon pilih gender.</div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2 align-self-center">
                <label for="berat" class="form-label">Berat badan</label>
            </div>
            <div class="col-lg-8">
                <input type="number" class="form-control" name="berat" id="berat" required>
                <div class="invalid-feedback">Mohon masukkan berat badan.</div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2 align-self-center">
                <label for="tinggi" class="form-label">Tinggi badan</label>
            </div>
            <div class="col-lg-8">
                <input type="number" class="form-control" name="tinggi" id="tinggi" required>
                <div class="invalid-feedback">Mohon masukkan tinggi badan.</div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2 align-self-center">
                <label for="tgl_perikas" class="form-label">Tanggal Periksa</label>
            </div>
            <div class="col-lg-8">
                <input type="date" class="form-control" name="tgl_periksa" id="tgl_periksa" required>
                <div class="invalid-feedback">Mohon masukkan tanggal periksa.</div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-12 d-flex justify-content-center">
                <button class="btn btn-success" type="submit" name="submit">Simpan</button>
            </div>
          </form>
          <?php
            require_once 'classes/pasien.php';
            require_once 'classes/BMI.php';
            require_once 'classes/bmi_pasien.php';

            if(isset($_POST['submit'])){
              $nama = $_POST['nama'];
              $tmp_lahir = $_POST['tmp_lahir'];
              $tgl_lahir = $_POST['tgl_lahir'];
              $email = $_POST['email'];
              $tinggi = $_POST['tinggi'];
              $berat = $_POST['berat'];
              $tgl = date("d-m-Y");
              $aaaa = date_diff(date_create($tgl_lahir), date_create($tgl));
              $usia = $aaaa->format('%y');
              $gender = $_POST['gender'];
              $tgl_periksa = $_POST['tgl_periksa'];
              $nilaiBMI = $_post['berat']/(($_post['tinggi']/100)**2);
            }
            $pasien1 = new BMIpasien('P001', 'Ahmad', 'Bogor', '17 Oktober 2002', 'ahmad@gmail.com', 'L', 69.8, 169, '2022-01-10');
            $pasien2 = new BMIpasien('P002', 'Rina', 'Jakarta', '21 Agustus 1998', 'rina@gmail.com', 'P', 55.3, 165, '2022-01-10');
            $pasien3 = new BMIpasien('P003', 'Luffy', 'Bandung', '13 November 2003', 'luffy@gmail.com', 'L', 45.2, 171, '2022-01-11');
            $pasien4 = new BMIpasien('P004', $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $berat, $tinggi, $tgl_periksa);
            ?>
            <table class="table">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Tanggal Periksa</th>
                  <th>Nama</th>
                  <th>Gender</th>
                  <th>Berat</th>
                  <th>Tinggi</th>
                  <th>Nilai BMI</th>
                  <th>Status BMI</th>
                </tr>
              <tbody>
              <?php
                echo '<tr>
                <td>'.$pasien1->kode.'</td>
                <td>'.$pasien1->tgl_periksa.'</td>
                <td>'.$pasien1->nama.'</td>
                <td>'.$pasien1->gender.'</td>
                <td>'.$pasien1->berat.'</td>
                <td>'.$pasien1->tinggi.'</td>
                <td>'.$nilaiBMI.'</td>
                <td>'.$pasien1->statusBMI().'</td>
                </tr><tr>
                <td>'.$pasien2->kode.'</td>
                <td>'.$pasien2->tgl_periksa.'</td>
                <td>'.$pasien2->nama.'</td>
                <td>'.$pasien2->gender.'</td>
                <td>'.$pasien2->berat.'</td>
                <td>'.$pasien2->tinggi.'</td>
                <td>'.$nilaiBMI.'</td>
                <td>'.$pasien2->statusBMI().'</td>
                </tr><tr>
                <td>'.$pasien3->kode.'</td>
                <td>'.$pasien3->tgl_periksa.'</td>
                <td>'.$pasien3->nama.'</td>
                <td>'.$pasien3->gender.'</td>
                <td>'.$pasien3->berat.'</td>
                <td>'.$pasien3->tinggi.'</td>
                <td>'.$nilaiBMI.'</td>
                <td>'.$pasien3->statusBMI().'</td>
                </tr><tr>
                <td>'.$pasien4->kode.'</td>
                <td>'.$pasien4->tgl_periksa.'</td>
                <td>'.$pasien4->nama.'</td>
                <td>'.$pasien4->gender.'</td>
                <td>'.$pasien4->berat.'</td>
                <td>'.$pasien4->tinggi.'</td>
                <td>'.$nilaiBMI.'</td>
                <td>'.$pasien4->statusBMI().'</td>
                </tr>'
              ?>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
