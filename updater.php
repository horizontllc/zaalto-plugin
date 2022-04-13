<?php
/*
Plugin Name: Updater
Plugin URI: https://github.com/YahnisElsts/plugin-update-checker/releases/tag/v4.11
Description: Creado para actualizar plugins desde github
Version: 1.0.0
Requires at least: 5.8
Tested up to: 5.9.3
Author: Yahn Elsts
Author URI: https://github.com/YahnisElsts/plugin-update-checker/releases/tag/v4.11
License: GPLv2 or Later
Text Domain: updater
*/

/*--- Updater ---*/
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/horizontllc/updater',
	__FILE__,
	'updater'
);
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
/*--- End Updater ---*/