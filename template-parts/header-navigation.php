<?php/**
 * Navigation in Header
 */
?>
<?php if ( !(is_home() || is_front_page() ) ): ?>
    <div class="menu-primary-container">
        <?php echo wp_nav_menu(['menu'=>'Main Menu']); ?>
    </div>
<?php else: ?>
    <div class="menu-home-container">
        <?php echo wp_nav_menu(['menu'=>'Main Menu']); ?>
    </div>
<?php endif; ?>
<div class="menu-mobile-container">
    <div class="burger-container">
        <div id="burger">
            <div class="bar topBar"></div>
            <div class="bar btmBar"></div>
        </div>
    </div>
    <?php echo wp_nav_menu(['menu'=>'Main Menu']); ?>
</div>