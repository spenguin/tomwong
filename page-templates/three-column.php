<?php
/**
 * Template Name: Three Column Template
 */
?>
<?php
get_header(); ?>
<h1><?php the_title(); ?></h1>
    <div class="three-column-wrapper max-wrapper tiles">
        <?php the_content(); ?>
    </div>
<?php
    get_template_part( 'nav', 'below' );
    get_footer();