<?php
/*
  * Plugin name: Flappy-game
  * Plugin URI: https://github.com/RaulG23-pixel/flappy-game
  * Description: A plugin of flappy bird game for Wordpress.
  * Version: 1.0.1
  * Author: Raul Gonzalez
  * Author URI: https://github.com/RaulG23-pixel
  * License: GPL
*/

register_activation_hook(
	__FILE__,
	'registerPlugin'
);
function flappyGame() {
    $html =  '<div><div id="screen" style="display:grid; place-items: center;"></div><script type="text/javascript">window.onload = function(){game.onload();};</script></div>';
    return $html;
}

add_shortcode('flappy-game', 'flappyGame');

function enqueue_plugin_files() {

    // Enqueue CSS
    wp_enqueue_style( 'game_styles', plugin_dir_url( __FILE__ ) . 'game_styles.css', array(),null,true);

    // Enqueue JavaScript
    wp_enqueue_script( 'game_melon', plugin_dir_url( __FILE__ ) . 'js/melonJS-min.js', array(),null,true);
    wp_enqueue_script( 'game_main', plugin_dir_url(__FILE__) . 'build/flappy-min.js', array(),null,true);

}
add_action( 'wp_enqueue_scripts', 'enqueue_plugin_files' );

function registerPlugin(){
        add_action( 'wp_enqueue_scripts', 'enqueue_plugin_files' );
}

register_deactivation_hook(__FILE__, "uninstallMyPlugin");
register_uninstall_hook(__FILE__,"uninstallMyPlugin");

function uninstallMyPLugin(){
    remove_shortcode("flappy-game");
    
    wp_dequeue_style("game-styles");
    wp_dequeue_script("game-melon");
    wp_dequeue_script("game-main");
}




