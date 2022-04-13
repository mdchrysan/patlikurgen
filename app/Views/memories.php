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
        <h2>Photos</h2>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1510070112810-d4e9a46d9e91?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" alt="memories">
                        <div class="overlay">
                            <p class="caption">Title here.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1510070112810-d4e9a46d9e91?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" alt="memories">
                        <div class="overlay">
                            <p class="caption">Title here.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1510070112810-d4e9a46d9e91?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" alt="memories">
                        <div class="overlay">
                            <p class="caption">Title here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cinema-1" id="videos">
        <h2>Videos</h2>
        <div class="videos">
            <div class="video">
                <iframe src="https://www.youtube.com/embed/fMWG6A9k_gQ?controls=0&rel=0&modestbranding=1" title="Film Angkatan" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/2uR70dThaEw?controls=0&rel=0&modestbranding=1" title="Goes To Aftermovie" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="cinema-2" id="short-movies">
        <h2>Short Movies</h2>
        <div class="videos">
            <div class="video">
                <iframe src="https://www.youtube.com/embed/cKd4T8vYKCM?controls=0&rel=0&modestbranding=1" title="Nekat" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/8eYMAhG7dZo?controls=0&rel=0&modestbranding=1" title="24:00" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/aPO8g4OC-pU?controls=0&rel=0&modestbranding=1" title="Takut" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video">
                <iframe src="https://www.youtube.com/embed/zrcRC3deUSE?controls=0&rel=0&modestbranding=1" title="Bangunkan Aku Saat Engkau Kembali" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>