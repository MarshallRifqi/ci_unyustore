    <!-- navbar -->
        <!-- bg-danger -->
        <nav class="navbar navbar-expand-md navbar-dark bg-danger">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('landingpage/landingpage')?>">
                    <img src="/img/UNYUSTOREC.png" alt="" width="30px">
                    <span class="name-fnt-1">UNYUSTORE</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-1">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('user/index');?>">Home</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('user/profile');?>">Profile Saya</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="<?= base_url()?>Autentifikasi/logout" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- end of navbar -->