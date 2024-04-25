<?php
echo $this->session->flashdata('error');

?>
    
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?= base_url('asset/css/stylebaru.css'); ?>">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('asset/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('asset/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css'); ?>">

        <title>DATA INVENTORY TOKO SAHABAT ANDA</title>
        <style>
           
        </style>
    </head>


    <body style="background-color: #152733;">
        <br>
        <div class="container">


            <div class="card">

                <div class="card-body">
                    <h1 style="text-align: center; color: green; ">TOKO SAHABAT ANDA</h1>
                    <button style="float: right;" class='btn btn-outline-success' onclick="window.location.href='<?= site_url('welcome/create/') ?>';">Tambah Inventory</button>

                    <h1 class="display-4">Inventory</h1>
                    <br>
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Harga Barang</th>
                                <th>Stock Barang</th>
                                <th>Produsen</th>
                                <th>Foto Barang</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            foreach ($hasil as $row) {
                                $harga = $row['harga'];
                                $kode = $row['kode'];
                                $rupiah = "Rp " . number_format($harga, 2, ',', '.');
                                $lupa = $row['gambar'];

                                echo "<tr>
                                        <td>" . $kode . "</td>
                                        <td>" . $row['nama'] . "</td>
                                        <td>" . $row['jenis'] . "</td>
                                        <td>" . $rupiah . "</td>
                                        <td>" . $row['stock'] . "</td>
                                        <td>" . $row['perusahaan'] . "</td>
                                        <td>
                                            <img height='50' width='50' src='" . base_url('asset/images/' . $lupa) . "'>
                                        </td>
                                        <td>
                                            <button class='btn-success' onclick=\"location.href='" . site_url("welcome/update/" . $row['kode']) . "';\">Edit</button>
                                        </td>
                                    </tr>";
                            }
                            ?>


                        </tbody>
                    </table>

                </div>

            </div>
         </div>
    </div>
        <br>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/bootstrap.bundle.min.js"></script>

        <!-- Datatables -->
        <script src="asset/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="asset/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

        <script src="asset/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
        <script src="asset/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
        <script src="asset/DataTables/JSZip-2.5.0/jszip.min.js"></script>
        <script src="asset/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
        <script src="asset/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
        <script src="asset/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
        <script src="asset/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
        <script src="asset/DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

        <script>
            $(document).ready(function() {
                var table = $('#table').DataTable({
                    buttons: ['copy', 'csv', 'print', 'excel', 'pdf', 'colvis'],

                    lengthMenu: [
                        [5, 10, 25, 50, 100, -1],
                        [5, 10, 25, 50, 100, "All"]
                    ]
                });

                table.buttons().container()
                    .appendTo('#table_wrapper .col-md-5:eq(0)');
            });
        </script>
    </body>

    </html>