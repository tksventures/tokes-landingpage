<div class="roadmap">
    <div class="roadmap__angle roadmap__angle--left-top"></div>
    <div class="roadmap__angle roadmap__angle--left-bottom"></div>
    <div class="roadmap__angle roadmap__angle--right-top"></div>
    <div class="roadmap__angle roadmap__angle--right-bottom"></div>
    <div class="container">
        <div class="section-header section-header--center">
            <h3 class="heading heading--md heading--white">Roadmap</h3>
        </div>
        <div class="roadmap__line">
            <?php
            $count = count(get_post_items(7));
            $i=0;
            foreach(get_post_items(7) as $postItem) {
            $i++;
            ?>
                <div class="roadmap__item  <?php if($i % 2 == 0 ) { echo "roadmap__item--revert"; } ?>">
                    <div class="roadmap__item-date">
                        <?= $postItem->post_content; ?>
                    </div>
                    <div class="roadmap__item-icon ">
                        <svg class="svgSymb svgSymb-sprite_roadmap-item">
                            <use xlink:href="#sprite_roadmap-item"></use>
                        </svg>
                    </div>
                    <div class="roadmap__item-desc">
                        <p><?= get_the_title($postItem->ID); ?></p>
                    </div>
                </div>
                <?php if($i != $count) : ?>
                    <div class="roadmap__separator"></div>
                <?php endif; ?>
            <?php } ?>
        </div>
    </div>
</div>