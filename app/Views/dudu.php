<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<section class="d-title">
    <h1>DUDU</h1>
    <h3>Dari Untuk Dengan Ucapan</h3>
    <button type="button" class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#duduMaker">Online
        <!-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">
            24+
            <span class="visually-hidden">unread dudu</span>
        </span> -->
    </button>
    <p>*klik untuk membuat!</p>
    <!-- Modal -->
    <div class="modal fade" id="duduMaker" tabindex="-1" aria-labelledby="formDudu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="/dudu/save" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="dariInput" placeholder="Aspi 24" name="dari" required>
                            <label for="dariInput">Dari</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="untukInput" placeholder="Aspa 24" name="untuk" required>
                            <label for="untukInput">Untuk</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="besok eksplor kemana?" id="ucapanInput" name="ucapan" style="height: 100px" required></textarea>
                            <label for="ucapanInput">Dengan Ucapan</label>
                        </div>
                        <div class="d-md-flex justify-content-md-end">
                            <button type="submit" class="btn">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-card">
    <div class="row">
        <!--?php foreach ($dudu as $d) : ?-->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-shadow">
                <div class="card">
                    <div class="content">
                        <p>D : <span>
                                <-?= $d['dari']; ?>
                            </span></p>
                        <p>U : <span>
                                <-?= $d['untuk']; ?>
                            </span></p>
                        <p>DU : <span>
                                <-?= $d['ucapan']; ?>
                            </span></p>
                        <!-- break -->
                        <p>D : <span>Alma 24</span></p>
                        <p>U : <span>Ivan 24</span></p>
                        <p>DU : <span>Minggu gereja bareng yuk! Ketemuan di refter ya..</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!--?php endforeach; ?-->

        <!-- Layout Test -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-shadow">
                <div class="card">
                    <div class="content">
                        <p>D : <span>Alma 24</span></p>
                        <p>U : <span>Ivan 24</span></p>
                        <p>DU : <span>Minggu gereja bareng yuk! Ketemuan di refter ya..</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-shadow">
                <div class="card">
                    <div class="content">
                        <p>D : <span>Alma 24</span></p>
                        <p>U : <span>Ivan 24</span></p>
                        <p>DU : <span>Minggu gereja bareng yuk! Ketemuan di refter ya..</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-shadow">
                <div class="card">
                    <div class="content">
                        <p>D : <span>Alma 24</span></p>
                        <p>U : <span>Ivan 24</span></p>
                        <p>DU : <span>Minggu gereja bareng yuk! Ketemuan di refter ya..</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-shadow">
                <div class="card">
                    <div class="content">
                        <p>D : <span>Alma 24</span></p>
                        <p>U : <span>Ivan 24</span></p>
                        <p>DU : <span>Minggu gereja bareng yuk! Ketemuan di refter ya..</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card-shadow">
                <div class="card">
                    <div class="content">
                        <p>D : <span>Alma 24</span></p>
                        <p>U : <span>Ivan 24</span></p>
                        <p>DU : <span>Minggu gereja bareng yuk! Ketemuan di refter ya..</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>