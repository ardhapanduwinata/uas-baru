<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home') ?>">Home <?= $siapa ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user/manage_profile')?>">Manage Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#logout_modal" href="">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container"><br><br>
            <h1 class="masthead-heading mb-0">Sistem Informasi</h1>
            <h2 class="masthead-subheading mb-0">Perpustakaan</h2>
            <!--            <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>-->
        </div>
        <br><br>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>
    <div class="container">
        <div class="row col">
            <?php foreach ($buku as $b) {?>
            <div class="col-md-4"><br><br>
                <div class="card" style="width: 18rem;" >
                    <img class="card-img-top" src="<?= base_url('assets/gambar/'.$b->cover_buku) ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $b->nama ?>e</h5>
                        <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <a class="btn btn-primary" href="<?= base_url('user/details_buku/'.$b->id)?>">See Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>