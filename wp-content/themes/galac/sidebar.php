<aside class="sidebar">
    <?php get_search_form() ?>
    <h3 class="aside-category-heading">Kategorije</h3>
    <ul class="aside__list">
        <li class="aside__item">
            <a href="<?php echo site_url('bazen') ?>" class="aside__link">Bazeni</a>
            <span>
                <?php
                            $taxonomy = 'bazeni-kategorije';
                            $term_count = wp_count_terms($taxonomy);
                            echo "(" . $term_count .")";
                ?>
            </span>
        </li>
        <li class="aside__item">
            <a href="<?php echo site_url('kade') ?>" class="aside__link">Hidromasažne kade</a>
            <span>
                <?php
                            $taxonomy = 'kade-kategorije';
                            $term_count = wp_count_terms($taxonomy);
                            echo "(" . $term_count .")";
                ?>
            </span>
        </li>
        <li class="aside__item">
            <a href="<?php echo site_url('saune') ?>" class="aside__link">Saune</a>
            <span>
                <?php
                            $taxonomy = 'saune-kategorije';
                            $term_count = wp_count_terms($taxonomy);
                            echo "(" . $term_count .")";
                ?>
            </span>
        </li>
    </ul>
</aside>