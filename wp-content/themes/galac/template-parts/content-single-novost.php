<article class="blog-card blog-card--single">
    <figure class="single-novost-img-wrapper">
        <img src="/wp-content/themes/galac/src/assets/images/novost-img.jpg" alt="blog thumbnail image" />
    </figure>
    <div class="blog-card__body single--novost">
        <div class="blog-card__body-upper">
            <h3 class="h3-heading blog-card-heading"><?php the_title() ?></h3>
            <div class="blog-card__meta-info">
                <div class="date">
                    <img src="/wp-content/themes/galac/src/assets/icons/time-icon.svg" class="icon"
                        alt="time icon" /><?php the_time('F j, Y') ?>
                </div>
            </div>
        </div>
        <div class="blog-card__body-lower">
            <?php the_content() ?>
        </div>
    </div>
</article>