<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<div class="m-page">
    <section class="header" id="header">
        <div class="header-content">
            <h1>Memories</h1>
            <p><a href="#photos">photos</a>, <a href="#videos">videos</a>, and <a href="#short-movies">short movies</a> by Documentation Team and 24 Cinema</p>
            <a href="#photos" class="m-nos-btn">Let's Nostalgic!</a>
        </div>
    </section>
    <section class="photos" id="photos">
        <h2 class="m-title">Photos</h2>
    </section>
    <section class="cinema-1" id="videos">
        <h2 class="m-title">Videos</h2>
        <div>
            <iframe src="https://www.youtube.com/embed/fMWG6A9k_gQ" title="Film Angkatan" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div>
            <iframe src="https://www.youtube.com/embed/2uR70dThaEw" title="Goes To Aftermovie" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <section class="cinema-2" id="short-movies">
        <h2 class="m-title">Short Movies</h2>
        <iframe src="https://www.youtube.com/embed/cKd4T8vYKCM" title="Nekat" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/8eYMAhG7dZo" title="24:00" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/aPO8g4OC-pU" title="Takut" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/zrcRC3deUSE" title="Bangunkan Aku Saat Engkau Kembali" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
</div>
<?= $this->endSection(); ?>