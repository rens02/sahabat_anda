<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/css/styleform.css'); ?>">
</head>
<body>

<div class="container">
    <div class="badan-bawah">
        <br>
        <h3>Info Barang</h3>
        <p>Silahkan isi data dibawah.</p>
        <div class="col-md-12">
            <span ><?php echo "Kode: " . $barang->kode; ?></span> <br>
        </div>
        <div class="col-md-12">
            <span><?php echo "Nama: " . $barang->nama; ?></span> <br>
        </div>
        <div class="col-md-12">
            <span ><?php echo "Harga: " . $barang->harga; ?></span> <br>
        </div>
        <div class="col-md-12">
            <span ><?php echo "Jenis: " . $barang->jenis; ?></span> <br>
        </div>
        <div class="col-md-12">
            <span ><?php echo "Perusahaan: " . $barang->perusahaan; ?></span> <br>
        </div>
        <div class="col-md-12">
            <span ><?php echo "Stock: " . $barang->stock; ?></span> <br>
            <span>Gambar</span>
            <div class="center col s12">
                <img class="responsive-img" id="image" style="max-height:30vh;" src="<?php echo site_url('asset/images/'.$barang->gambar); ?>">
            </div>
        </div>
        <div class="form-group">
            <a href="<?= site_url(''); ?>" class="btn btn-secondary">Kembali</a>

            <a href="<?= site_url('welcome/update/'.$barang->kode); ?>" class="btn btn-primary" id="update">Update</a>
            <a href="<?= site_url('welcome/delete/'.$barang->kode); ?>" class="btn btn-danger" id="deleteLink">Delete</a>
        </div>
    </div>
</div>
</body>
