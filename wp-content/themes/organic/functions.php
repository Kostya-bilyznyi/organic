<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

// Temporary HTML layouts
$temp_html_dir = THEME_DIR_URI .'/organic/'; // TODO: delete before production
require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/helpers/theme.php';
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';
require_once THEME_DIR .'/inc/wp/image_sizes.php';
require_once THEME_DIR .'/inc/wp/widget_areas.php';
require_once THEME_DIR .'/inc/wp/theme_support.php';
require_once THEME_DIR .'/inc/wp/menus.php';
require_once THEME_DIR .'/inc/acf/options_page.php';
require_once THEME_DIR .'/inc/shortcodes/footer_shortcodes.php';
require_once THEME_DIR .'/inc/shortcodes/archive-shortcodes.php';
require_once THEME_DIR .'/inc/ajax/fbi-wanted.php';