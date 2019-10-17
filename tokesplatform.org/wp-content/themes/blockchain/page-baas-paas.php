<?php /* Template Name: Baas Paas */ ?>

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
    <div class="content content--baas-paas">
        <div class="container">
            <div class="content__section content__section--first before-animation">
                <div class="content__section-bg"><img src="<?= get_template_directory_uri(); ?>/images/content-waves.png"></div>
                <div class="section-header section-header--center">
                    <h1 class="heading heading--md"><?= get_post_meta(get_the_ID(), "top_title", true) ?></h1>
                </div>
                <div class="content__block content__block--center">
                    <h3 class="heading heading--sm heading--fw400">
                        <?= get_post_meta(get_the_ID(), "top_intro", true) ?>
                    </h3>
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
            <div class="content__section content__section--second before-animation">
                <div class="content__section-bg"><img src="<?= get_template_directory_uri(); ?>/images/content-waves.png"></div>
                <div class="content__section-icon"><img class="content__section-icon-layer" src="<?= get_template_directory_uri(); ?>/images/svg/content-illustration-layer-blue-sm.svg"><img class="content__section-icon-image" src="<?= get_template_directory_uri(); ?>/images/svg/baas-paas-illustration1-icon.svg"></div>
                <div class="content__block content__block--center">
                    <h3 class="heading heading--sm heading--fw400"><?= get_post_meta(get_the_ID(), "intro_2", true) ?></h3>
                </div>
                <div class="content__block content__block--2side">
                    <div class="content__block-left">
                        <?= get_post_meta(get_the_ID(), "content_3", true) ?>
                    </div>
                    <div class="content__block-right">
                        <?= get_post_meta(get_the_ID(), "content_4", true) ?>
                    </div>
                </div>
            </div>
            <div class="content__section content__section--third before-animation">
                <div class="content__section-bg"><img src="<?= get_template_directory_uri(); ?>/images/content-waves.png"></div>
                <div class="content__section-icon"><img class="content__section-icon-layer" src="<?= get_template_directory_uri(); ?>/images/svg/content-illustration-layer-violet.svg"><img class="content__section-icon-image" src="<?= get_template_directory_uri(); ?>/images/baas-paas/baas-paas-illustration2-icon.png"></div>
                <div class="section-header section-header--center">
                    <h2 class="heading"><?= get_post_meta(get_the_ID(), "intro_3", true) ?></h2>
                </div>
                <div class="content__block content__block--2side">
                    <div class="content__block-left">
                        <?= get_post_meta(get_the_ID(), "content_5", true) ?>
                    </div>
                    <div class="content__block-right">
                        <?= get_post_meta(get_the_ID(), "content_6", true) ?>
                    </div>
                </div>
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
                    <div class="btn-group"><a class="btn btn--lg btn--green" href="/apply-to-join/">Sign up</a></div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>