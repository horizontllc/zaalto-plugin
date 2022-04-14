<?php
/**
* @package ZaaltoPlugin
*/
/*
Plugin Name: Zaalto.com
Plugin URI: https://zaalto.com
Description: Creado para mejorar el performance de los sitio web wordpress realizados con Zaalto
Version: 1.0
Requires at least: 5.8
Tested up to: 5.9.3
Author: Zaalto.com
Author URI: https://zaalto.com
License: GPLv2 or Later
Text Domain: zaalto-plugin
*/

/*
Zaalto.com is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Zaalto.com is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Zaalto.com. If not, see https://zaalto.com.
*/

/*--- Updater ---*/
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/horizontllc/zaalto-plugin',
	__FILE__,
	'zaalto-plugin'
);
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
/*--- End Updater ---*/

/*--- Security ---*/
if ( ! defined('ABSPATH')){ die; }
if( ! function_exists('add_action')){ exit; }
/*--- End Security ---*/

/*--- Code start here ---*/
class ZaaltoPlugin
{
    public $plugin;

    function __construct(){
        //add_action('init', array( $this , 'custom_post_type'));
        $this->plugin = plugin_basename(__FILE__);
    }

    function register(){
        add_action('admin_enqueue_scripts',array($this,'admin_enqueue'));
        add_action('wp_enqueue_scripts',array($this,'public_enqueue'));
        add_action('admin_menu', array($this,'add_admin_pages'));
        add_filter( "plugin_action_links_$this->plugin", array($this,'settings_link'));
    }
    function settings_link($links){
        $settings_link = '<a href="admin.php?page=zaalto_plugin">Ajustes</a>';
        array_push($links, $settings_link);
        return $links;
    }
    function admin_enqueue(){
        wp_enqueue_style('admin_style_css', plugins_url('/admin/css/style.css',__FILE__));
        wp_enqueue_script('admin_style_js', plugins_url('/admin/js/script.js',__FILE__));
    }
    function public_enqueue(){
        wp_enqueue_style('public_style_css', plugins_url('/public/css/style.css',__FILE__));
        wp_enqueue_script('public_style_js', plugins_url('/public/js/script.js',__FILE__));
    }

    function add_admin_pages(){
       // $icon = require_once plugin_dir_path(__FILE__).'admin/images/zaaltocom-plugin-icon.svg';
        add_menu_page('zaalto','Zaalto','manage_options','zaalto_plugin', array( $this, 'admin_index'), '' , 2);
    }
    function admin_index(){
        require_once plugin_dir_path(__FILE__).'admin/templates/home.php';
    }

    function activate(){
        $this->custom_post_type();
        flush_rewrite_rules();
    }
    function deactivate(){
        flush_rewrite_rules();
    }
    function custom_post_type(){
        register_post_type('zaalto',['public' => true, 'label' => 'Zaalto']);
    }
}
if( class_exists('ZaaltoPlugin')){
    $var_zaaltoplugin = new ZaaltoPlugin();
    $var_zaaltoplugin->register(); //Activa función register al iniciar la clase.
}
//activation
register_activation_hook(__FILE__,array($var_zaaltoplugin,'activate'));
//deactivation
register_activation_hook(__FILE__,array($var_zaaltoplugin,'deactivate'));
//uninstall
register_uninstall_hook(__FILE__,array($var_zaaltoplugin,'uninstall'));
/*--- End Código ---*/