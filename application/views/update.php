<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=<?= base_url('asset/css/styleform.css'); ?>>
  </head>
<body>

<div class="container">
    <div class="badan-bawah">
      <br>
        <h3>Edit Barang </h3>
        <p>Silahkan isi data dibawah.</p>
        <h6><?php echo validation_errors(); ?></h6>
        <h6><?php echo $this->session->flashdata('error'); ?></h6>
        <form class="tengah" action="<?php echo site_url('welcome/update/'.$barang->kode); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="col-md-12">
                <input class="form-control" type="text" name="nama" id = "nama" placeholder="Nama Barang"  value="<?php echo $barang->nama; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="harga" id = "harga" placeholder="Harga Barang" value="<?php echo $barang->harga; ?>"> <br>
              </div>
              <div class="col-md-12">
                  <select class="form-control" name="jenis" id="jenis">
                  <option value="">- Pilih Jenis Barang -</option>
                  <option value="Makanan" <?php if ($barang->jenis == "Makanan") echo "selected" ?>>Makanan</option>
                  <option value="Minuman" <?php if ($barang->jenis == "Minuman") echo "selected" ?>>Minuman</option>
                  <option value="Obat" <?php if ($barang->jenis == "Obat") echo "selected" ?>>Obat</option>
                  <option value="Perlengkapan" <?php if ($barang->jenis == "Perlengkapan") echo "selected" ?>>Perlengkapan</option>
                  </select>
              </div><br>
              <div class="col-md-12">
                <input class="form-control" type="text" name="perusahaan" id = "perusahaan" placeholder="Perusahaan" value="<?php echo $barang->perusahaan; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="stock" id = "stock" placeholder="Stock Barang" value="<?php echo $barang->stock; ?>"> <br>
                <span>Gambar</span>
                <div class="center col s12">
                  <img class="responsive-img" id="image" style="max-height:30vh;" src="<?php echo site_url('asset/images/'.$barang->gambar); ?>">
                </div>
                <div class="file-field input-field col s12">
                  <div class="btn light-blue darken-4">
                    <input name="image" type="file" id="images" onchange="thumbnail();">
                  </div>
                </div>
              </div>
            <div class="form-group">
                <a href="<?= site_url('welcome/index/'.$barang->kode); ?>" class="btn btn-secondary">Kembali</a>

              <button class="btn btn-primary" type="submit" name = "submit" id="submitButton" >Submit</button>
              <a href="<?= site_url('welcome/delete/'.$barang->kode); ?>" class="btn btn-danger" id="deleteLink">Delete</a>


            </div>
            </div>
            
        </form>
        </div>
  </body>

<script type="text/javascript">

document.getElementById("deleteLink").addEventListener("click", function(event) {
    var confirmation = confirm('Apakah ingin dihapus data ini?');
    if (!confirmation) {
        event.preventDefault(); // Menghentikan eksekusi link jika pengguna memilih Cancel
    }
});

  function thumbnail () {
    var preview = document.querySelector('#image');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.onloadend = function () {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }

</script>
