<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Pelanggan
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/pelanggan/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Pelanggan.." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Pelanggan</h3>
            <ul class="list_group">
                <?php foreach ($data['plg'] as $plg) : ?>
                    <li class="list-group-item">
                        <?= $plg["nama_pelanggan"]; ?>

                        <a href=" <?= BASEURL; ?>/pelanggan/hapus/<?= $plg['kd_pelanggan']; ?> " class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>

                        <a href=" <?= BASEURL; ?>/pelanggan/ubah/<?= $plg['kd_pelanggan']; ?> " class=" badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $plg['kd_pelanggan']; ?>">Edit</a>

                        <a href=" <?= BASEURL; ?>/pelanggan/detail/<?= $plg['kd_pelanggan']; ?> " class=" badge badge-primary float-right ml-1">Detail</a>

                    </li>
                <?php endforeach ?>
            </ul>

        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/pelanggan/tambah" method="post">
                    <div class="form-group">
                        <label for="kdpl">Kode Pelanggan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">P00</span>
                            </div>
                            <input type="text" class="form-control" id="kdpl" name="kd_pelanggan" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nmpl">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="nmpl" name="nama_pelanggan" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="alm">Alamat</label>
                        <input type="text" class="form-control" id="alm" name="alamat" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="telp">Nomer Telepon</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">08</span>
                            </div>
                            <input type="number" class="form-control" id="telp" name="telp" autocomplete="off">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>