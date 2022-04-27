<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<div class="b-page">
    <section>
        <h1>Our Books</h1>
        <p>Tiap tahun kami menerbitkan buku. Tahun pertama dimulai dengan refleksi. Tahun kedua juga berupa refleksi yang lebih mendalam berjudul Motus. Di tahun terakhir, kami memproduksi buku tahunan alias <em>yearbook</em>, sekaligus sebagai kenangan terakhir di SMA.</p>
    </section>
    <section>
        <h2>The Forgotten Title</h2>
        <h3>subtitle here</h3>
        <div class="row">
            <div class="col-9">
                <p>Merupakan buku pertama kami, menceritakan sebuah perjuangan menyesuaikan diri. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, distinctio est recusandae ipsam ducimus dolores deserunt eveniet, sequi sint eaque ratione cum at? Voluptas, praesentium sunt tenetur saepe nulla quas.</p>
            </div>
            <div class="col-3">
                <img src="" alt="First Book Here">
            </div>
        </div>
    </section>
    <section>
        <h2>Motus</h2>
        <h3>"karena perjuangan merupakan proses menuju perubahan"</h3>
        <div class="row">
            <div class="col-3">
                <img src="" alt="Second Book Here">
            </div>
            <div class="col-9">
                <p>Merupakan buku kedua kami, menceritakan sebuah perjuangan untuk berubah. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, distinctio est recusandae ipsam ducimus dolores deserunt eveniet, sequi sint eaque ratione cum at? Voluptas, praesentium sunt tenetur saepe nulla quas.</p>
            </div>
        </div>
    </section>
    <section>
        <h2>Nexterday</h2>
        <h3>"The Day After Tomorrow"</h3>
        <div class="row">
            <div class="col-9">
                <p>Merupakan buku terakhir kami yang berisi kenangan terindah. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, distinctio est recusandae ipsam ducimus dolores deserunt eveniet, sequi sint eaque ratione cum at? Voluptas, praesentium sunt tenetur saepe nulla quas.</p>
            </div>
            <div class="col-3">
                <img src="" alt="Yearbook Here">
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>