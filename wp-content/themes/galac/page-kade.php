<?php get_header() ?>

<main class="main main-kategorije header-padding">
    <div class="upper-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo site_url() ?>" class="breadcrumb-link">Početna</a>
                <img src="/wp-content/themes/galac/src/assets/icons/breadcrumb-arrow-icon.svg" alt="arrow right" />
                <span class="breadcrumb-link breadcrumb-link--active">Kade</span>
            </div>
            <h1 class="category-heading"><?php the_title() ?></h1>
        </div>
    </div>
    <section class="kategorije">
        <div class="container">
            <div class="kategorije__wrapper">
                <div class="kategorije__boxes">
                    <?php
                $terms = get_terms( array(
                            'taxonomy'   => 'kade-kategorije', 
                            'hide_empty' => true, 
                    ));

                    foreach( $terms as $term ) {
?>
                    <a href="<?php echo get_term_link( $term ) ?>" class="kategorija-box">
                        <span class="kategorija-heading"><?php echo $term->name ?></span>
                    </a>
                    <?php      }
            ?>
                </div>
                <?php get_sidebar() ?>
            </div>
        </div>
    </section>
    <!-- GALERIJA SECTION -->
    <?php get_template_part('template-parts/content', 'galerija') ?>
    <!-- CONTACT SECTION -->
    <?php get_template_part('template-parts/content', 'contact') ?>
</main>

<?php get_footer() ?>