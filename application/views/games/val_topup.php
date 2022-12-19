
    <div class="container-sm mt-3 w-75">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="row ">
                    <img src="https://cdn1.codashop.com/S/content/common/images/mno/VALORANT_Coda_640x241.jpg" class="" alt="">
                    <!-- <h4 class="text-uppercase">valorant</h4> -->
                </div>
            </div>
            <form class="user" method="post" action="<?= base_url('order/bayar'); ?>">
                <div class="col-lg-12  mb-4">
                    <div class="row  mb-4">
                        <div class="rounded bg-white shadow-card p- justify-content-center">
                                <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3">Masukkan Riot ID anda</label></h4>
                                <input type="text" class="form-control w-25" id="exampleFormControlInput1" name="player_id" placeholder="Riot ID">

                                <p class="fw-light text-dark font-sz"> <em>Untuk menemukan Riot ID Anda, buka halaman profil akun dan salin Riot ID+Tag menggunakan tombol yang tersedia disamping Riot ID. (Contoh: Westbourne#SEA)</em></p>
                        </div>
                    </div>
                </div>
                <?= form_error('player_id');?>
                <div class="col-lg-12  mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card pb-2 justify-content-center">
                                <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3">Pilih jumlah Top Up</label></h4>
                                <input type="radio" name="item_beli" class="btn-check" id="1-pts" autocomplete="off" value="100 Points">
                                <label class="btn btn-danger btn-block"  for="1-pts">100 Points <br> (Rp 50.000)</label>
                                <input type="radio" name="item_beli" class="btn-check" id="2-pts" autocomplete="off" value="200 Points">
                                <label class="btn btn-danger btn-block"  for="2-pts">200 Points <br> (Rp 75.000)</label>
                                <input type="radio" name="item_beli" class="btn-check" id="3-pts" autocomplete="off" value="300 Points">
                                <label class="btn btn-danger btn-block" for="3-pts">300 Points <br> (Rp 90.000)</label>
                        </div>
                    </div>
                </div>
                <?= form_error('item_beli');?>
                <!-- <div class="col-lg-12  mb-4">
                    <div class="row ">
                        <div class="rounded bg-white shadow-card pb-2 justify-content-center">
                                <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3">Pilih Tipe Pembayaran</label></h4>
                                <button type="button" class="btn btn-outline-danger m-1">BCA</button>
                                <button type="button" class="btn btn-outline-danger m-1">GoPay</button>
                                <button type="button" class="btn btn-outline-danger m-1">Dana</button>
                                <button type="button" class="btn btn-outline-danger m-1">Shoopepay</button>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card p- justify-content-center">
                            <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3">Masukkan Email Anda</label></h4>
                            <input type="email" class="form-control w-50 me-1" id="exampleFormControlInput1" name="email" placeholder="E-Mail">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <button type="submit" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Lanjutkan</button>
                        </div>
                    </div>
                </div>
                <?= form_error('email');?>
            </form>
        </div>
    </div>
    <!-- end of form -->

