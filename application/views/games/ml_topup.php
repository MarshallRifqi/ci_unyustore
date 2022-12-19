
    
    <div class="container-sm mt-3 w-75">
        <div class="row gy-4">
            <div class="col-12">
                <div class="row ">
                    <img src="https://cdn1.codashop.com/S/content/common/images/mno/mlbb_halloween640x241%20(1).jpg" class="" alt="">
                    <!-- <h4 class="text-uppercase">valorant</h4> -->
                </div>
            </div>
            <form class="user" method="post" action="<?= base_url('order/bayar'); ?>">
                <div class="col-12 mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card pb2 justify-content-center">
                                <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3">Masukkan User ID</label></h4>
                                <input type="text" class="form-control w-50" name="player_id" id="exampleFormControlInput1" placeholder="User ID">
                                <p class="fw-light text-dark font-sz"> <em>Untuk mengetahui User ID Anda, silakan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama Karakter Game Anda. Silakan masukkan User ID Anda untuk menyelesaikan transaksi. Contoh : 12345678(1234).</em></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                    <div class="row">
                        <h4 class="text-uppercase ft-weight">valorant</h4>
                        <p class="desc-game"><strong>Sedang cari cara top up AOV praktis dan cepat?</strong></p>
                        <p class="desc-game">Beli voucher VALORANT di <strong>UnyuStore</strong> jawabannya. </p>
                        <p class="desc-game">Cukup isi ID kamu, tentukan nominal yang diinginkan, dan bayar dengan 
                        metode pembayaran pilihanmu. </p>
                        <p class="desc-game">Akun Valorant kamu akan terisi voucher tanpa perlu registrasi atau login. 
                        <p class="desc-game">Tentang AOV: Arena of Valor adalah game mobile dengan genre MOBA 
                            (Multiplayer Online Battle Arena) yang dikembangkan oleh Tencent dan dirilis oleh Garena. 
                            Game ini dirilis di Indonesia untuk pengguna Android dan iOS pada 6 Juni 2017. Game tersebut juga telah 
                            dirilis di beberapa negara lainnya, seperti; Taiwan, Thailand, Vietnam, Korea Selatan, Turki dan Eropa dengan 
                            menggunakan judul alternatif seperti Strike of Kings dan Realm of Valor. Beli Voucher VALORANT di <strong>UnyuStore</strong>
                            sekarang juga!</p>
                    </div>
                </div> -->
                <div class="col-12 mb-4">
                    <div class="row">
                        <div class="rounded bg-white shadow-card pb-2 justify-content-center">
                            <h4><label for="exampleFormControlInput1" class="form-label text-danger mt-3">Pilih jumlah Top Up</label></h4>
                            <input type="radio" name="item_beli" class="btn-check" id="1-Diamonds" autocomplete="off" value="100 Diamonds">
                            <label class="btn btn-danger btn-block"  for="1-Diamonds">100 Diamonds <br> (Rp 50.000)</label>
                            <input type="radio" name="item_beli" class="btn-check" id="2-Diamonds" autocomplete="off" value="200 Diamonds>
                            <label class="btn btn-danger btn-block"  for="2-Diamonds">200 Diamonds <br> (Rp 75.000)</label>
                            <input type="radio" name="item_beli" class="btn-check" id="3-Diamonds" autocomplete="off" value="300 Diamonds">
                            <label class="btn btn-danger btn-block" for="3-Diamonds">300 Diamonds <br> (Rp 90.000)</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12">
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
                <div class="col-12 mb-4">
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
    <!-- end of form -->

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