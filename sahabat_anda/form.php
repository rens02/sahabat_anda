<?php
$conn = mysqli_connect("localhost", "root", "", "toko");
if(isset($_POST["submit"])){
    $kode = $_POST["kode"];
    $name = $_POST["name"];
    $jenis = $_POST["jenis"];
    $harga = $_POST["harga"];
    $stock = $_POST["stock"];
    $perusahaan = $_POST["produsen"];

  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'images/' . $newImageName);
      $query = "INSERT INTO sahabat_anda VALUES('$kode', '$name', '$jenis', '$harga',  $stock, '$perusahaan', '$newImageName')";

      mysqli_query($conn, $query);
      echo
      "
      <script>
      
        alert('Successfully Added');
        
        </script>
      ";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styleform.css">
  </head>
  <body>
    <a></a>
    <div class="container">
    <div class="badan-bawah">
      <br>
        <h3>Penambahan Barang Baru</h3>
        <p>Silahkan isi data dibawah.</p>
        <form class="tengah" action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="col-md-12">
                <input class="form-control" type="kode" name="kode" id = "kode" placeholder="Kode Barang" required value="">
                <a href="" onClick="kode_barang()">Syarat Kode Barang</a>
                 <br>
              </div>
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
              <button class='btn btn-outline-danger' onclick="window.location.href='index.php';"> Kembali</button>
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

                function kode_barang() {
                  alert("I am an alert box!");
                }
                
                </script>
                                
                

            </div>
            </div>
            
        </form>
        </div>

        
    </body>
</html> 