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

var social = new Vue({
  el: '.footer__social-list',
  data() {
    return {
      socials: [
        { name: 'snapchat', icon: 'fa-snapchat', link: '#' },
        { name: 'telegram', icon: 'fa-telegram-plane', link: '#' },
        { name: 'twitter', icon: 'fa-twitter', link: '#' },
        { name: 'instagram', icon: 'fa-instagram', link: '#' },
        { name: 'facebook', icon: 'fa-facebook-f', link: '#' }
      ] 
    };
  }
});