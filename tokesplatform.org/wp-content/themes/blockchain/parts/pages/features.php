<div class="features">
    <div class="container">
        <div class="section-header section-header--center">
            <h2 class="heading heading--md">Features</h2>
        </div>
        <?php
        $i=0;
        $positions = [1 => 'center', 2 => 'left', 3 => 'right'];
        $colors = [1 => 'violet', 2 => 'blue', 3 => 'violet-md'];
        foreach(get_post_items(14) as $postItem) {
            $i++;
            ?>
        <div class="features__item features__item--<?= $positions[$i]; ?> before-animation">
            <div class="features__item-icon">
                <img class="features__item-icon-waves" src="<?= get_template_directory_uri(); ?>/images/content-waves.png">
                <img class="features__item-icon-layer" src="<?= get_template_directory_uri(); ?>/images/svg/content-illustration-layer-<?= $colors[$i]; ?>.svg">
                <img class="features__item-icon-image" src="<?= get_the_post_thumbnail_url($postItem, 'full') ?>">
                <div class="features__item-index"><?= $i; ?></div>
            </div>
            <div class="features__item-content">
                <div class="features__item-content-inner">
                    <div class="section-header">
                        <h3 class="heading">
                            <?= get_the_title($postItem->ID); ?>
                        </h3>
                    </div>
                    <?= $postItem->post_content; ?>
                </div>
            </div>
            <div class="features__item-separator"></div>
        </div>
        <?php } ?>
    </div>
</div>