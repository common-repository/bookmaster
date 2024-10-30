<?php
/*
Plugin Name: BookMaster
Plugin URI: https://doc4design.com/bookmaster/
Description: Display the link category titles without the links
Version: 1.4
Requires at least: 2.7
Author: Doc4
Author URI: https://doc4design.com
License: GPL v2.0 or later
License URL: https://www.gnu.org/licenses/gpl-2.0.html
*/

/******************************************************************************

Copyright 2008 - 2024  Doc4 : info@doc4design.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
The license is also available at https://www.gnu.org/licenses/gpl-2.0.html

*********************************************************************************/

function wp_list_bookmaster($args = '') {
    $defaults = array(
        'orderby' => 'name', 'order' => 'ASC',
        'limit' => -1, 'category' => '', 'exclude_category' => '',
        'category_name' => '', 'hide_invisible' => 1,
        'show_updated' => 0, 'echo' => 1,
        'categorize' => 1, 'title_li' => __('Bookmarks'),
        'title_before' => '', 'title_after' => '',
        'category_orderby' => 'name', 'category_order' => 'ASC',
        'class' => 'linkcat', 'category_before' => '',
        'category_after' => ''
    );


    $r = wp_parse_args( $args, $defaults );
    extract( $r, EXTR_SKIP );

    $output = '';

    if ( $categorize ) {
        //Split the bookmarks into ul's for each category
        $cats = get_terms('link_category', array('name__like' => $category_name, 'include' => $category, 'exclude' => $exclude_category, 'orderby' => $category_orderby, 'order' => $category_order, 'hierarchical' => 0));

        foreach ( (array) $cats as $cat ) {
            $params = array_merge($r, array('category'=>$cat->term_id));
            $bookmarks = get_bookmarks($params);
            if ( empty($bookmarks) )
                continue;
            $output .= str_replace(array('%id', '%class'), array("linkcat-$cat->term_id", $class), $category_before);
            $catname = apply_filters( "link_category", $cat->name );
            $output .= "$title_before$catname$title_after\n\t";
        }
    }

    $output = apply_filters( 'wp_list_bookmaster', $output );

    if ( !$echo )
        return $output;
    echo $output;
}

?>
