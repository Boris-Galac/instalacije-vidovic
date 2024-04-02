<?php get_header() ?>
<main class="main main-home ">
    <!-- HERO SECTION -->
    <section class="hero">
        <img class="hero-overlay-img" src="/wp-content/themes/galac/src/assets/images/hero-img.jpg" aria-hidden="true">
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
                                    <span class="count" data-num="430">0</span>
                                    <span class="count__caption">+ projekata</span>
                                </div>
                                <div class="counter-box">
                                    <span class="count" data-num="18">0</span>
                                    <span class="count__caption">+ godina iskustva</span>
                                </div>
                                <div class="counter-box">
                                    <span class="count" data-num="430">0</span>
                                    <span class="count__caption">+ godina iskustva na istom polju</span>
                                </div>
                            </div>
                            <div class="contact-info">
                                <a class="contact-info__contact" href="tel:+385989274766"><img
                                        src="/wp-content/themes/galac/src/assets/icons/phone-icon.svg"
                                        alt="phone icon" />
                                    +385989274766</a>
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
                            <span class="count" data-num="430">0</span>
                            <span class="count__caption">+ projekata</span>
                        </div>
                        <div class="counter-box">
                            <span class="count" data-num="18">0</span>
                            <span class="count__caption">+ godina iskustva</span>
                        </div>
                        <div class="counter-box">
                            <span class="count" data-num="430">0</span>
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
                            Hidromasažne kade, nekada rezervirane za luksuzne hotele, a danas su postale popularne i u
                            privatnim i poslovnim prostorima. Nudimo različite modele kâda, te <strong>usluge ugradnje,
                                puštanja u rad, održavanja i servisiranja.</strong> Sada su postale standard u domovima,
                            pružajući svakodnevno opuštanje i predstavljaju vrijednu investiciju.
                        </p>
                    </div>
                </article>
                <article class="o-ponudi-accordion">
                    <div class="accordion" id="accordion-btn">
                        <img src="/wp-content/themes/galac/src/assets/icons/vodoinstalacije-icon.png" alt=""
                            class="accordion__icon" />
                        <h3 class="accordion-heading">Vodoinstalacije</h3>
                        <button class="accordion-btn">
                            <img src="/wp-content/themes/galac/src/assets/icons/accordion-plus-icon.svg"
                                alt="accordion plus icon" id="accordion-icon" />
                        </button>
                    </div>
                    <div class="accordion-content" data-active="false">
                        <p>
                            Izvođenje instalacija obuhvaća postavljanje nove vodovodne i kanalizacijske mreže,
                            rekonstrukciju postojeće mreže te montažu sanitarija. <strong>Brzo i profesionalno
                                ugrađujemo kade, tuš kade, kabine, kupaonski namještaj, slavine, sifone, ventile,
                                hidrofore i pumpe za vodu.</strong>
                        </p>
                        <br />
                        <p>
                            Preporučujemo kvalitetne proizvode, poput čeličnih pocinčanih i bakrenih cijevi, plastičnih
                            cijevi i sendvič cijevi s unutarnjim slojem aluminija. Pravilna ugradnja je ključna, posebno
                            jer se vodovodne instalacije često postavljaju ispod pločica. Nepravilna postavka može
                            rezultirati dodatnim troškovima poput razbijanja pločica i keramičarskih radova. Stoga je
                            važno posvetiti posebnu pažnju planiranju kako bi elementi bili estetski skriveni iza
                            uređaja i sanitarija.
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
                            Klima uređaji su sve popularniji zbog svoje sposobnosti da <strong>kontroliraju temperaturu,
                                pročišćavaju zrak</strong> i pružaju udobnost tijekom cijele godine. <strong>Inverterski
                                klima uređaji</strong> posebno su efikasni jer prilagođavaju svoju snagu prema
                            potrebama, što štedi energiju.
                            Važno je odabrati odgovarajući klima uređaj uzimajući u obzir faktore poput <strong>veličine
                                prostora, prioriteta grijanja ili hlađenja, izolacije i položaja objekta.</strong>
                        </p>
                        <br />
                        <p>
                            Redovno održavanje je ključno za optimalan rad. <strong>Čišćenje filtera</strong> je važno,
                            a <strong>biološke filtere</strong> treba zamijeniti ili ukloniti nakon godinu dana kako bi
                            se spriječilo nakupljanje bakterija.
                        </p><br>
                        <p>Klima uređaji su praktični i učinkoviti, ali treba paziti na <strong>ekološki
                                utjecaj</strong> te razmotriti ekološki prihvatljivije alternative.</p>
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
                            Solarno grijanje putem solarnih kolektora je sve traženiji oblik grijanja i pripreme tople
                            vode, posebno zbog povećanja cijena energenata. <strong>Stručna ugradnja solarnih
                                sistema</strong> ključna je za maksimalnu učinkovitost, a iskustvo s vodećim brandovima
                            jamči kvalitetu.
                        </p>
                        <br />
                        <p>
                            Korištenje <strong>solarne energije</strong> uz poticaje za ugradnju pruža trajnu uštedu i
                            pokazuje visoku ekološku svijest. Solarni kolektori omogućuju uštede do 30% na troškovima
                            grijanja i do 60% na troškovima za toplu vodu godišnje.
                        </p>
                        <br />
                        <p>
                            Solarni grijači vode, poput ravni/pločastih kolektora i vakuumskih cijevnih kolektora,
                            koriste sunčevu energiju za <strong>grijanje potrošne sanitarne vode</strong>. Solarno
                            centralno grijanje, potaknuto poticajima za obnovljive izvore energije, predstavlja
                            ekonomično rješenje za dugoročnu uštedu.
                        </p>
                        <br />
                        <p>
                            Podno grijanje, sustav u kojem voda kruži kroz cijevi ugrađene u tlo, nudi ugodan komfor i
                            <strong>ravnomjernu raspodjelu topline</strong> kroz prostor. Zahvaljujući velikoj grijaćoj
                            plohi, podno grijanje omogućuje uštedu energije i maksimalnu udobnost, često se preferira u
                            novogradnji zbog estetike i praktičnosti.
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
                                    Stručan i profesionalan tim stručnjaka uvijek na raspolaganju, svakako preporučujemo
                                    i radujemo se nastavku naše poslovne suradnje. Sretno i samo tako nastavite.
                                </p>
                                <h3>Autoškola Marušić</h3>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    Definitivno vrhunska ekipa koja zna svoj posao,od izrade projekta do realizacije.
                                    Bazen je napravljen prije 2 godine i sve je TOP.
                                    Za svaku pohvalu! 👌👌👌
                                </p>
                                <h3>Marko Milaković</h3>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    Odlično! Sve preporuke! 👏
                                </p>
                                <h3>Josip Burica</h3>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    Ekipa profesionalaca kakvu ćete rijetko gdje naći. Vidi se da ljudi vole svoj posao
                                    i rade ga s ljubavlju i uz motivaciju. Sve što rade detaljno isplaniraju i ništa ne
                                    prepuštaju slučaju. G. Vidović je ljudina, a djelatnicima svaka čast. Čista desetka
                                    i velika preporuka svima koji razmišljaju o bazenu, hidromasažnoj kadi,
                                    instalacijama i sl.
                                </p>
                                <h3>Adrian Andrejek</h3>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="proof">
                                <p>
                                    After successful cooperation with Instalacije Vidovic at Villa Celestial in
                                    Podstrana, I can truly confirm that this
                                    company is professional company and I would highly recommend them for any future
                                    projects when it comes pool construction or air conditioning installation.
                                </p>
                                <h3>Danijel Josipovic</h3>
                            </div>
                        </li>
                    </div>
                </div>
    </section>
    <!-- GALERIJA SECTION -->
    <?php get_template_part('template-parts/content', 'galerija') ?>
    <!-- BLOG SECTION -->
    <section class="novosti">
        <img class="novosti-overlay" src="/wp-content/themes/galac/src/assets/images/novosti-overlay-img.jpg"
            aria-hidden="true">
        <div class="container">
            <h2 class="h2-heading h2-heading--dark">Novosti</h2>
            <div class="novosti__inner-wrapper">
                <a class="novosti-btn" href="<?php echo site_url('novosti') ?>">Odi na novosti <img
                        src="/wp-content/themes/galac/src/assets/icons/novosti-arrow-icon.svg" aria-hidden="true"></a>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>
<?php get_footer() ?>