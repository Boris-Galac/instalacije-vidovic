<form method="get" role="search" class="aside-search" action="<?php echo esc_url(home_url('/')) ?>">
    <input class="aside__search-input" type="search" id="s" name="s" aria-label="search"
        value="<?php echo get_search_query(); ?>" placeholder="Pretraži proizvode..." required />
    <button type="submit" aria-label="Submit search">
        <img src="/wp-content/themes/galac/src/assets/icons/search-icon.svg" alt="search icon"
            class="icon aside-search-icon" />
    </button>
</form>