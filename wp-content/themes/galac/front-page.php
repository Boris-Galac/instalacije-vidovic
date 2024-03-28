<?php get_header() ?>
<main class="main main-home ">
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero__wrapper">
                <img class="hero-logo-illustration" src="/wp-content/themes/galac/src/assets/icons/hero-logo.svg"
                    alt="hero logo ilustratioon" />
                <div class="hero__headline-wrapper">
                    <h1 class="headline">sve što trebate za bazen</h1>
                    <p class="subheadline">
                        Nudimo kompletnu uslugu od planiranja, izgradnje i opremanja
                        bazena do održavanja i servisiranja.
                    </p>
                </div>
            </div>
            <div class="social-proof social-proof--hero">
                <div class="container">
                    <div class="social-proof__wrapper">
                        <div class="counter-wrapper">
                            <div class="project-counter">
                                <div class="counter-box">
                                    <span class="count" data-num="350">0</span>
                                    <span class="count__caption">+ projekata</span>
                                </div>
                                <div class="counter-box">
                                    <span class="count" data-num="10">0</span>
                                    <span class="count__caption">+ godina iskustva</span>
                                </div>
                                <div class="counter-box">
                                    <span class="count" data-num="400">0</span>
                                    <span class="count__caption">+ godina iskustva na istom polju</span>
                                </div>
                            </div>
                            <div class="contact-info">
                                <a class="contact-info__contact" href="tel:+385996682736"><img
                                        src="/wp-content/themes/galac/src/assets/icons/phone-icon.svg"
                                        alt="phone icon" />
                                    +385996682736</a>
                                <a class="contact-info__contact" href="mailto:ured@instalacije-vidovic.hr"><img
                                        src="/wp-content/themes/galac/src/assets/icons/mail-icon.svg"
                                        alt="mail icon" />ured@instalacije-vidovic.hr</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#ponuda" class="scroll-down-btn"><img
                src="/wp-content/themes/galac/src/assets/icons/scroll-down-icon.svg" aria-hidden="true" /></a>
    </section>
    <!-- SOCIAL PROOF SECTION -->
    <section class="social-proof">
        <div class="container">
            <div class="social-proof__wrapper">
                <div class="counter-wrapper">
                    <div class="project-counter">
                        <div class="counter-box">
                            <span class="count" data-num="350">0</span>
                            <span class="count__caption">+ projekata</span>
                        </div>
                        <div class="counter-box">
                            <span class="count" data-num="10">0</span>
                            <span class="count__caption">+ godina iskustva</span>
                        </div>
                        <div class="counter-box">
                            <span class="count" data-num="400">0</span>
                            <span class="count__caption">+ godina iskustva na istom polju</span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <a class="contact-info__contact" href="tel:+385996682736"><img
                                src="/wp-content/themes/galac/src/assets/icons/phone-icon.svg" alt="phone icon" />
                            +385996682736</a>
                        <a class="contact-info__contact" href="mailto:ured@instalacije-vidovic.hr"><img
                                src="/wp-content/themes/galac/src/assets/icons/mail-icon.svg"
                                alt="mail icon" />ured@instalacije-vidovic.hr</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT US SECTION -->
    <section class="about-us" id="o-nama">
        <div class="container">
            <div class="about-us__wrapper">
                <h2 class="h2-heading">o nama</h2>
                <div class="about-us__inner-wrapper">
                    <img src="/wp-content/themes/galac/src/assets/images/about-us-image.png"
                        alt="kombi s naljepnicom bazeni i instalacije vidović" class="about-us-img" />
                    <div class="about-us__paragraph-wrapper">
                        <p>
                            Tvrtka Instalacije Vidović specijalizirana je za izgradnju,
                            ugradnju potrebne opreme i održavanje bazena, hidromasažnih
                            kada, vodoinstalacija, centralnog i solarnog grijanja i
                            klimatizacije.
                        </p>
                        <br />
                        <p>
                            Nudimo kompletnu uslugu od planiranja, izgradnje i opremanja
                            bazena do održavanja i servisiranja. S iskustvom od preko 10
                            godina. Konstantno usavršavamo našu ponudu i nudimo inovativne
                            ideje za sve Vaše želje i potrebe.
                        </p>
                        <br />
                        <p>
                            Dugogodišnje iskustvo, brojni realizirani projekti i stalno
                            usavršavanje zaposlenika jamac su brzine i profesionalnosti
                            naše usluge.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PONUDA SECTION -->
    <section class="ponuda" id="ponuda">
        <div class="container">
            <div class="ponuda__wrapper">
                <h2 class="h2-heading h2-heading--center">ponuda</h2>
                <div class="ponuda__inner-wrapper">
                    <a class="offer-btn" href="<?php echo site_url('bazen') ?>">
                        <h3 class="h3-heading ponuda-heading">bazeni</h3>
                        <img src="/wp-content/themes/galac/src/assets/icons/offer-pool-icon.svg" alt="offer icon">
                    </a>
                    <a class="offer-btn" href="<?php echo site_url('kade') ?>">
                        <h3 class="h3-heading ponuda-heading">hidromasažne kade</h3>
                        <img src="/wp-content/themes/galac/src/assets/icons/offer-bath-icon.svg" alt="offer icon"
                            class="offer-bath-icon">
                    </a>
                    <a class="offer-btn" href="<?php echo site_url('saune') ?>">
                        <h3 class="h3-heading ponuda-heading">saune</h3>
                        <img src="/wp-content/themes/galac/src/assets/icons/offer-sauna-icon.svg" alt="offer icon">
                    </a>
                </div>
            </div>
    </section>
    <!-- O PONUDI SECTION -->
    <section class="o-ponudi" id="o-ponudi">
        <div class="container">
            <h2 class="h2-heading h2-heading--dark">o našoj ponudi</h2>
            <div class="o-ponudi__wrapper">
                <article class="o-ponudi-accordion">
                    <div class="accordion" id="accordion-btn">
                        <img src="/wp-content/themes/galac/src/assets/icons/bazeni-icon.png" alt=""
                            class="accordion__icon" />
                        <h3 class="accordion-heading">Bazeni</h3>
                        <button class="accordion-btn">
                            <img src="/wp-content/themes/galac/src/assets/icons/accordion-plus-icon.svg"
                                alt="accordion plus icon" id="accordion-icon" />
                        </button>
                    </div>
                    <div class="accordion-content" data-active="false">
                        <p>
                            Bazeni mogu biti betonski, poliesterski, keramički ili
                            polipropilenski s preljevom ili skimerom. Oprema uključuje
                            filter, pumpu, mlaznice i skimer. Automatike održavaju vodu s
                            klorom i kiselinom.
                        </p>
                        <br />
                        <p>
                            <strong>Projektiranje</strong> obuhvaća odabir estetske
                            opreme. Redovito održavanje, čišćenje i zamjena opreme
                            produžuju vijek trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Izgradnja</strong> obuhvaća odabir estetske opreme.
                            Redovito održavanje, čišćenje i zamjena opreme produžuju vijek
                            trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Montaža</strong> opreme odvija se tijekom gradnje.
                            <strong>Održavanje</strong>, uključujući čišćenje i zamjenu
                            opreme, preporučuje se redovito za pravilno funkcioniranje i
                            užitak korištenja bazena.
                        </p>
                    </div>
                </article>
                <article class="o-ponudi-accordion">
                    <div class="accordion" id="accordion-btn">
                        <img src="/wp-content/themes/galac/src/assets/icons/hidromasazna-icon.png" alt=""
                            class="accordion__icon" />
                        <h3 class="accordion-heading">Hidromasažne kade</h3>
                        <button class="accordion-btn">
                            <img src="/wp-content/themes/galac/src/assets/icons/accordion-plus-icon.svg"
                                alt="accordion plus icon" id="accordion-icon" />
                        </button>
                    </div>
                    <div class="accordion-content" data-active="false">
                        <p>
                            Bazeni mogu biti betonski, poliesterski, keramički ili
                            polipropilenski s preljevom ili skimerom. Oprema uključuje
                            filter, pumpu, mlaznice i skimer. Automatike održavaju vodu s
                            klorom i kiselinom.
                        </p>
                        <br />
                        <p>
                            <strong>Projektiranje</strong> obuhvaća odabir estetske
                            opreme. Redovito održavanje, čišćenje i zamjena opreme
                            produžuju vijek trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Izgradnja</strong> obuhvaća odabir estetske opreme.
                            Redovito održavanje, čišćenje i zamjena opreme produžuju vijek
                            trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Montaža</strong> opreme odvija se tijekom gradnje.
                            <strong>Održavanje</strong>, uključujući čišćenje i zamjenu
                            opreme, preporučuje se redovito za pravilno funkcioniranje i
                            užitak korištenja bazena.
                        </p>
                    </div>
                </article>
                <article class="o-ponudi-accordion">
                    <div class="accordion" id="accordion-btn">
                        <img src="/wp-content/themes/galac/src/assets/icons/vodoinstalacije-icon.png" alt=""
                            class="accordion__icon" />
                        <h3 class="accordion-heading">Izrada sauna po mjeri</h3>
                        <button class="accordion-btn">
                            <img src="/wp-content/themes/galac/src/assets/icons/accordion-plus-icon.svg"
                                alt="accordion plus icon" id="accordion-icon" />
                        </button>
                    </div>
                    <div class="accordion-content" data-active="false">
                        <p>
                            Bazeni mogu biti betonski, poliesterski, keramički ili
                            polipropilenski s preljevom ili skimerom. Oprema uključuje
                            filter, pumpu, mlaznice i skimer. Automatike održavaju vodu s
                            klorom i kiselinom.
                        </p>
                        <br />
                        <p>
                            <strong>Projektiranje</strong> obuhvaća odabir estetske
                            opreme. Redovito održavanje, čišćenje i zamjena opreme
                            produžuju vijek trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Izgradnja</strong> obuhvaća odabir estetske opreme.
                            Redovito održavanje, čišćenje i zamjena opreme produžuju vijek
                            trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Montaža</strong> opreme odvija se tijekom gradnje.
                            <strong>Održavanje</strong>, uključujući čišćenje i zamjenu
                            opreme, preporučuje se redovito za pravilno funkcioniranje i
                            užitak korištenja bazena.
                        </p>
                    </div>
                </article>
                <article class="o-ponudi-accordion">
                    <div class="accordion" id="accordion-btn">
                        <img src="/wp-content/themes/galac/src/assets/icons/sauna-icon.png" alt=""
                            class="accordion__icon" />
                        <h3 class="accordion-heading">Vodoinstalacije</h3>
                        <button class="accordion-btn">
                            <img src="/wp-content/themes/galac/src/assets/icons/accordion-plus-icon.svg"
                                alt="accordion plus icon" id="accordion-icon" />
                        </button>
                    </div>
                    <div class="accordion-content" data-active="false">
                        <p>
                            Bazeni mogu biti betonski, poliesterski, keramički ili
                            polipropilenski s preljevom ili skimerom. Oprema uključuje
                            filter, pumpu, mlaznice i skimer. Automatike održavaju vodu s
                            klorom i kiselinom.
                        </p>
                        <br />
                        <p>
                            <strong>Projektiranje</strong> obuhvaća odabir estetske
                            opreme. Redovito održavanje, čišćenje i zamjena opreme
                            produžuju vijek trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Izgradnja</strong> obuhvaća odabir estetske opreme.
                            Redovito održavanje, čišćenje i zamjena opreme produžuju vijek
                            trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Montaža</strong> opreme odvija se tijekom gradnje.
                            <strong>Održavanje</strong>, uključujući čišćenje i zamjenu
                            opreme, preporučuje se redovito za pravilno funkcioniranje i
                            užitak korištenja bazena.
                        </p>
                    </div>
                </article>
                <article class="o-ponudi-accordion">
                    <div class="accordion" id="accordion-btn">
                        <img src="/wp-content/themes/galac/src/assets/icons/klima-icon.png" alt=""
                            class="accordion__icon" />
                        <h3 class="accordion-heading">Klimatizacija</h3>
                        <button class="accordion-btn">
                            <img src="/wp-content/themes/galac/src/assets/icons/accordion-plus-icon.svg"
                                alt="accordion plus icon" id="accordion-icon" />
                        </button>
                    </div>
                    <div class="accordion-content" data-active="false">
                        <p>
                            Bazeni mogu biti betonski, poliesterski, keramički ili
                            polipropilenski s preljevom ili skimerom. Oprema uključuje
                            filter, pumpu, mlaznice i skimer. Automatike održavaju vodu s
                            klorom i kiselinom.
                        </p>
                        <br />
                        <p>
                            <strong>Projektiranje</strong> obuhvaća odabir estetske
                            opreme. Redovito održavanje, čišćenje i zamjena opreme
                            produžuju vijek trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Izgradnja</strong> obuhvaća odabir estetske opreme.
                            Redovito održavanje, čišćenje i zamjena opreme produžuju vijek
                            trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Montaža</strong> opreme odvija se tijekom gradnje.
                            <strong>Održavanje</strong>, uključujući čišćenje i zamjenu
                            opreme, preporučuje se redovito za pravilno funkcioniranje i
                            užitak korištenja bazena.
                        </p>
                    </div>
                </article>
                <article class="o-ponudi-accordion">
                    <div class="accordion" id="accordion-btn">
                        <img src="/wp-content/themes/galac/src/assets/icons/centralno-icon.png" alt=""
                            class="accordion__icon" />
                        <h3 class="accordion-heading">Solarno, centralno i podno grijanje</h3>
                        <button class="accordion-btn">
                            <img src="/wp-content/themes/galac/src/assets/icons/accordion-plus-icon.svg"
                                alt="accordion plus icon" id="accordion-icon" />
                        </button>
                    </div>
                    <div class="accordion-content" data-active="false">
                        <p>
                            Bazeni mogu biti betonski, poliesterski, keramički ili
                            polipropilenski s preljevom ili skimerom. Oprema uključuje
                            filter, pumpu, mlaznice i skimer. Automatike održavaju vodu s
                            klorom i kiselinom.
                        </p>
                        <br />
                        <p>
                            <strong>Projektiranje</strong> obuhvaća odabir estetske
                            opreme. Redovito održavanje, čišćenje i zamjena opreme
                            produžuju vijek trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Izgradnja</strong> obuhvaća odabir estetske opreme.
                            Redovito održavanje, čišćenje i zamjena opreme produžuju vijek
                            trajanja bazena.
                        </p>
                        <br />
                        <p>
                            <strong>Montaža</strong> opreme odvija se tijekom gradnje.
                            <strong>Održavanje</strong>, uključujući čišćenje i zamjenu
                            opreme, preporučuje se redovito za pravilno funkcioniranje i
                            užitak korištenja bazena.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- SLIDER SECTION -->
    <section class="slider-social-proof">
        <video loop autoplay muted playsinline class="social-proof-video"
            poster="/wp-content/themes/galac/src/assets/images/social-proof-poster-img.jpg">
            <source src="/wp-content/themes/galac/src/assets/social-proof-video.mp4" type="video/mp4" />
        </video>
        <div class="container">
            <h2 class="h2-heading h2-heading--center">
                oni nam vjeruju
            </h2>
            <div class="slider-social-proof__wrapper">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nisi omnis repudiandae qui perspiciatis, iusto soluta
                                    cupiditate, sed illum magni nam repellat distinctio
                                    voluptates doloribus quos porro!
                                </p>
                                <h3>Prvi čovjek</h3>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Laboriosam, quibusdam. Odit voluptates nisi quis
                                    numquam vitae incidunt itaque, rem laborum?
                                </p>
                                <h3>Drugi čovjek</h3>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Accusantium voluptatum enim quae commodi inventore
                                    animi.
                                </p>
                                <h3>Treći čovjek</h3>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Accusantium voluptatum enim quae commodi inventore
                                    animi.
                                </p>
                                <h3>Četvrti čovjek</h3>
                            </div>
                        </li>
                    </div>
                </div>
    </section>
    <!-- GALERIJA SECTION -->
    <?php get_template_part('template-parts/content', 'galerija') ?>
    <!-- CONTACT SECTION -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>
<?php get_footer() ?>