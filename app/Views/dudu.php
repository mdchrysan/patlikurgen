<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="d-title">
        <h1>DUDU</h1>
        <h3>Dari Untuk Dengan Ucapan</h3>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#duduMaker">Online</button>
        <p>*klik untuk membuat!</p>
        <!-- Modal -->
        <div class="modal fade" id="duduMaker" tabindex="-1" aria-labelledby="formDudu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="dariInput" placeholder="Alma 24">
                            <label for="dariInput">Dari</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="untukInput" placeholder="Ivan 24">
                            <label for="untukInput">Untuk</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Minggu besok gereja bareng yuk!" id="ucapanInput" style="height: 100px"></textarea>
                            <label for="ucapanInput">Dengan Ucapan</label>
                        </div>
                        <div class="d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>