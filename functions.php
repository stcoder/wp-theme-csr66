<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */
register_sidebar(array(
    'name'          => 'Телефон',
    'id'            => 'header-contact-telephone-widget-area',
    'description'   => 'Телефон',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
));

register_sidebar(array(
    'name'          => 'Карта проезда',
    'id'            => 'header-contact-map-widget-area',
    'description'   => 'Ссылка на карту проезда',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
));

register_sidebar(array(
    'name'          => 'Копирайт компании',
    'id'            => 'footer-copyright-widget-area',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
));

register_nav_menu('primary', 'Меню заголовка сайта');

register_nav_menu('page-tab-menu', 'Меню на странице "наши работы"');

add_theme_support('post-formats', array('image'));

add_theme_support('post-thumbnails');