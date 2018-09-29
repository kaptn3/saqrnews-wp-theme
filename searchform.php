<div class="header__search">
  <transition name="fade">
    <form
      v-if="isShowSearch"
      role="search"
      method="get"
      action="<?php echo home_url( '/' ); ?>"
      class="search-form">
      <input type="search" class="search-form__input" value="<?php echo get_search_query() ?>" name="s">
    </form>
  </transition>
  <button
    class="search-form__submit"
    @click="showSearchForm">
      <i class="fas fa-search"></i>
  </button>
</div>