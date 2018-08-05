<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <section id='main-content'>
    <section class='wrapper'>
      <div class='row mt'>
        <div class='col-md-12'>
          <div class='content-panel'>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <h3>Tambah Barang</h3>
              </li>
            </ol>


            <form upload='uploadForm' action='aksi.php?act=input_buku' method='post' enctype='multipart/form-data' class='form-horizontal style-form'>

              <div class="form-group">
                <h5 class="col-md-12">Nama</h5>
                <div class="col-sm-12">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Barang" required="">
                </div>
              </div>
              <div class="form-group">
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM kategori");

                echo "<div class='form-group'>
                <h5 class='col-sm-4 control-label'>Pilih Kategori</h5>
                <div class='col-md-4'>
                <select class='selectpicker form-control' name='id_kategori' required='' style='width:100%'>
                <option value='' selected=''>Kategori Barang</option>";
                while ($row = mysqli_fetch_array($data)) { echo "<option value='$row[id]' selected=''>$row[nama]</option>";
              }
              echo "</select>
              </div>
              </div>";
              ?>
            </div>

            <ol class="breadcrumb">
            <div class='col-md-4 form-group' style="float: right;">
            <h5 class='col-md-12'>Berat</h5>
            <div class='col-sm-12'>
              <input class='form-control' required="" id='berat' name="berat"  placeholder="Berat Barang">
              <small>Berat barang di perlukan untuk estimasi ongkos kirim. Coba gunakan perhitungan volumetrik.</small>
            </div>
          </div>

          <div class='col-md-4 form-group' style="float: right;">
            <h5 class='col-md-12'>Ukuran</h5>
            <div class='col-sm-12'>
              <input class='form-control' required="" id='ukuran' name="ukuran"  placeholder="Ukuran barang">
              <small>Ukuran barang adalah sangat penting. Coba input ukuran dengan sesuai.</small>
            </div>
          </div>

          <div class='col-md-4 form-group' style="float: right;">
            <h5 class='col-md-12'>Harga</h5>
            <div class='col-sm-12'>
              <input class='form-control' required="" id='harga' name="harga"  placeholder="Harga Barang">
              <small>Harga barang harus kelipatan 100</small>
            </div>
          </div>
        </ol>

        <div class='form-group'>
            <h5 class='col-md-12'>Deskripsi</h5>
            <div class='col-sm-12'>
              <textarea class='form-control' required="" id='deskripsi' style="width: 100%; height: 200px;" rows="80" cols="40" name="deskripsi"  placeholder="Deskripsi Barang"></textarea>
            </div>
          </div>

          <div class="form-group">
            <h5 class="col-md-12">Upload Image File:</h5>
            <div class="col-md-12">
              <input name='image' type='file' class='inputFile' required="" /><br><h6 style="color: #CF000F"><font size="3"></font> Max. 200 KB </h6>
            </div>
          </div>


          <div class='form-group'>
            <div class='col-sm-12'>
              <button type="submit" name="submit" value="submit" class="btn btn-success"><i class="fa fa-check">Tambahkan</i></button>
              <a href="home.php?page=read_buku"><button type="button" class="btn btn-success"><i class="fa fa-close"> Cancel</i></button></a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</section>
</body>
</html>