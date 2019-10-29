<?php
/**
 * Plugin Name: Advanced Custom Fields : Bootstrap Carousel
 * Plugin URI: https://github.com/christos22
 * Description: Enables ACF options pages for a post type archive.
 * Author: Christos Grapsas
 * Author URI: https://github.com/christos22
 * Version: 2.0.4
 * License: GPL v3
 * Text Domain: acf-bootstrap-carousel
 * Domain Path: /languages
 *
 * CPT ACF Options Pages
 * Copyright (C) 2019, Christos Grapsas - tusko@trush.email
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 **/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if (!defined('ACF_BC_PLUGIN')) {
    define('ACF_BC_PLUGIN_PATH', plugin_dir_path(__FILE__));
    define('ACF_BC_PLUGIN', plugin_basename(__FILE__));
    define('ACF_BC_DOMAIN', dirname(plugin_basename(__FILE__)));
}

// include_once ACF_BC_PLUGIN_PATH . "includes/acf-field-groups.php";
if (function_exists('acf_add_local_field_group')) {    
    include_once ACF_BC_PLUGIN_PATH . "includes/bootstrap-carousel.php";
    include_once ACF_BC_PLUGIN_PATH . "includes/content-carousel.php";
}
