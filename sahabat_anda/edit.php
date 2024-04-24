<?php
$conn = mysqli_connect("localhost", "root", "", "sahabat_anda");
$id = $_GET['edit'];



if(isset($_POST["submit"])){
    $name_baru = $_POST["name"];
    $harga_baru = $_POST["harga"];
    $stock_baru = $_POST["stock"];
    $query_update = "UPDATE sahabat_anda SET nama='$name_baru',  harga='$harga_baru', stock='$stock_baru' WHERE kode = '$id'";


    mysqli_query($conn, $query_update);
      echo
      "
      <script>
      
        alert('Sukses di edit');
        
        </script>
      ";
        header('location:index.php');
    }

if(isset($_POST['delete'])){
    $query_hapus = "DELETE FROM sahabat_anda WHERE kode = $id";
    mysqli_query($conn, $query_hapus);

    header('location:index.php');
};
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

  <?php
  $select = mysqli_query($conn, "SELECT * FROM sahabat_anda WHERE kode = '$id'");
  while($row = mysqli_fetch_assoc($select)){
  $nama = $row['nama'];
  $harga = $row['harga'];
  $stock = $row['stock'];

  ?>

    <div class="container">
    <div class="badan-bawah">
      <br>
        <h3>Edit Barang </h3>
        <p>Silahkan isi data dibawah.</p>
        <form class="tengah" action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="col-md-12">
                <input class="form-control" type="text" name="name" id = "name" placeholder="Nama Barang" value="<?php echo $nama; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="harga" id = "harga" placeholder="Harga Barang" value="<?php echo $harga; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" type="text" name="stock" id = "stock" placeholder="Stock Barang" value="<?php echo $stock; ?>"> <br>


            <div class="form-group">
                <a href="index.php" class="btn btn-danger">Kembali</a>

              <button class="btn btn-primary" type="submit" name = "submit" id="submitButton" disabled >Submit</button>
                <button class="btn btn-primary" type="submit" name = "delete" id="deleteButton" >Delete</button>


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
        <?php }; ?>
        </div>

        
    </body>
</html>