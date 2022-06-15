<?php

/**
 * Plugin name: Test Plugin
 * Description: Some fun with WordPress.
 */

function testplugin_setup_post_type() {
  register_post_type('book', ['public' => TRUE]);
}
add_action('init', 'testplugin_setup_post_type');

function testplugin_activate() {
  testplugin_setup_post_type();
  flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'testplugin_activate');

function testplugin_deactivate() {
  unregister_post_type('book');
  flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'testplugin_deactivate');