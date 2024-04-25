<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h6><?= validation_errors(); ?></h6>
<h6><?= $this->session->flashdata('error'); ?></h6>

<div class="container">
    <div class="badan-bawah">
      <br>
        <h3>Penambahan Barang Baru</h3>
        <p>Silahkan isi data dibawah.</p>
        <form class="tengah" action="<?php echo site_url('welcome/create/'); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="col-md-12">
                <input class="form-control" type="text" name="name" id = "name" placeholder="Nama Barang" required value=""> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="jenis" id = "jenis" placeholder="Jenis Barang" required value=""> <br>

              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="harga" id = "harga" placeholder="Harga Barang" required value=""> <br>

              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="stock" id = "stock" placeholder="Stock Barang" required value=""> <br>

              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="produsen" id = "produsen" placeholder="Produsen" required value=""> <br>

              </div><br>
              <div class="col-md-12">
              <input class="form-control" type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
            </div>
            <div class="form-group">
              <button class='btn btn-outline-danger' onclick="window.location.href='<?= site_url('welcome/index/'); ?>'"> Kembali</button>
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