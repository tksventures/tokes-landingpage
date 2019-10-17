<div class="logos logos-press">
    <div class="container">
        <div class="section-header section-header--center before-animation">
            <h3 class="heading heading--xs heading--fw400">Press</h3>
        </div>
        <div class="logos__list">
            <?php foreach(get_post_items(9) as $postItem) : $thumbnail = get_the_post_thumbnail_url($postItem, 'full'); ?>
            <div class="logos__list-item before-animation">
                <a href="<?= get_post_meta($postItem->ID, "link", true) ?>" target="_blank">
                    <img src="<?= $thumbnail ?>" data-at2x="<?= wr2x_get_retina_from_url($thumbnail) ?>" data-retina="data-retina" alt=""/>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>