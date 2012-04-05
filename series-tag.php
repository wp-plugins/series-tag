<?php
/*
  Plugin Name: Series Tag
  Plugin URI: http://www.nutt.net/tag/series-tag/
  Description: Shortcode to create a link between a series of posts all tagged with the same tag. 
  Version: 0.1
  Author: Ryan Nutt
  Author URI: http:/www.nutt.net
  License: GPL2
 */

/*  Copyright 2012 Ryan Nutt

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

add_shortcode('series-tag', 'stag_callback');

/**
 *  Callback function for the series-tag shortcode
 */
function stag_callback($atts, $content=null) {
    global $post; 
    
    $defaultValues = array(
        'tag' => '',
        'max' => 0,
        'divider' => 'ol'
    );
    
    $atts = array_merge($defaultValues, $atts); 
    
    if (empty($atts['tag'])) {
        return '<!-- Series Tag: No tag selected -->'; 
    }
    
    $args = array(
        'numberposts' => $atts['max'],
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'ASC',
        'post_status' => 'publish',
        'tag' => $atts['tag']
    );
    
    $posts = get_posts($args);
    
    if (empty($posts)) {
        return ''; 
    }
    
    $out = ''; 
    
    if ($atts['divider'] == 'ul') {
        $out .= '<ul>';
        $div = 'li'; 
    }
    else if ($atts['divider'] == 'ol') {
        $out .= '<ol>'; 
        $div = 'li';
    }
    else {
        $div = $atts['divider'];
    }
    foreach ($posts as $p) {
        $out .= '<'.$div.' class="'.(($p->ID==$post->ID) ? 'st_current' : 'st_other').'">';
        if ($p->ID == $post->ID) {
            $out .= $p->post_title; 
        }
        else {
            $out .= '<a href="'.get_permalink($p->ID).'">'.$p->post_title.'</a>'; 
        }
        $out .= '</'.$div.'>'; 
    }
    if ($atts['divider'] == 'ul') {
        $out .= '</ul>';
    }
    else if ($atts['divider'] == 'ol') {
        $out .= '</ol>'; 
    }
    return $out; 
    
}
?>