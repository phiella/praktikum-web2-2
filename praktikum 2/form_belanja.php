<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Onlen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <style>
      input[type="number"]::-webkit-outer-spin-button,
      input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      input[type="number"] {
        -moz-appearance: textfield;
      }
    </style>
  </head>
  <body>
      <div class="container">
        <div class="row">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header">
                <h1>Belanja Online</h1>
              </div>
              <div class="card-body">
                <form method="post" action="form_belanja.php">
                    <div class="form-group row mb-3">
                      <label for="customer" class="col-4 col-form-label">Customer</label> 
                      <div class="col-8">
                        <input name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-4">Pilihan Produk</label> 
                      <div class="col-8">
                        <div class="custom-control custom-radio form-check-inline">
                          <input name="produk" type="radio" required="required" class="custom-control-input" value="TV"> 
                          <label for="produk" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio form-check-inline">
                          <input name="produk" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
                          <label for="produk" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio form-check-inline">
                          <input name="produk" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
                          <label for="produk" class="custom-control-label">Mesin Cuci</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label for="count" class="col-4 col-form-label">Jumlah</label> 
                      <div class="col-8">
                        <input name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                      </div>
                    </div> 
                    <div class="form-group row mb-3">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                      </div>
                    </div>
                  </form>
                    <?php
                    $harga = array("tv"=>"4200000","kk"=>"3100000","mc"=>"3800000");
                    $proses = $_POST['submit'];
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];
                    if (isset($_POST['submit'])){
                    echo '<br>Nama Customer : '.$customer;
                    echo '<br>Produk Pilihan : '.$produk;
                    echo '<br>Jumlah Beli : '.$jumlah;
                    if ($produk == "TV"){
                      echo '<br>Total Belanja : '.$harga['tv']*$jumlah;
                    }
                    elseif ($produk == "Kulkas"){
                      echo '<br>Total Belanja : '.$harga['kk']*$jumlah;
                    }
                    elseif ($produk == "Mesin Cuci"){
                      echo '<br>Total Belanja : '.$harga['mc']*$jumlah;
                    }}
                    ?>
              </div>
          </div>
        </div>
          <aside class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                <li class="list-group-item">TV : Rp. 4.200.000,-</li>
                <li class="list-group-item">Kulkas : Rp. 3.100.000,-</li>
                <li class="list-group-item">Mesin Cuci : Rp. 3.900.000,-</li>
                <li class="list-group-item active">Harga dapat berubah setiap saat</li>
              </ul>
          </aside>
      </div>
    </div>
  </body>
</html>
