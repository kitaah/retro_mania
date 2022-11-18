<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <script src="https://kit.fontawesome.com/ce80081662.js" crossorigin="anonymous" defer></script>
    <link type="text/css" rel="stylesheet" href="css/style.min.css?v=<?php echo time(); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Website | Retro Mania</title>
</head>

<body>
    <header class="header__website">
        <nav class="menu__desktop">
            <ul class="header__menu-desktop flex-center">
                <li><a href="index.php?page=home"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="index.php?page=caps_catalog"><i class="fa-solid fa-list header-list"></i></a></li>
                <li><a href="index.php?page=about_us"><i class="fa-solid fa-circle-info header-info"></i></a></li>
                <li>
                    <p><img src="medias/img/layouts/retro_mania_logo.png" id="header-logo-desktop__image" alt="retro mania logo website" /></p>
                </li>
                <li><a href="index.php?page=contact_us"><i class="fa-solid fa-at"></i></a></li>
                <li><a href="index.php?page=search_game"><i class="fa-solid fa-gamepad"></i></a></li>
                <li><a href="index.php?page=guestbook"><i class="fa-solid fa-book-open"></i></a></li>
            </ul>
        </nav>

        <nav class="menu__devices">
            <ul class="header__menu-devices flex-center">
                <li>
                    <nav class="menu-dropdown">
                        <i class="fa-solid fa-bars dropdown-menu-title"></i>
                        <ul class="menu-dropdown-content invisible-menu">
                            <li class="dropdown-content"><a href="index.php?page=home">Home</a></li>
                            <li class="dropdown-content"><a href="index.php?page=caps_catalog">Caps catalog</a></li>
                            <li class="dropdown-content"><a href="index.php?page=about_us">About us</a></li>
                            <li class="dropdown-content"><a href="index.php?page=contact_us">Contact us</a></li>
                            <li class="dropdown-content"><a href="index.php?page=guestbook">Guestbook</a></li>
                            <li class="dropdown-content"><a href="index.php?page=search_game">Search Game</a></li>
                            <li class="dropdown-content"><a href="index.php?page=privacy_policy">Privacy Policy</a></li>
                            <li class="dropdown-content"><a href="index.php?page=terms_of_service">Terms of Service</a></li>
                            <li class="dropdown-content"><a href="https://fr-fr.facebook.com/">Facebook</a></li>
                            <li class="dropdown-content"><a href="https://www.instagram.com/">Instagram</a></li>
                            <li class="dropdown-content"><a href="https://twitter.com/">Twitter</a></li>
                        </ul>
                    </nav>
                </li>
                <li>
                    <p><img src="medias/img/layouts/retro_mania_logo.png" id="header-logo-devices__img" alt="retro mania logo website" /></p>
                </li>
            </ul>
        </nav>
    </header>

    <?php require_once $this->sitePage; ?>

    <footer class="footer__navs flex-center">
        <nav class="footer__nav">
            <h2>About</h2>
            <ul>
                <li><a href="index.php?page=about_us">About us</a></li>
                <li><a href="index.php?page=caps_catalog">Catalog</a></li>
                <li><a href="index.php?page=search_game">Search game</a></li>
            </ul>
        </nav>

        <nav class="footer__nav">
            <h2>Contact & legal</h2>
            <ul>
                <li><a href="index.php?page=contact_us">Contact us</a></li>
                <li><a href="index.php?page=privacy_policy">Privacy policy</a></li>
                <li><a href="index.php?page=terms_of_service">Terms of service</a></li>
            </ul>
        </nav>

        <nav class="footer__nav">
            <h2>Follow us</h2>
            <ul>
                <li><i class="fa-brands fa-facebook"></i><a href="https://fr-fr.facebook.com/">Facebook</a></li>
                <li><i class="fa-brands fa-instagram"></i><a href="https://www.instagram.com/">Instagram</a></li>
                <li><i class="fa-brands fa-twitter"></i><a href="https://twitter.com/">Twitter</a></li>
            </ul>
        </nav>
    </footer>
    <script src="js/app.min.js"></script>
</body>

</html>