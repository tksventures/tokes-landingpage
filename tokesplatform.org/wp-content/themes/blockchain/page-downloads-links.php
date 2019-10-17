<?php /* Template Name: Downloads Links */ ?>

<?php get_header(); ?>

    <div class="lead lead--sm">
        <div class="container">
            <div class="lead__circles">
                <div class="lead__circles-item lead__circles-item--green lead__circles-item--1"></div>
                <div class="lead__circles-item lead__circles-item--green lead__circles-item--2"></div>
                <div class="lead__circles-item lead__circles-item--green lead__circles-item--3"></div>
                <div class="lead__circles-item lead__circles-item--green lead__circles-item--4"></div>
                <div class="lead__circles-item lead__circles-item--blue lead__circles-item--1"></div>
                <div class="lead__circles-item lead__circles-item--blue lead__circles-item--2"></div>
                <div class="lead__circles-item lead__circles-item--blue lead__circles-item--3"></div>
            </div>
            <div class="lead__lines">
                <svg class="svgSymb svgSymb-sprite_lead-main-lines">
                    <use xlink:href="#sprite_lead-main-lines"></use>
                </svg>
            </div>
            <div class="lead__row">
                <div class="lead__col">
                    <div class="lead__title">
                        <h3 class="heading heading--md heading--white">Downloads &amp; Links</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="downloads">
        <div class="container">
            <div class="section-header section-header--center">
                <h1 class="heading heading--md">Downloads</h1>
            </div>
            <div class="downloads__inner before-animation">
                <div class="downloads__left">
                    <div class="downloads__title">Mobile Wallets</div>
                    <div class="downloads__items">
                        <a class="downloads__item downloads__item--appStore" href="<?= get_theme_setting('app_store_link'); ?>">
                            <img src="<?= get_template_directory_uri(); ?>/images/svg/app-store.svg" alt="">
                        </a>
                        <a class="downloads__item downloads__item--playMarket" href="<?= get_theme_setting('google_play_link'); ?>">
                            <img src="<?= get_template_directory_uri(); ?>/images/svg/play-market.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="downloads__right">
                    <div class="downloads__title">Desktop Client (Waves Platform)</div>
                    <div class="downloads__items">
                        <a href="https://wavesplatform.com/" target="_blank">
                            <img src="<?= get_template_directory_uri(); ?>/images/partners/waves.png" data-at2x="<?= get_template_directory_uri(); ?>/images/partners/waves@2x.png" data-retina="data-retina">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="links">
        <div class="container">
            <div class="section-header section-header--center">
                <h3 class="heading heading--md">Useful links</h3>
            </div>
            <div class="links__inner">
                <?php foreach(get_post_items(12) as $postItem) : $thumbnail = get_the_post_thumbnail_url($postItem, 'full'); ?>
                <div class="links__item before-animation">
                    <div class="links__item-logo">
                        <div class="links__item-logo-inner">
                            <div class="links__item-logo-wrapper">
                                <a href=" <?= get_post_meta($postItem->ID, "link", true) ?>" target="_blank">
                                    <img src="<?= $thumbnail ?>" data-at2x="<?= wr2x_get_retina_from_url($thumbnail) ?>" data-retina alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="links__item-title"><?= get_the_title($postItem->ID); ?></div>
                    <?= $postItem->post_content; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="press">
        <div class="container">
            <div class="press__content">
                <div class="press__content-inner">
                    <div class="section-header section-header--center">
                        <h3 class="heading heading--md">Press</h3>
                    </div>
                    <p>
                        For media inquiries, please email:<br>
                        <a href="mailto:press@tokesplatform.org">
                            press@tokesplatform.org
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>