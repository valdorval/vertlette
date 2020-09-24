<form class="search-form" action="<?php echo esc_url(home_url('/')) ?>">
     <input type="search" class="search-form__input" placeholder="Rechercher" name="s" value="<?php echo get_search_query(); ?>">

     <div class="search-form__loupe">
          <img src="<?php echo get_template_directory_uri(); ?>/img/loupe.svg" alt="Loupe">
     </div>
</form>