<div class="content-wrapper">
<div class="contrainer-fluid">
    <?= $this->session->flashdata('message'); ?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= site_url('Sparepart/tambah') ?>" class="btn btn-info mb-2">Tambah Sparepart</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Nama Sparepart</td>
                            <td>Stok</td>
                            <td>Harga</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($sparepart as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><img src="<?= base_url('assets/img/sparepart/') . $us['gambar'] ?>" alt="Gambar" class="img-thumbnail" style="width:100px"></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['stok'];  ?></td>
                                <td><?= $us['harga'];  "Rp " . number_format($us['harga'], 2, ',', '.'); ?></td>
                                <td>
                                    <a href="<?= base_url('Sparepart/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                    <a href="<?= base_url('Sparepart/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>