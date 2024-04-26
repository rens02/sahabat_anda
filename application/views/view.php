<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<head>
    <meta charset="utf-8">
    <title>Informasi Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/css/styleform.css'); ?>">
</head>
<body>

<div class="container">
    <div class="badan-bawah">
        <br>
        <h3>Informasi Barang </h3>  
    <form class="tengah" action="<?php echo site_url('welcome/update/'.$barang->kode); ?>" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="col-md-12">
                <input class="form-control" readonly="readonly" type="text" name="nama" id = "nama" placeholder="Nama Barang"  value="<?php echo $barang->nama; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" readonly="readonly" type="text" name="harga" id = "harga" placeholder="Harga Barang" value="<?php echo $barang->harga; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" readonly="readonly" type="text" name="jenis" id = "jenis" placeholder="Jenis Barang" value="<?php echo $barang->jenis; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" readonly="readonly" type="text" name="perusahaan" id = "perusahaan" placeholder="Perusahaan" value="<?php echo $barang->perusahaan; ?>"> <br>
              </div>
              <div class="col-md-12">
                <input class="form-control" readonly="readonly" type="text" name="stock" id = "stock" placeholder="Stock Barang" value="<?php echo $barang->stock; ?>">
                <div class="center col s12">
                  <img class="responsive-img" id="image" style="max-height:30vh;" src="<?php echo site_url('asset/images/'.$barang->gambar); ?>">
                </div>
              </div>
            <div class="form-group">
            <a href="<?= site_url(''); ?>" class="btn btn-secondary">Kembali</a>
            <a href="<?= site_url('welcome/update/'.$barang->kode); ?>" class="btn btn-primary" id="update">Update</a>
        </div>
    </div>
</div>
</body>
