<?php

/*
	Plugin Name: Hide Category
	Plugin URI: https://github.com/Kuddus95/hide-category-plugin
	Plugin Description: Hides a specific category from the activity page
	Plugin Version: 1.0
	Plugin Date: 2016-10-17
	Plugin Author: Bruno
	Plugin Author URI: http://brunovandekerkhove.com
	Plugin License: none
	Plugin Minimum Question2Answer Version: 1.6
*/

if ( !defined('QA_VERSION') ) {
	header('Location: ../../');
	exit;
}

require_once 'qa-hide-category-functions.php';

qa_register_plugin_module('module', 'qa-hide-category-admin.php', 'qa_hide_category_admin', 'Hide Category Admin Module');
qa_register_plugin_overrides('qa-hide-category-overrides.php');
