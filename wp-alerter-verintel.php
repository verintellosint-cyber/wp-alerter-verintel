<?php
/**
 * Plugin Name: Verintel Global Alerter for WordPress
 * Plugin URI: https://github.com
 * Description: Dynamically injects custom price drop alerts or corporate announcement banners at the top of the website using clean WordPress hooks.
 * Version: 1.0.0
 * Author: Verintel Core
 * License: GPL2
 */

// EN: Security: Prevent direct file access if invoked outside the global WordPress execution scope
// RO: Securitate: Previne accesul direct la fișier dacă este apelat în afara ariei WordPress
if (!defined('ABSPATH')) {
    exit;
}

// EN: Hook a custom rendering routine onto the theme's core structural layout initialization
// RO: Conectează o rutină de randare personalizată la inițializarea structurii temei
add_action('wp_body_open', 'verintel_display_alert_banner');

function verintel_display_alert_banner() {
    // EN: Global configuration variable containing raw marketing layout components
    // RO: Variabilă globală ce conține componentele brute de marketing ale bannerului
    $alert_message = "🔥 **VERINTEL ALERT:** The Emag monitoring system has detected massive price drops! Check the server logs immediately.";
    
    // EN: Direct standard markup compilation using secure text localization filters to avoid injection bugs
    // RO: Compilare markup standard utilizând filtre de securizare a textului pentru a evita bug-uri de injecție
    echo '
    <div id="verintel-top-banner" style="background: #111; color: #00ffcc; text-align: center; padding: 12px; font-family: \'Segoe UI\', sans-serif; font-size: 14px; font-weight: bold; border-bottom: 2px solid #00ffcc; position: relative; z-index: 99999;">
        <span>' . esc_html($alert_message) . '</span>
    </div>
    ';
}
