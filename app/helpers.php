<?php

/**
 * Theme helpers.
 */

function removeSpaces($text) {
    return str_replace(' ', '', $text);
}

function acf_link($link, $class = '', $default = 'Learn More', $echo = true)
{
    if (empty($link) && !is_array($link)) {
        return false;
    }

    $link_title = !empty($link['title']) ? $link['title'] : $default;

    $output = "<a ";
    $output .= !empty($class) ? "class='{$class}'" : null;
    $output .= "href='{$link['url']}'";
    $output .= !empty($link['target']) ? "target='_blank'" : null;
    $output .= ">{$link_title}</a>";

    if ($echo) {
        echo $output;
    } else {
        return $output;
    }
}

function admin_log($log, $name = '_')
{
    $date = new \DateTime();
    $date->setTimezone(new \DateTimeZone('Europe/Warsaw'));
    $log_time = $date->format('Y-m-d H:i:s');

    if (is_array($log)) {
        $log = http_build_query($log, '', ', ');
    }

    $log_msg =  $log_time . ' : ' . $log;
    $folder = dirname(__FILE__) . "/../../../logs/";

    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

    $log_file_data = $folder . '/log' . $name . date('d-M-Y') . '_' . date('h') . '.log';
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}

function placehold_img($size = '150x150', $format = 'png', $text_color = '#fff', $bg_color = '#6d6d6d', $text = false)
{
    $url = 'https://via.placeholder.com/' . $size . '.' . $format . '/' . $bg_color . '/' . $text_color ;
    if ($text) {
        $text = str_replace(' ', '+', $text);
        $url .= '?text=' . $text;
    }
    return $url;
}

function register_custom_post_type_realizacje() {  
    $labels = array(
        'name' => 'Realizacje',
        'singular_name' => 'Realizacja',
        'add_new' => 'Dodaj nową realizacje',
        'add_new_item' => 'Dodaj nową realizacje',
        'edit_item' => 'Edytuj realizacje',
        'new_item' => 'Nowa realizacja',
        'view_item' => 'Zobacz realizacje',
        'search_items' => 'Szukaj realizacji',
        'not_found' => 'Nie znaleziono realizacji',
        'not_found_in_trash' => 'Nie znaleziono realizacji w koszu'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-format-gallery',

    );

    register_post_type('realizacje', $args);
}
add_action('init', __NAMESPACE__ . '\\register_custom_post_type_realizacje');