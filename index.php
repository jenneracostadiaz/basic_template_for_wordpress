<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        ?>
        <div class="contenedor">
            <?php 
                the_title( '<h1>', '</h1>' ); 
                the_content();
            ?>
        </div>
        <?php
    endwhile;
else :
    _e( 'Disulpa, no encontramos lo que estás buscando...', 'treseca' );
endif;
 
get_footer();
?>