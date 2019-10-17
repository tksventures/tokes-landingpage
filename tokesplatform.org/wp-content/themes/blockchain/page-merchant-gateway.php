<?php /* Template Name: Merchant Gateway */ ?>

<?php get_header(); the_post(); ?>

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
                        <h3 class="heading heading--md heading--white"><?php the_title(); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content content--merchant-gateway">
        <div class="container">
            <div class="content__section content__section--first before-animation">
                <div class="content__section-bg"><img src="<?= get_template_directory_uri(); ?>/images/content-waves.png"></div>
                <div class="section-header section-header--center">
                    <h1 class="heading heading--md">
                        <?= get_post_meta(get_the_ID(), "top_title", true) ?>
                    </h1>
                </div>
                <div class="content__block content__block--center">
                    <h3 class="heading heading--sm heading--fw400"><?= get_post_meta(get_the_ID(), "top_intro", true) ?></h3>
                </div>
                <div class="content__block content__block--2side">
                    <div class="content__block-left">
                        <?= get_post_meta(get_the_ID(), "content_1", true) ?>
                    </div>
                    <div class="content__block-right">
                        <?= get_post_meta(get_the_ID(), "content_2", true) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part("parts/pages/features"); ?>

    <div class="additional-functions before-animation">
        <div class="container">
            <div class="section-header section-header--center">
                <h3 class="heading">More awesome features</h3>
            </div>
            <div class="additional-functions__items">
                <?php $i=0; foreach(get_post_items(13) as $postItem) { $i++; ?>
                <div class="additional-functions__item <?php if($i==5) { echo 'additional-functions__item--wider'; } ?>">
                    <?php if(get_post_meta($postItem->ID, "upcoming_feature")) { ?>
                        <div class="additional-functions__item-label">upcoming feature</div>
                    <?php } ?>
                    <div class="additional-functions__item-left">
                        <div class="additional-functions__item-icon">
                            <svg class="svgSymb svgSymb-<?= get_post_meta($postItem->ID, "svg_icon_link", true) ?>">
                                <use xlink:href="#<?= get_post_meta($postItem->ID, "svg_icon_link", true) ?>"></use>
                            </svg>
                        </div>
                        <?php if($i==5) { ?>
                            <div class="additional-functions__item-title"><?= get_the_title($postItem->ID); ?></div>
                        <?php } ?>
                    </div>
                    <div class="additional-functions__item-right">
                        <?php if($i!=5) { ?>
                            <div class="additional-functions__item-title">
                                <?= get_the_title($postItem->ID); ?>
                            </div>
                        <?php }else{ ?>
                            <?= $postItem->post_content; ?>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="promo">
        <div class="container">
            <div class="promo__lines">
                <svg class="svgSymb svgSymb-sprite_lead-main-lines">
                    <use xlink:href="#sprite_lead-main-lines"></use>
                </svg>
            </div>
            <div class="promo__content">
                <div class="promo__content-inner">
                    <div class="section-header section-header--center">
                        <h3 class="heading heading--sm heading--fw400 heading--white">
                            <?= get_post_meta(get_the_ID(), "bottom", true) ?>
                        </h3>
                    </div>
                    <div class="btn-group"><a class="btn btn--lg btn--green" href="http://gateway.tokesplatform.org" target="_blank">Sign up</a></div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>