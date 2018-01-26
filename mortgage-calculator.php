<?php
/*
Plugin Name: Mortgage Calculator
Plugin URI: https://fullbeaker.com/kylebelfort-application
Description: WP plugin to determine monthly mortgage payments from a form.
Author: Kyle Belfort
Version: 1.0
Author URI: https://kylebelfort.com/
*/

if(! defined('ABSPATH') ){
    exit;
}

function start_mortgage_calculator(){
    $mortgage = new Mortgage_Calculator();
    $plugin -> run();

}

start_mortgage_calculator();