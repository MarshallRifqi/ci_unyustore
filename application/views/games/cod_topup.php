
    <div class="container-sm mt-3 w-75">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="row ">
                    <img src="https://cdn1.codashop.com/S/content/common/images/mno/codmobile2_640x241.jpg" class="" alt="">
                    <!-- <h4 class="text-uppercase">valorant</h4> -->
                </div>
            </div>
            <form class="user" method="post" action="<?= base_url('order/bayar'); ?>">
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card p- justify-content-center">
                                <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3 size-judul">Masukkan Player ID anda</label></h4>
                                <input type="text" class="form-control w-25" name="player_id" id="exampleFormControlInput1" placeholder="PLayer ID">
                                <p class="fw-light text-dark font-sz"><em>Untuk menemukan PlayerID Anda, klik ikon 'settings' yang terletak di sebelah kanan layar dan klik tab 'LEGAL AND PRIVCY', Anda dapat menemukan PlayerID Anda di sini.</em></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card pb-2 justify-content-center">
                            <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3 size-judul">Pilih jumlah Top Up</label></h4>
                            <input type="radio" name="item_beli" class="btn-check" id="1-CP" autocomplete="off" value="100 CP">
                            <label class="btn btn-danger btn-block"  for="1-CP">100 CP <br> (Rp 50.000)</label>
                            <input type="radio" name="item_beli" class="btn-check" id="2-CP" autocomplete="off" value="200 CP">
                            <label class="btn btn-danger btn-block"  for="2-CP">200 CP <br> (Rp 75.000)</label>
                            <input type="radio" name="item_beli" class="btn-check" id="3-CP" autocomplete="off" value="300 CP">
                            <label class="btn btn-danger btn-block" for="3-CP">300 CP <br> (Rp 90.000)</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
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
                            <input type="email" class="form-control w-50 me-1" name="email" id="exampleFormControlInput1" placeholder="E-Mail">
                            <button type="submit" class="btn btn-danger mb-3" data-toggle="modal" data-target="#exampleModal">Lanjutkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal" tabindex="-1">
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