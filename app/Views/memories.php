<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<section class="photos" id="photos"></section>
<section class="cinema" id="videos">
    <div>
        <iframe src="https://www.youtube.com/embed/fMWG6A9k_gQ" title="Film Angkatan" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div>
        <iframe src="https://www.youtube.com/embed/2uR70dThaEw" title="Goes To Aftermovie" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<section class="cinema" id="short-movies">
    <iframe src="https://www.youtube.com/embed/cKd4T8vYKCM" title="Nekat" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/8eYMAhG7dZo" title="24:00" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/aPO8g4OC-pU" title="Takut" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe src="https://www.youtube.com/embed/zrcRC3deUSE" title="Bangunkan Aku Saat Engkau Kembali" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
<?= $this->endSection(); ?>