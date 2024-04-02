<?php get_header() ?>
<main class="main main-proizvod header-padding">
    <div class="upper-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo site_url() ?>" class="breadcrumb-link">Početna</a>
                <img src="/wp-content/themes/galac/src/assets/icons/breadcrumb-arrow-icon.svg" alt="arrow right" />
                <a href="<?php echo site_url('novosti') ?>" class="breadcrumb-link">Novosti</a>
                <img src="/wp-content/themes/galac/src/assets/icons/breadcrumb-arrow-icon.svg" alt="arrow right" />
                <span class="breadcrumb-link breadcrumb-link--active"><?php the_title() ?></span>
            </div>
            <h1 class="page-heading"><?php the_title() ?></h1>
        </div>
    </div>
    <section class="blog">
        <div class="container">
            <div class="single-blog__wrapper">
                <?php
           if(have_posts()){
           while( have_posts()){
               the_post();
           get_template_part('template-parts/content', 'single-novost');
           }
       }
                ?>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- GALERIJA SECTION -->
    <?php get_template_part('template-parts/content', 'galerija') ?>
    <!-- CONTACT SECTION -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>
<?php get_footer() ?>