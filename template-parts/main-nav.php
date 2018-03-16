<div class="slide-menu-wrapper">
        <span class="offcanvas-menu-close">
            <i class="icofont icofont-close-line"></i>
        </span>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'menu_id' => 'Primary',
            // 'menu-class' => 'menu',
        ));
        ?>
</div>
<div class="off-canvas-overlay"></div>