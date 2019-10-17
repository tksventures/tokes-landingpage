</div>
<footer class="footer">
    <div class="container">
        <div class="footer__social">
            <div class="social-bar">
                <div class="social-bar__title">Follow us:</div>
                <div class="social-bar__list">
                    <a class="social-bar__item--facebook social-bar__item" href="<?php echo get_theme_setting("facebook"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-facebook">
                            <use xlink:href="#sprite_social-facebook"></use>
                        </svg>
                    </a>
                    <a class="social-bar__item--twitter social-bar__item" href="<?php echo get_theme_setting("twitter"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-twitter">
                            <use xlink:href="#sprite_social-twitter"></use>
                        </svg>
                    </a>
                    <a class="social-bar__item--youtube social-bar__item" href="<?php echo get_theme_setting("youtube"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-youtube">
                            <use xlink:href="#sprite_social-youtube"></use>
                        </svg>
                    </a>
                    <a class="social-bar__item--telegram social-bar__item" href="<?php echo get_theme_setting("telegram"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-telegram">
                            <use xlink:href="#sprite_social-telegram"></use>
                        </svg>
                    </a>
                    <a class="social-bar__item--discord social-bar__item" href="<?php echo get_theme_setting("discord"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-discord">
                            <use xlink:href="#sprite_social-discord"></use>
                        </svg>
                    </a>
                    <a class="social-bar__item--instagram social-bar__item" href="<?php echo get_theme_setting("instagram"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-instagram">
                            <use xlink:href="#sprite_social-instagram"></use>
                        </svg>
                    </a>
                    <a class="social-bar__item--reddit social-bar__item" href="<?php echo get_theme_setting("reddit"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-reddit">
                            <use xlink:href="#sprite_social-reddit"></use>
                        </svg>
                    </a>
					   <a class="social-bar__item--blockfolio social-bar__item" href="<?php echo get_theme_setting("blockfolio"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-blockfolio">
                            <use xlink:href="#sprite_social-blockfolio"></use>
                        </svg>
                    </a>
                   
                    <a class="social-bar__item--email social-bar__item" href="mailto:<?php echo get_theme_setting("email"); ?>">
                        <svg class="svgSymb svgSymb-sprite_social-email">
                            <use xlink:href="#sprite_social-email"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__menu">
            <?php
            $footerMenu = wp_get_nav_menu_items('FooterMenu');
            foreach($footerMenu as $menuItem) {
                ?>
                    <a class="footer__menu-item" href="<?= $menuItem->url; ?>">
                        <?= $menuItem->title; ?>
                    </a>
                <?php
            }
            ?>
        </div>
        <div class="footer__logo">
            <a href="<?= get_home_url(); ?>">
                <svg class="svgSymb svgSymb-sprite_logo-mini">
                    <use xlink:href="#sprite_logo-mini"></use>
                </svg>
            </a>
        </div>
    </div>
</footer>
</div>
</div>
<div class="mobile-menu">
    <div class="mobile-menu__inner">
        <div class="container">
            <div class="mobile-menu__actions">
                <div class="btn-group">
                    <a class="header__actions-item btn btn--link btn--link-white" href="http://gateway.tokesplatform.org" target="_blank">
                        Login
                    </a>
                    <a class="header__actions-item btn btn--blue" href="#" data-toggle="modal" data-target="#modal-subscribe">
                        Subscribe
                    </a>
                </div>
            </div>
            <div class="mobile-menu__list">
                <?php
                    $mobileMenu = wp_get_nav_menu_items('MainMenu');
                    foreach($mobileMenu as $menuItem) {
                        if(!$menuItem->menu_item_parent) {
                        $children = get_nav_menu_item_children( $menuItem->ID, $mobileMenu );
                ?>
                <div class="mobile-menu__list-item <?php if($children) { echo "mobile-menu__list-item--parent"; } ?>">
                    <a href="<?= $menuItem->url; ?>">
                        <?= $menuItem->title; ?>
                    </a>
                    <?php
                    if ( $children ) { ?>
                        <div class="mobile-menu__list">
                            <?php foreach($children as $child) { ?>
                                <div class="mobile-menu__list-item">
                                    <a href="<?= $child->url; ?>">
                                        <?= $child->title; ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal--subscribe" id="modal-subscribe">
    <div class="modal-dialog modal-dialog--sm">
        <div class="modal-content">
            <div class="modal-bg"></div>
            <div class="modal-content-inner">
                <button class="close" type="button" data-dismiss="modal">
                    <svg class="svgSymb svgSymb-sprite_close">
                        <use xlink:href="#sprite_close"></use>
                    </svg>
                </button>
                <div class="modal-header">
                    <h3 class="heading heading--xs">Subscribe now</h3>
                </div>
                <div class="modal-body">
                    <?= do_shortcode('[mc4wp_form id="388"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= get_template_directory_uri(); ?>/js/jquery-2.2.4.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri(); ?>/js/vendor.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri(); ?>/js/scripts.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>