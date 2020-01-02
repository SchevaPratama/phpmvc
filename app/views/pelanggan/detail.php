<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['plg']['nama_pelanggan']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['plg']['kd_pelanggan']; ?></h6>
            <p class="card-text"><?= $data['plg']['alamat']; ?></p>
            <p class="card-text"><?= $data['plg']['telp']; ?></p>
            <a href="<?= BASEURL; ?>/pelanggan" class="card-link">Kembali</a>
        </div>
    </div>

</div>