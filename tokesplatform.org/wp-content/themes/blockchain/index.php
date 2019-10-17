<?php get_header(); ?>
<div class="lead lead--main">
    <div class="container">
        <div class="lead__gradient-circles">
            <div class="lead__gradient-circle lead__gradient-circle--left"></div>
            <div class="lead__gradient-circle lead__gradient-circle--right"></div>
            <div class="lead__gradient-circle lead__gradient-circle--center"></div>
        </div>
        <div class="lead__circles">
            <div class="lead__circles-item lead__circles-item--green lead__circles-item--1"></div>
            <div class="lead__circles-item lead__circles-item--green lead__circles-item--2"></div>
            <div class="lead__circles-item lead__circles-item--green lead__circles-item--3"></div>
            <div class="lead__circles-item lead__circles-item--green lead__circles-item--4"></div>
            <div class="lead__circles-item lead__circles-item--blue lead__circles-item--1"></div>
            <div class="lead__circles-item lead__circles-item--blue lead__circles-item--2"></div>
            <div class="lead__circles-item lead__circles-item--blue lead__circles-item--3"></div>
        </div>
        <!--.lead__lines+icon('sprite_lead-main-lines')
              -->
        <div class="lead__row">
            <div class="lead__col lead__col--2side">
                <div class="lead__left">
                    <div class="lead__title">
                        <h3 class="heading heading--md heading--white">
                            <?= get_the_title(237); ?>
                        </h3>
                    </div>
                    <!--.lead__descp The Tokes Platform provides payment solutions and blockchain infrastructure for data provenance
                    -->
                    <div class="lead__actions">
                        <div class="btn-group btn-group--left btn-group--xxs-column">
                            <a class="btn btn--md btn--icon btn--white-transparent" href="<?= get_post_meta(237, "download_wallet", true) ?>">
                                download wallet
                            </a>
                            <a class="btn btn--md btn--green" href="<?= get_post_meta(237, "read_whitepaper", true) ?>">
                                Read Whitepaper
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lead__right">
                    <div class="lead__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 202.984 233.984">
                            <path id="" fill="none" stroke="#4a5f84" stroke-miterlimit="10" stroke-width="2" d="M101.469 35.161l71.648 41.366v82.732l-71.648 41.366-71.649-41.366V76.527l71.649-41.366zm71.648 124.098l-71.648-41.366-71.649 41.366m42.494-141.42v33.279l28.82 16.639 28.82-16.639V17.839L101.135 1.2 72.314 17.839zm0 .649l28.82 16.639 28.82-16.639m-28.819 16.639v32.711M1 59.65v33.278l28.82 16.64 28.82-16.64V59.65L29.82 43.01 1 59.65zm0 .648l28.82 16.64 28.82-16.64m-28.82 16.64v31.348m114.477-49.318v33.278l28.82 16.64 28.82-16.64V58.968l-28.82-16.64-28.82 16.64zm0 .649l28.82 16.64 28.82-16.64m-28.82 16.639v31.348M72.314 182.896v33.278l28.82 16.64 28.82-16.64v-33.278l-28.82-16.64-28.82 16.64zm0 .648l28.82 16.64 28.82-16.64m-28.819 16.64v32.029M72.314 100.572v33.278l28.82 16.64 28.82-16.64v-33.278l-28.82-16.64-28.82 16.64zm0 0l28.82 17.288 28.82-16.64m-28.819 16.64v32.03M1 141.54v33.279l28.82 16.64 28.82-16.64V141.54l-28.82-16.639L1 141.54zm0 .649l28.82 16.639 28.82-16.639m-28.82 16.639v32.03m114.477-48.636V175.5l28.82 16.64 28.82-16.64v-33.279l-28.82-16.639-28.82 16.64zm0 .649l28.82 16.639 28.82-16.639m-28.82 16.639v32.03"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 202.984 233.984">
                            <path id="pathLeadLine" fill="none" stroke="#4a5f84" stroke-miterlimit="10" stroke-width="2" d="M101.469 35.161l71.648 41.366v82.732l-71.648 41.366-71.649-41.366V76.527l71.649-41.366zm71.648 124.098l-71.648-41.366-71.649 41.366m42.494-141.42v33.279l28.82 16.639 28.82-16.639V17.839L101.135 1.2 72.314 17.839zm0 .649l28.82 16.639 28.82-16.639m-28.819 16.639v32.711M1 59.65v33.278l28.82 16.64 28.82-16.64V59.65L29.82 43.01 1 59.65zm0 .648l28.82 16.64 28.82-16.64m-28.82 16.64v31.348m114.477-49.318v33.278l28.82 16.64 28.82-16.64V58.968l-28.82-16.64-28.82 16.64zm0 .649l28.82 16.64 28.82-16.64m-28.82 16.639v31.348M72.314 182.896v33.278l28.82 16.64 28.82-16.64v-33.278l-28.82-16.64-28.82 16.64zm0 .648l28.82 16.64 28.82-16.64m-28.819 16.64v32.029M72.314 100.572v33.278l28.82 16.64 28.82-16.64v-33.278l-28.82-16.64-28.82 16.64zm0 0l28.82 17.288 28.82-16.64m-28.819 16.64v32.03M1 141.54v33.279l28.82 16.64 28.82-16.64V141.54l-28.82-16.639L1 141.54zm0 .649l28.82 16.639 28.82-16.639m-28.82 16.639v32.03m114.477-48.636V175.5l28.82 16.64 28.82-16.64v-33.279l-28.82-16.639-28.82 16.64zm0 .649l28.82 16.639 28.82-16.639m-28.82 16.639v32.03"></path>
                        </svg>
                        <div class="lead__icon-action" data-text="Watch Video">
                            <a class="js-show-video-frame" href="<?= get_post_meta(237, "watch_video", true) ?>">
                                <svg class="svgSymb svgSymb-sprite_play">
                                    <use xlink:href="#sprite_play"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part("parts/platform"); ?>
<?php get_template_part("parts/for-industry"); ?>
<?php get_template_part("parts/how-to-use"); ?>
<?php get_template_part("parts/team"); ?>
<?php get_template_part("parts/logos-partners"); ?>
<?php get_template_part("parts/roadmap"); ?>
<?php get_template_part("parts/logos-press"); ?>
<?php get_template_part("parts/become-a-part"); ?>
<?php get_footer(); ?>