<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladislav
 * Date: 5/2/18
 * Time: 1:07 PM
 */

namespace blockchain\inc;

class MobileNavWalker extends \Walker_Nav_Menu
{
    /**
     * @inheritdoc
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
    {

        $output .= '<li class="header__mobile-menu-nav-item">'
            . '<a class="header__mobile-menu-nav-link" href="' . $item->url . '">'
            . $item->title
            . '</a>';
    }
}

