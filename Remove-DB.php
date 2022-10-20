<?php
/**
* Plugin Name: Remove-DB
* Description: Test.
* Version: 0.1
* Author: Mois
**/

require 'class_Remove_DB.php';

add_action( 'init', ['Remove_DB', 'init'] );

register_activation_hook( __FILE__, ['Remove_DB', 'activation'] );
register_desactivation_hook( __FILE__, ['Remove_DB', 'desactivation'] );