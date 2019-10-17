<div class="become-a-part" id="become-a-part">
    <div class="become-a-part__circle become-a-part__circle--1"></div>
    <div class="become-a-part__circle become-a-part__circle--2"></div>
    <div class="become-a-part__circle become-a-part__circle--3"></div>
    <div class="become-a-part__circle become-a-part__circle--4"></div>
    <div class="become-a-part__circle become-a-part__circle--5"></div>
    <div class="container">
        <div class="become-a-part__header">
            <div class="section-header section-header--center">
                <h3 class="heading heading--white">Become part of our ecosystem</h3>
            </div>
        </div>
        <div class="become-a-part__actions">
            <div class="btn-group"><a class="btn btn--blue btn--md" href="mailto:support@tokesplatform.org">CONTACT US</a><a class="btn btn--green btn--md" href="/apply-to-join/">Apply Now </a></div>
        </div>
        <div class="become-a-part__faq">
            <div class="section-header section-header--center">
                <h3 class="heading heading--md">FAQ</h3>
            </div>
            <div class="collapsed-list">
                <?php foreach(get_post_items(10) as $postItem) : ?>
                <div class="collapsed-list__item">
                    <a class="collapsed-list__item-title" href="#">
                        <?= get_the_title($postItem->ID); ?>
                    </a>
                    <div class="collapsed-list__item-content">
                        <?= $postItem->post_content; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>