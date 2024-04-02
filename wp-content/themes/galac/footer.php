<!-- back to top -->
<button class="back-to-top-btn" data-visible="false">
    <img src="/wp-content/themes/galac/src/assets/icons/arrow-up-icon.svg" aira-hidden="true">
</button>
<div class="search-overlay" data-active="false">
    <?php get_search_form() ?>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <a href="#" class="footer__logo-wrapper">
                <div aria-label="footer">
                    <img src="/wp-content/themes/galac/src/assets/icons/hero-logo.svg" alt="footer logo" />
                </div>
            </a>
            <div class="footer__row-wrapper">
                <div class="footer__row">
                    <h3 class="footer__heading">informacije</h3>
                    <div class="footer__col">
                        <div class="contact-info-footer-row">
                            <a href="tel:+385989274766"><img
                                    src="/wp-content/themes/galac/src/assets/icons/phone-icon.svg" alt="phone icon" />
                                +385 98 927 4766</a>
                            <a><img src="/wp-content/themes/galac/src/assets/icons/location-icon.svg"
                                    alt="phone icon" />
                                Put Gospe od Dračin 1, Kaštel Lukšić</a>
                            <a href="mailto:ured@instalacije-vidovic.hr"><img
                                    src="/wp-content/themes/galac/src/assets/icons/mail-icon.svg" alt="phone icon" />
                                ured@instalacije-vidovic.hr</a>
                        </div>
                    </div>
                </div>
                <div class="footer__row">
                    <h3 class="footer__heading">općenito</h3>
                    <div class="footer__col">
                        <nav class="footer__nav">
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a href="<?php echo site_url('') ?>" class="footer__link">Početna</a>
                                </li>
                                <?php
                                    if(is_front_page()){ ?>
                                <li class="footer__item">
                                    <a href="#ponuda" class="footer__link">Usluge</a>
                                </li>
                                <?php }
                                ?>
                                <li class="footer__item">
                                    <a href="#galerija" class="footer__link">Galerija</a>
                                </li>
                                <li class="footer__item">
                                    <a href="<?php echo site_url('novosti') ?>" class="footer__link">Novosti</a>
                                </li>
                                <?php
                                    if(is_front_page()){ ?>
                                <li class="footer__item">
                                    <a href="#o-nama" class="footer__link">O nama</a>
                                </li>
                                <?php }
                                ?>
                                <li class="footer__item">
                                    <a href="#" class="footer__link">Kontakt</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="footer__row">
                    <h3 class="footer__heading">ostalo</h3>
                    <div class="footer__col footer__col--last-col">
                        <div class="footer__regulativa-wrapper">
                            <a href="<?php echo site_url('pravila-privatnosti') ?>" class="footer__link">Pravila
                                privatnosti</a>
                            <a href="<?php echo site_url('uvjeti-koristenja') ?>" class="footer__link">Uvjeti
                                korištenja</a>
                        </div>
                        <div class="footer__socials">
                            <a target="_blank" href="https://www.facebook.com/bazeniwellness"><img
                                    src="/wp-content/themes/galac/src/assets/icons/fb-icon.svg" alt="" /></a>
                            <a target="_blank" href="https://www.instagram.com/bazeni_instalacije_vidovic/"><img
                                    src="/wp-content/themes/galac/src/assets/icons/instagram-icon.svg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="copyright__wrapper">
            <p>Copyright © 2024 - Sva prava pridržana.</p>
            •
            <div class="copyright-right-row">
                <strong>GALAC-DESIGN</strong>
                <p>Obrt za računalno programiranje</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>