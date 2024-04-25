<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h6><?php echo validation_errors(); ?></h6>
<h6><?php echo $this->session->flashdata('error'); ?></h6>

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
        <h3>Penambahan Barang Baru</h3>
        <p>Silahkan isi data dibawah.</p>
        <form class="tengah" action="<?php echo site_url('welcome/create/'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="col-md-12">
                <input class="form-control" type="text" name="nama" id = "nama" placeholder="Nama Barang" required value=""> <br>
              </div>
              <div class="col-md-12">
                <select class="form-control" name="jenis" id="jenis">
                  <option value="">- Pilih Jenis Barang -</option>
                  <option value="Makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                  <option value="Obat">Obat</option>
                  <option value="Perlengkapan">Perlengkapan</option>
                  </select><br>
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="harga" id = "harga" placeholder="Harga Barang" required value=""> <br>

              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="stock" id = "stock" placeholder="Stock Barang" required value=""> <br>

              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="perusahaan" id = "perusahaan" placeholder="Perusahaan" required value=""> <br>

              </div><br>
              <div class="col-md-12">
              <input class="form-control" type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
            </div>
            <div class="form-group">
              <button class='btn btn-outline-danger' onclick="window.location.href='<?= site_url(''); ?>'"> Kembali</button>
              <button class="btn btn-primary" type="submit" name = "submit" id="submitButton" disabled >Submit</button>

              <script type="text/javascript">
                const inputFields = document.querySelectorAll('.form-control');
                const submitButton = document.getElementById('submitButton');

                // Add an event listener to each input field that checks if any of them are empty
                inputFields.forEach(inputField => {
                  inputField.addEventListener('input', () => {
                    // If any of the input fields are empty, disable the button
                    if (Array.from(inputFields).some(input => input.value === '')) {
                      submitButton.disabled = true;
                    } else {
                      // Otherwise, enable the button
                      submitButton.disabled = false;
                    }
                  });
                });
                
                </script>
                                
                

            </div>
            </div>
            
        </form>
        </div>