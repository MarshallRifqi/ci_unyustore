<!-- Begin Page Content -->
<div class="container justify-content-center">

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="card mb-3  justify-content-center mt-3 mx-auto" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8 justify-content-x">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Jadi member sejak: <br><b><?= date('d F Y', $user['tanggal_input']); ?></b></small></p>
                </div>
                <div class="btn btn-info ml-3 my-3">
                    <a href="<?= base_url('user/ubahprofil'); ?>" class="text text-white"><i class="fas fa-user-edit"></i> Ubah Profil</a>
                </div>
            </div>
        </div>
    </div>

    <!-- table transaksi -->
    <div class="container-fluid">
            <!-- Tabel Transaksi -->
            <h1 class="h3 mt-5 mb-2 text-danger"></h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Riwayat Transaksi</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Player id</th>
                                    <th>Item</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Email</th>
                                </tr>
                            </thead>

                            <!-- Untuk Menampilkan Data Riwayat Ke Dalam Tabel -->
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($data as $row) {?>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $row->player_id;?></td>
                                            <td><?= $row->item_beli;?></td>
                                            <td><?= $row->tanggal_transaksi;?></td>
                                            <td><?= $row->email;?></td>
                                        </tr>
                                    <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->