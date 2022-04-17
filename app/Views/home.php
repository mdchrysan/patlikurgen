<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<section class="welcome-section">
    <img src="src/stars.png" alt="stars-img" id="stars">
    <img src="src/moon.png" alt="moon-img" id="moon">
    <h2 id="main-txt">Patlikurgen</h2>
    <h3 id="sub-txt">"Meraih Masa Depan"</h3>
    <a href="#about" class="nos-btn">Let's Nostalgic!</a>
</section>
<section class="home" id="about">
    <div>
        <div class="row">
            <div class="col-lg-7">
                <h2>About Us</h2>
                <p> Kami adalah Angkatan ke-24 di SMA Pangudi Luhur Van Lith Muntilan. Berawal dari Orientasi Asrama & Sekolah (OASE) pada 21 Mei 2017, menjadikan tanggal tersebut sebagai titik awal angkatan ini lahir. Hingga akhirnya kami terlahir kembali ke dunia pada 20 Mei 2017 untuk menyebarkan Api Van Lith. Selama kami berdinamika disana, kami dibiasakan untuk selalu merefleksikan diri yang akhirnya menghasilkan dua buah <span><a href="<?= base_url('/books'); ?>">buku refleksi angkatan.</a></span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi culpa sint illum cupiditate ab iure esse, iste ea sunt itaque dolor illo et perspiciatis obcaecati, ullam hic, maiores vel similique!</p>
            </div>
            <img class="col-lg-5" src="https://pbs.twimg.com/media/CH6HWI3UAAAstX8.jpg" alt="foto angkatan">
        </div>
    </div>
</section>
<section class="home" id="member">
    <h2>Spot Your Name</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium a tempora tenetur nostrum. Iusto commodi earum ducimus quas at reprehenderit quam qui totam quasi. Libero saepe natus dolore! Mollitia, dolore?</p>
</section>
<section class="home" id="statistic">
    <h2>180 Anggota 180 Anggota 180 Anggota</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium a tempora tenetur nostrum. Iusto commodi earum ducimus quas at reprehenderit quam qui totam quasi. Libero saepe natus dolore! Mollitia, dolore?</p>
</section>
<section class="home socials-section" id="socials">
    <h2>Get to Know Us Better with</h2>
    <!-- <div class="socials-link"> -->
    <div class="row">
        <a href="https://www.instagram.com/patlikurgen/" class="btn col-lg-3" target="_blank">
            <img src="src/instagram.png" alt="instagram-link"></a>
        <a href="https://open.spotify.com/user/qpnrwvinmsitd38nz2kt3ij0v" class="btn col-lg-3" target="_blank">
            <img src="src/spotify.png" alt="spotify-link"></a>
        <a href="https://www.youtube.com/channel/UCjI3BssTlpPSHqnE_8B_mgQ" class="btn col-lg-3" target="_blank">
            <img src="src/youtube.png" alt="youtube-link"></a>
        <a href="mailto:yearbook.patlikur@gmail.com" class="btn col-lg-3" target="_blank">
            <img src="src/gmail.png" alt="gmail-link"></a>
    </div>
</section>
<?= $this->endSection(); ?>