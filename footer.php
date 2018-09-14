    <footer class="footer">
      <div class="footer__social">
        <nav class="container">
          <ul class="footer__social-list">
            <li
              v-for="item in socials"
              class="footer__social-item">
              <a class="footer__social-link" :data-name="item.name" :href="item.link">
                <span class="footer__social-icon">
                  <i :class="'fab ' + item.icon"></i>
                </span>
                <span class="footer__social-name">{{ item.name }}</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="container">
        <nav class="footer__menu">
          <?php
          wp_nav_menu( array(
            'menu'            => 'footer', 
            'container'       => false, 
            'menu_class'      => 'footer__menu-list',
            'depth'           => 1
          ) ); 
          ?>
          <span class="footer__copyright">SaqrNews 2018 &copy;</span>
        </nav>
      </div>
    </footer>

  </div><!-- end app -->

  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
  
<?php wp_footer(); ?>
</body>
</html>