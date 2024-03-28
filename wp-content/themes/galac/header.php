<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lorem ipsum dolor sit amet.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="lorem, ipsum, dolor, sit, amet">
    <?php wp_head() ?>
</head>

<body <?php body_class()?>>
    <header class="header">
        <a href="<?php echo site_url() ?>">
            <img src="/wp-content/themes/galac/src/assets/icons/header-logo-white.svg" alt="logo of bazeni vidovic"
                class="header__logo-icon" />
        </a>
        <button class="ham" aria-label="ham button" tabindex="0" aria-controls="nav" data-active="false">
            <div class="ham-line"></div>
            <div class="ham-line"></div>
            <div class="ham-line"></div>
        </button>
        <nav class="nav" data-active="false" id="nav" aria-expanded="false">
            <ul class="nav__list">
                <li class="nav__item active">
                    <a href="<?php echo site_url() ?>" class="nav__link">Početna</a>
                </li>
                <?php
        if(is_front_page()){ ?>
                <li class="nav__item">
                    <a href="#o-nama" class="nav__link">O nama</a>
                </li>
                <?php  }
    ?>
                <li class="nav__item nav__item--dropdown">
                    <span class="nav__link nav__link--usluge"><img class="icon"
                            src="/wp-content/themes/galac/src/assets/icons/dropdown-triangle-icon.svg"
                            alt="triangle for dropdown menu" />
                        Usluge</span>
                    <div class="dropdown-block"></div>
                    <ul class="nav__dropdown-list">
                        <li class="nav__item">
                            <span>Bazeni
                                <img class="nav__link-dropdown-icon"
                                    src="/wp-content/themes/galac/src/assets/icons/down-arrow-icon.svg"
                                    alt="submenu arrow right icon" /></span>
                            <ul class="nav__dropdown-list nav__dropdown-list--sublist first__sublist">
                                <li><a class="nav__link" href="#">Upitnik za ponudu</a></li>
                                <li><a class="nav__link" href="<?php echo site_url('bazen') ?>">Dijelovi i oprema</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <span>Hidromasažne kade
                                <img class="nav__link-dropdown-icon"
                                    src="/wp-content/themes/galac/src/assets/icons/down-arrow-icon.svg"
                                    alt="submenu arrow right icon" /></span>
                            <ul class="nav__dropdown-list nav__dropdown-list--sublist second__sublist">
                                <li><a class="nav__link"
                                        href="<?php echo site_url('kade-kategorije/hidromasazne-kade/') ?>">Hidromasažne
                                        kade</a></li>
                                <li><a class="nav__link" href="#">SwimSpa bazeni</a></li>
                                <li>
                                    <a class="nav__link" href="#">Rezervni dijelovi za kade</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <span>Saune
                                <img class="nav__link-dropdown-icon"
                                    src="/wp-content/themes/galac/src/assets/icons/down-arrow-icon.svg"
                                    alt="submenu arrow right icon" /></span>
                            <ul class="nav__dropdown-list nav__dropdown-list--sublist third__sublist">
                                <li><a class="nav__link" href="#">Saune po mjeri</a></li>
                                <li><a class="nav__link" href="#">Dijelovi i oprema</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?php
                    if(is_front_page()){ ?>
                <li class="nav__item">
                    <a href="#o-ponudi" class="nav__link"> O našoj ponudi </a>
                </li>
                <?php  }
                ?>
                <li class="nav__item">
                    <a href="#galerija" class="nav__link">Galerija</a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link">Kontakt</a>
                </li>
            </ul>
        </nav>
        <button class="search-btn">
            <img src="/wp-content/themes/galac/src/assets/icons/search-icon.svg" alt="search icon" />
        </button>
    </header>