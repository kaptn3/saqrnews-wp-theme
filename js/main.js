var menu = new Vue({
  el: '.header',
  data() {
    return {
      isShowMenu: false
    };
  },
  methods: {
    showMenu() {
      this.isShowMenu = !this.isShowMenu;
    }
  }
});

var wrapper = new Vue({
  el: '.wrapper'
});