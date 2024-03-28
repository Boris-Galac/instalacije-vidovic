<?php get_header() ?>
<main class="main main-proizvod header-padding">
    <div class="upper-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-link">Početna</a>
                <img src="/wp-content/themes/galac/src/assets/icons/breadcrumb-arrow-icon.svg" alt="arrow right" />
                <span class="breadcrumb-link breadcrumb-link--active"><?php 
                ?></span>
            </div>
            <h1 class="category-heading"><?php the_title() ?></h1>
        </div>
    </div>
    <section class="proizvod">
        <div class="container">
            <div class="proizvod__wrapper">
                <div class="products__wrapper">
                    <?php  
            if(have_posts()){
                while ( have_posts() ) {
                    the_post();
                             get_template_part('template-parts/content', 'product');
                    } wp_reset_postdata(); ?>
                    <?php } ?>
                </div>
                <?php get_sidebar() ?>
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