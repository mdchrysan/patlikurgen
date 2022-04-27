<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<div class="b-page">
    <section class="heading">
        <h1>Our Books</h1>
        <p>Tiap tahun kami menerbitkan buku. Tahun pertama dimulai dengan refleksi. Tahun kedua juga berupa refleksi yang lebih mendalam berjudul Motus. Di tahun terakhir, kami memproduksi buku tahunan alias <em>yearbook</em>, sekaligus sebagai kenangan terakhir di SMA.</p>
    </section>
    <section class="books-section">
        <h2>The Forgotten Title</h2>
        <h3>"subtitle here"</h3>
        <div class="row px-3">
            <div class="col-7">
                <p>Merupakan buku pertama kami, menceritakan sebuah perjuangan menyesuaikan diri. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, distinctio est recusandae ipsam ducimus dolores deserunt eveniet, sequi sint eaque ratione cum at? Voluptas, praesentium sunt tenetur saepe nulla quas.</p>
            </div>
            <div class="col-5">
                <img src="https://static.vecteezy.com/system/resources/previews/006/793/029/large_2x/a4-book-mock-up-with-white-cover-blank-journal-template-design-textbook-with-copy-space-3d-product-illustration-free-vector.jpg" alt="First Book Here">
            </div>
        </div>
    </section>
    <section class="books-section">
        <h2>Motus</h2>
        <h3>"karena perjuangan merupakan proses menuju perubahan"</h3>
        <div class="row px-3">
            <div class="col-5">
                <img src="https://static.vecteezy.com/system/resources/previews/006/793/029/large_2x/a4-book-mock-up-with-white-cover-blank-journal-template-design-textbook-with-copy-space-3d-product-illustration-free-vector.jpg" alt="Second Book Here">
            </div>
            <div class="col-7">
                <p>Merupakan buku kedua kami, menceritakan sebuah perjuangan untuk berubah. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, distinctio est recusandae ipsam ducimus dolores deserunt eveniet, sequi sint eaque ratione cum at? Voluptas, praesentium sunt tenetur saepe nulla quas.</p>
            </div>
        </div>
    </section>
    <section class="books-section">
        <h2>Nexterday</h2>
        <h3>"The Day After Tomorrow"</h3>
        <div class="row px-3">
            <div class="col-7">
                <p>Merupakan buku terakhir kami yang berisi kenangan terindah. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, distinctio est recusandae ipsam ducimus dolores deserunt eveniet, sequi sint eaque ratione cum at? Voluptas, praesentium sunt tenetur saepe nulla quas.</p>
            </div>
            <div class="col-5">
                <img src="https://static.vecteezy.com/system/resources/previews/006/793/029/large_2x/a4-book-mock-up-with-white-cover-blank-journal-template-design-textbook-with-copy-space-3d-product-illustration-free-vector.jpg" alt="Yearbook Here">
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>