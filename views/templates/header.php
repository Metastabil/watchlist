<?php
/**
 * @var string $title
 */
?>

<!DOCTYPE HTML>
<html lang="de" data-bs-theme="dark">
    <head>
        <title><?= "$title | Watchlist" ?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/application.css') ?>" />
        <script src="https://code.jquery.com/jquery-3.7.1.js"
                integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/cba80a8d38.js" crossorigin="anonymous"></script>
    </head>
        <header>
            <nav>
                <a href="<?= base_url('broadcasts') ?>" class="nav-element">
                    Filme & Serien
                </a>

                <a href="<?= base_url('platforms') ?>" class="nav-element">
                    Plattformen
                </a>

                <a href="<?= base_url('types') ?>" class="nav-element">
                    Typen
                </a>

                <a href="<?= base_url('users') ?>" class="nav-element">
                    Benutzer
                </a>

                <a href="<?= base_url('logout') ?>" class="nav-element nav-element-right">
                    Abmelden
                </a>
            </nav>
        </header>
        <main>