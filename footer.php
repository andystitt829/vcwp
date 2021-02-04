<footer class="bg-secondary container-fluid mt-4 py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'footer-column-1',
                        'depth'             => 1,
                        'container'         => 'div',
                        'menu_class'        => 'nav navbar-nav',
                    ) );
                ?>
            </div>
            <div class="col-md-4">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'footer-column-2',
                        'depth'             => 1,
                        'container'         => 'div',
                        'menu_class'        => 'nav navbar-nav',
                    ) );
                ?>
            </div>
            <div class="col-md-4">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'footer-column-1',
                        'depth'             => 1,
                        'container'         => 'div',
                        'menu_class'        => 'nav navbar-nav',
                    ) );
                ?>
            </div>
        </div>
    </div>
</footer>