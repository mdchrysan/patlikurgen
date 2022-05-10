<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<section class="d-title">
    <h1>DUDU</h1>
    <h3>Dari Untuk Dengan Ucapan</h3>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#duduMaker">Online</button>
    <p>*klik untuk membuat!</p>
    <!-- Modal -->
    <div class="modal fade" id="duduMaker" tabindex="-1" aria-labelledby="formDudu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="dariInput" placeholder="Alma 24" required>
                            <label for="dariInput">Dari</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="untukInput" placeholder="Ivan 24" required>
                            <label for="untukInput">Untuk</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Minggu besok gereja bareng yuk!" id="ucapanInput" style="height: 100px" required></textarea>
                            <label for="ucapanInput">Dengan Ucapan</label>
                        </div>
                        <div class="d-md-flex justify-content-md-end">
                            <button type="button" class="btn">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-card">
    <div class="row">
        <!--?php foreach ($card as $c) : ?-->
        <div class="col-sm-3">
            <div class="card border-warning mb-3">
                <div class="card-body">
                    <!-- <p class="card-text"><-?= $c['dari']; ?></p> -->
                    <!-- <p class="card-text"><-?= $c['untuk']; ?></p> -->
                    <!-- <p class="card-text"><-?= $c['ucapan']; ?></p> -->
                    <p class="card-text">D : Alma 24</p>
                    <p class="card-text">U : Ivan 24</p>
                    <p class="card-text">DU : Besok gereja bareng yuk!</p>
                </div>
            </div>
        </div>
        <!--?php endforeach; ?-->

        <!-- Layout Test -->
        <div class="col-sm-3">
            <div class="card border-warning mb-3">
                <div class="card-body">
                    <p class="card-text">D : Alma 24</p>
                    <p class="card-text">U : Ivan 24</p>
                    <p class="card-text">DU : Besok gereja bareng yuk!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-warning mb-3">
                <div class="card-body">
                    <p class="card-text">D : Alma 24</p>
                    <p class="card-text">U : Ivan 24</p>
                    <p class="card-text">DU : Besok gereja bareng yuk!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-warning mb-3">
                <div class="card-body">
                    <p class="card-text">D : Alma 24</p>
                    <p class="card-text">U : Ivan 24</p>
                    <p class="card-text">DU : Besok gereja bareng yuk!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card border-warning mb-3">
                <div class="card-body">
                    <p class="card-text">D : Alma 24</p>
                    <p class="card-text">U : Ivan 24</p>
                    <p class="card-text">DU : Besok gereja bareng yuk!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>