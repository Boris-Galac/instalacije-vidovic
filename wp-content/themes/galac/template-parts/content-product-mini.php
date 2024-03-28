<article class="mini-product">
    <div class="mini-product__wrapper">
        <figure class="mini-product__img-wrapper">
            <a href="<?php the_permalink() ?>">
                <?php if(has_post_thumbnail()){ ?>
                <img src="<?php the_post_thumbnail_url();  ?>" alt="thumbnail image" class="najava__img">
                <?php }else{ ?>
                <img src="/wp-content/themes/galac/src/assets/images/product-image.jpg" alt="default generic image">
                <?php
                        } ?>
        </figure>
        <div class="mini-product__footer">
            <div class="mini-product__row">
                <div class="mini-product__row-header">
                    <h3 class="mini-product__heading">Proizvod:</h3>
                </div>
                <div class="mini-product__row-footer">
                    <h3><?php the_title() ?></h3>
                </div>
            </div>
            <div class="mini-product__row">
                <div class="mini-product__row-header">
                    <h3 class="mini-product__heading">Dostupnost:</h3>
                </div>
                <div class="mini-product__row-footer">
                    <div class="product__availability">
                        Na zalihi <img src="/wp-content/themes/galac/src/assets/icons/check-product-icon.svg"
                            alt="product check icon">
                    </div>
                </div>
            </div>
            <div class="mini-product__row mini-product__row--last-row">
                <a class="pogledaj-proizvod-btn" href="<?php the_permalink() ?>">Vidi više <img
                        src="/wp-content/themes/galac/src/assets/icons/proizvod-arrow-right-icon.svg" alt="arrow"></a>
            </div>
        </div>
    </div>
</article>