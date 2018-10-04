<?php
    if ( ( isset( $_GET['zodiac'] ) ) && ( isset( $_GET['zodiac'] ) ) ) {
        $zodiac = $_GET['zodiac'];
        $period = $_GET['period'];
        $site = 'http://www.elabraj.net/ar/horoscope/';
        $url = $site . $period . '/' . $zodiac;
        $content = file_get_contents( $url );

        if ( $period === 'daily') {
            $first_step = explode( '<div class="horoscope-daily-text">' , $content );
            $second_step = explode( "</div>" , $first_step[4] );
        } else {
            $first_step = explode( '<div class="horoscope-content-body">', $content );
            $second_step = explode( "</div>" , $first_step[1] );
        }
        
        print_r( $second_step[0] );
    } else {
    ?>
    <div class="horoscopes">
        <?php 
        for ($i = 1; $i < 12; $i++) { 
            echo '<a href="' . '?period=daily&zodiac=' . $i . '">Text</a>';  
        }
        ?>
    </div>
<?php } ?>