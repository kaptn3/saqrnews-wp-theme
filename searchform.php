<div class="header__search">
  <button
    class="search-form__submit">
      <i class="fas fa-search"></i>
  </button>
  <form
    role="search"
    method="get"
    action="<?php echo home_url( '/' ); ?>"
    class="search-form">
    <input type="search" class="search-form__input" value="<?php echo get_search_query() ?>" name="s">
  </form>
</div>