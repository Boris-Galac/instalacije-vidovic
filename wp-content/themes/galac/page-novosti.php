<?php get_header() ?>
<main class="main main-proizvod header-padding">
    <div class="upper-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo site_url() ?>" class="breadcrumb-link">Početna</a>
                <img src="/wp-content/themes/galac/src/assets/icons/breadcrumb-arrow-icon.svg" alt="arrow right" />
                <span class="breadcrumb-link breadcrumb-link--active"><?php the_title() ?></span>
            </div>
            <h1 class="category-heading"><?php the_title() ?></h1>
        </div>
    </div>
    <section class="proizvod">
        <div class="container">
            <div class="novosti__wrapper">
                <?php
// Query posts from the category "novosti"
$args = array(
    'category_name' => 'novosti',
    'posts_per_page' => -1 // Retrieve all posts in the category
);

$novosti_posts = new WP_Query($args);

if ($novosti_posts->have_posts()) {
    while ($novosti_posts->have_posts()) {
        $novosti_posts->the_post();
        get_template_part('template-parts/content', 'novosti-card');
    }
    wp_reset_postdata();
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