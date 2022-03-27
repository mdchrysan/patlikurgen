<?= $this->extend('layout/head'); ?>

<?= $this->section('content'); ?>
<section>
    <img src="src/stars.png" alt="stars-img" id="stars">
    <img src="src/moon.png" alt="moon-img" id="moon">
    <h2 id="main-txt">Patlikurgen</h2>
    <h3 id="sub-txt">"Meraih Masa Depan"</h3>
    <a href="#about" class="nos-btn">Let's Nostalgic!</a>
</section>
<div class="about" id="about">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi culpa sint illum cupiditate ab iure esse, iste ea sunt itaque dolor illo et perspiciatis obcaecati, ullam hic, maiores vel similique!</p>
</div>
<?= $this->endSection(); ?>