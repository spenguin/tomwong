<?php
/**
 * Template Name: Two Column Template
 */
?>
<?php
get_header(); ?>
<h1><?php the_title(); ?></h1>
    <div class="two-column-wrapper max-wrapper">
        <?php the_content(); ?>
    </div>
<?php
    get_template_part( 'nav', 'below' );
    get_footer();