<nav class="navbar">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">xxiv</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
        <ul>
            <li class="nav-item">
                <a class="nav-link <?= uri_string() == '/' ? 'active' : 'inactive'; ?>" href="<?= base_url('/'); ?>" class="active">
                    Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= uri_string() == 'books' ? 'active' : 'inactive'; ?>" href="<?= base_url('/books'); ?>">
                    Our Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= uri_string() == 'memories' ? 'active' : 'inactive'; ?>" href="<?= base_url('/memories'); ?>">
                    Memories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= uri_string() == 'dudu' ? 'active' : 'inactive'; ?>" href="<?= base_url('/dudu'); ?>">
                    DUDU</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= uri_string() == 'game' ? 'active' : 'inactive'; ?>" href="<?= base_url('/game'); ?>">
                    Game</a>
            </li>
        </ul>
        <!-- </div> -->
    </div>
</nav>