
    
    <div class="container-sm mt-3 w-75">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="row ">
                    <img src="https://cdn1.codashop.com/S/content/common/images/mno/Genshin%20Banner.png" class="" alt="">
                    <!-- <h4 class="text-uppercase">valorant</h4> -->
                </div>
            </div>
            <form class="user" method="post" action="<?= base_url('order/bayar'); ?>">
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card p- justify-content-center">
                                <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3 size-judul">Masukkan UID dan Server</label></h4>
                                    <div class="d-flex flex-row">
                                        <input type="text" class="form-control w-25 g-col-3 me-1" id="playerid" name="playerid" placeholder="UID" <?= set_value('playerid'); ?>>
                                        <input type="text" class="form-control w-25 g-col-3 me-1" id="playerid" name="server" placeholder="server" <?= set_value('playerid'); ?>>
                                    </div>
                                <p class="fw-light text-dark font-sz"> <em>Untuk menemukan UID Anda, masuk pakai akun Anda. Klik pada tombol profile di pojok kiri atas layar. Temukan UID dibawah avatar. Masukan UID Anda di sini. Selain itu, Anda juga dapat temukan UID Anda di pojok bawah kanan layar.</em></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card pb-2 justify-content-center">
                                <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3 size-judul">Pilih jumlah Top Up</label></h4>
                                <input type="radio" name="items" class="btn-check" id="1-gen" autocomplete="off" value="100 Genesis">
                                <label class="btn btn-danger btn-block" name="items" for="1-gen">100 Genesis Crystals <br> (Rp 50.000)</label>
                                <input type="radio" name="items" class="btn-check" id="2-gen" autocomplete="off" value="200 Genesis">
                                <label class="btn btn-danger btn-block" name="items" for="2-gen">200 Genesis Crystals <br> (Rp 75.000)</label>
                                <input type="radio" name="items" class="btn-check" id="3-gen" autocomplete="off" value="300 Genesis">
                                <label class="btn btn-danger btn-block" name="items" for="3-gen">300 Genesis Crystals <br> (Rp 90.000)</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12 mb-4">
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
                <div class="col-lg-12 mb-5">
                    <div class="row">
                        <div class="rounded bg-white shadow-card p- justify-content-center">
                            <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3">Masukkan Email Anda</label></h4>
                            <input type="text" class="form-control w-50 me-1" id="email" name="email" placeholder="E-Mail" <?= set_value('enama'); ?>">
                            <button type="submit" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end of form -->

    <div class="modal" tabindex="-1" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>