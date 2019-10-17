<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladislav
 * Date: 5/2/18
 * Time: 1:07 PM
 */

namespace blockchain\inc;

class NavWalker extends \Walker_Nav_Menu
{
	/**
	 * @inheritdoc
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
	{

		$output .= '<div class="header__menu-item">'
			. '<a href="' . $item->url . '">'
			. $item->title
			. '</a>'
            . '</div>';
	}
}

