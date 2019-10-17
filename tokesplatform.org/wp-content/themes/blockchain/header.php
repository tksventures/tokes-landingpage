<?php
//use blockchain\inc\NavWalker;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?= get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:400,600" rel="stylesheet">
    <title>Tokes Platform | Main page</title>
    <?php wp_head(); ?>

  <PageMap>
    <DataObject type="thumbnail">
      <Attribute name="src" value="https://tokesplatform.org/wp-content/themes/blockchain/images/how-to-use/illustration-1.jpg"/>
      <Attribute name="width" value="404"/>
      <Attribute name="height" value="472"/>
    </DataObject>
  </PageMap>

</head>
<body <?= body_class(); ?>>
<script>
    var svgArray = [
        '<?= get_template_directory_uri(); ?>/svgmin/sprite_icons.svg'
    ];
</script>
<div class="svgSprite"></div>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__left"><a class="header__burger js-mobile-menu-toggle" href="#"></a>
                <div class="header__logo"><a href="<?= get_home_url(); ?>">
                        <svg class="svgSymb svgSymb-sprite_logo">
                            <use xlink:href="#sprite_logo"></use>
                        </svg></a></div>
            </div>
            <div class="header__right">
                <div class="header__menu">
                    <?php
                    $mainMenu = wp_get_nav_menu_items('MainMenu');
                    foreach($mainMenu as $menuItem) {
                        if(!$menuItem->menu_item_parent) {
                        $children = get_nav_menu_item_children( $menuItem->ID, $mainMenu );
                        ?>
                        <div class="header__menu-item <?php if($children) { echo "header__menu-item--parent"; } ?>">
                            <a href="<?= $menuItem->url; ?>">
                                <?= $menuItem->title; ?>
                            </a>
                            <?php
                            if ( $children ) { ?>
                                <div class="header__menu-submenu">
                                    <div class="header__menu-submenu-list">
                                        <?php foreach($children as $child) { ?>
                                        <div class="header__menu-item">
                                            <a href="<?= $child->url; ?>">
                                                <?= $child->title; ?>
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    <?php } } ?>
                </div>
                <div class="header__actions">
                    <a class="header__actions-item btn btn--link btn--link-white" href="http://gateway.tokesplatform.org" target="_blank">
                        Login
                    </a>
                    <a class="header__actions-item btn btn--blue" href="#" data-toggle="modal" data-target="#modal-subscribe">
                        Subscribe
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="wrapper">
    <div class="wrapper__inner">
        <div class="wrapper__content">