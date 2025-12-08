<?php
/**
 * Home page navigation
 */
?>
<?php if ( (is_home() || is_front_page() ) ): ?>
    <div class="menu-home-container">
        <?php echo wp_nav_menu(['menu'=>'Main Menu', 'menu_class'=>'menu max-wrapper']); ?>
    </div>
<?php endif; ?>