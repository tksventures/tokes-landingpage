<div class="for-industry">
    <div class="container">
        <div class="section-header section-header--center">
            <h3 class="heading heading--md heading--white">
                <?= category_description(15); ?>
            </h3>
        </div>
        <div class="for-industry__scheme">
            <div class="for-industry__scheme-grid">
                <svg class="svgSymb svgSymb-sprite_for-industry-grid">
                    <use xlink:href="#sprite_for-industry-grid"></use>
                </svg>
            </div>
            <div class="for-industry__scheme-connect-1">
                <svg class="svgSymb svgSymb-sprite_for-industry-connect-1">
                    <use xlink:href="#sprite_for-industry-connect-1"></use>
                </svg>
            </div>
            <div class="for-industry__scheme-connect-2">
                <svg class="svgSymb svgSymb-sprite_for-industry-connect-2">
                    <use xlink:href="#sprite_for-industry-connect-2"></use>
                </svg>
            </div>
            <div class="for-industry__scheme-inner">
                <?php $i=0; foreach(get_post_items(15) as $postItem) { $i++; ?>
                <div class="for-industry__scheme-item before-animation">
                    <?php if($i % 2 == 0) : ?>
                        <p><?= get_the_title($postItem->ID); ?></p>
                    <?php endif; ?>
                    <div class="for-industry__scheme-item-icon">
                        <svg class="svgSymb svgSymb-<?= get_post_meta($postItem->ID, "svg_icon_link", true) ?>">
                            <use xlink:href="#<?= get_post_meta($postItem->ID, "svg_icon_link", true) ?>"></use>
                        </svg>
                    </div>
                    <?php if($i % 2 != 0) : ?>
                        <p><?= get_the_title($postItem->ID); ?></p>
                    <?php endif; ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="for-industry__actions"><a class="btn btn--md btn--green" href="mailto:support@tokesplatform.org">Contact us</a></div>
    </div>
</div>