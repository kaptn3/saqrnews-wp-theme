<?php get_header(); ?>

<div class="wrapper">

       <div class="horoscopes">
        <?php
        $zodiacs = ['برج الحمل', 'برج الثور', 'برج الجوزاء', 'برج السرطان', 'برج الاسد', 'برج العذراء', 'برج الميزان', 'برج العقرب', 'برج القوس', 'برج الجدي', 'برج الدلو', 'برج الحوت'];
        if ( isset( $_GET['zodiac'] ) ) {
        ?>
            <nav>
                <ul class="horoscopes__tabs">
                    <li class="horoscopes__item"><a onclick="openPeriod('daily')">Daily</a></li>
                    <li class="horoscopes__item"><a onclick="openPeriod('monthly')">Monthly</a></li>
                    <li class="horoscopes__item"><a onclick="openPeriod('yearly')">Yearly</a></li>
                </ul>
            </nav>
            <?php
            $zodiac = $_GET['zodiac'];
            $period = [ 'daily', 'monthly', 'yearly' ];
            for ($i = 0; $i < 3; $i++) {
                $current_period = $period[ $i ];
                echo "<div class='period-block period-$current_period'>".PHP_EOL;
                $site = 'http://www.elabraj.net/ar/horoscope/';
                $url = $site . $current_period . '/' . $zodiac;
                $content = file_get_contents( $url );

                if ( $i === 0) {
                    $first_step = explode( '<div class="horoscope-daily-text">' , $content );
                    $second_step = explode( "</div>" , $first_step[4] );
                } else {
                    $first_step = explode( '<div class="horoscope-content-body">', $content );
                    $second_step = explode( "</div>" , $first_step[1] );
                }
                
                print_r( $second_step[0] );

                echo '</div>';
            }
        } else {
        ?>
        <ul class="horoscopes__list">
            <?php 
            for ($i = 0; $i < 12; $i++) {
            ?>
                <li class="horoscopes__list-item">
                    <?php 
                    echo '<a href="' . '?zodiac=' . ( $i + 1 ) . '">';
                    echo '<img src="' . get_bloginfo( 'template_directory' ) . '/img/horoscope/' . $i . '.svg">';
                    echo '<h3 class="horoscopes__list-title">' . $zodiacs[$i] . '</h3>';
                    echo '</a>';?>
                </li>
            <?php }
            ?>
        </ul>
        <?php } ?>
    </div><!-- end horoscope block -->
</div><!-- end wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>