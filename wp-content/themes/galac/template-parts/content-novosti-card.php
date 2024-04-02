<article class="blog-card">
    <a href="<?php echo site_url('category/novosti') ?>">
        <figure class="blog-card__img-wrapper">
            <img src="/wp-content/themes/galac/src/assets/images/novost-img.jpg" alt="blog image">
        </figure>
    </a>
    <div class="blog-card__body">
        <h3 class="blog-card-heading"><?php the_title() ?></h3>
        <span class="date"><img class="icon" src="/wp-content/themes/galac/src/assets/icons/time-icon.svg"
                alt="time icon"><?php the_time('F j, Y') ?></span>
        <p class="blog-card-paragraph"><?php  echo wp_trim_words(get_the_content(), 25);  ?></p>
        <a href="<?php echo site_url('category/novosti') ?>">Pogledaj više</a>
    </div>
</article>