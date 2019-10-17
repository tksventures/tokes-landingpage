<div class="how-to-use" id="how-to-use">
    <div class="container">
        <div class="section-header section-header--center">
            <h2 class="heading heading--md">How to use Tokes</h2>
        </div>
        <div class="how-to-use__list">
            <?php $i=0; foreach(get_post_items(4) as $postItem) { $i++; ?>
            <div class="how-to-use__item before-animation">
                <div class="how-to-use__item-image how-to-use__item-image--<?= $i; ?>">
                    <img src="<?= get_the_post_thumbnail_url($postItem, 'full') ?>" data-at2x="<?= get_template_directory_uri(); ?>/images/how-to-use/illustration-<?= $i; ?>@2x.jpg" data-retina alt="">
                </div>
                <div class="how-to-use__item-content">
                    <div class="how-to-use__item-number how-to-use__item-number--blue"><span><?= $i; ?></span></div>
                    <h3 class="heading"><?= get_the_title($postItem->ID); ?></h3>
                    <?= $postItem->post_content; ?>
                    <?php if($i == 1) : ?>
                        <div class="how-to-use__item-download">
                            <a href="<?= get_theme_setting('app_store_link'); ?>">
                                <img src="<?= get_template_directory_uri(); ?>/images/svg/app-store.svg" alt="">
                            </a>
                            <a href="<?= get_theme_setting('google_play_link'); ?>">
                                <img src="<?= get_template_directory_uri(); ?>/images/svg/play-market.svg" alt="">
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if($i == 2) : ?>
                        <div class="how-to-use__item-actions"><a class="btn btn--md btn--green" href="https://exchange.tokesplatform.org/" target="_blank">Buy Tokes</a></div>
                    <?php endif; ?>
                    <?php if($i == 3) : ?>
                        <div class="how-to-use__item-actions"><a class="btn btn--md btn--green" href="http://gateway.tokesplatform.org" target="_blank">SIGN UP</a></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>