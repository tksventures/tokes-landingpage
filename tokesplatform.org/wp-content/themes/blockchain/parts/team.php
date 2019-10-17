<div class="team" id="our-team">
    <div class="container">
    <div class="team__list">
        <div class="section-header section-header--center">
            <h3 class="heading heading--md heading--white">Our Team</h3>
        </div>
        <div class="team__list-inner">
            <?php foreach(get_post_items(5) as $postItem) : ?>
            <div class="team__item before-animation">
                <div class="team__item-photo-wrapper">
                    <svg class="svgSymb svgSymb-sprite_team-photo-outside">
                        <use xlink:href="#sprite_team-photo-outside"></use>
                    </svg>
                    <div class="team__item-photo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 180.969 205">
                            <clippath id="cut-off-bottom">
                                <path fill="black" d="M97.355 203.16l76.73-44.38a13.808 13.808 0 0 0 6.871-11.92V58.12a13.8 13.8 0 0 0-6.871-11.92L97.355 1.83a13.763 13.763 0 0 0-13.741 0L6.879 46.2a13.8 13.8 0 0 0-6.87 11.92v88.74a13.815 13.815 0 0 0 6.87 11.92l76.735 44.38a13.763 13.763 0 0 0 13.741 0z"></path>
                            </clippath>
                            <image width="181" height="205" xlink:href="<?= get_the_post_thumbnail_url($postItem, 'full') ?>" clip-path="url(#cut-off-bottom)"></image>
                        </svg>
                    </div>
                </div>
                <div class="team__item-contacts"><a href="<?= get_post_meta($postItem->ID, "twitter_link", true) ?>" target="_blank">
                        <svg class="svgSymb svgSymb-sprite_social-twitter">
                            <use xlink:href="#sprite_social-twitter"></use>
                        </svg></a><a href="<?= get_post_meta($postItem->ID, "linkedin_link", true) ?>" target="_blank">
                        <svg class="svgSymb svgSymb-sprite_social-linkedin">
                            <use xlink:href="#sprite_social-linkedin"></use>
                        </svg></a>
                </div>
                <div class="team__item-name"><?= get_the_title($postItem->ID); ?></div>
                <div class="team__item-position">
                    <?= get_post_meta($postItem->ID, "position", true) ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="team-info">
        <div class="section-header section-header--center before-animation">
            <h3 class="heading heading--white">
                <?= category_description(6); ?>
            </h3>
        </div>
        <div class="team-info__list">
            <?php foreach(get_post_items(6) as $postItem) : ?>
            <div class="team-info__item before-animation">
                <div class="team-info__item-icon">
                    <svg class="svgSymb svgSymb-<?= get_post_meta($postItem->ID, "svg_icon_link", true) ?>">
                        <use xlink:href="#<?= get_post_meta($postItem->ID, "svg_icon_link", true) ?>"></use>
                    </svg>
                </div>
                <div class="team-info__item-count">
                    <?= $postItem->post_content; ?>
                </div>
                <div class="team-info__item-desc">
                    <?= get_the_title($postItem->ID); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>