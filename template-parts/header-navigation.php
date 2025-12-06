<?php/**
 * Navigation in Header
 */
?>
<?php if ( !(is_home() || is_front_page() ) ): ?>
    <div class="menu-primary-container">
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

<script>
    (function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.menu-mobile-container');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }
}());
</script>