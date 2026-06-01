<?php
/**
 * Plugin Name: Verintel Global Alerter for WordPress
 * Plugin URI: https://github.com
 * Description: Dynamically injects custom price drop alerts or corporate announcement banners at the top of the website using clean WordPress hooks.
 * Version: 1.0.0
 * Author: Verintel Core
 * License: GPL2
 */

// Securitate: Blocăm accesul direct dacă fișierul este apelat în afara ecosistemului WordPress
if (!defined('ABSPATH')) {
    exit;
}

// Înregistrăm o funcție care se execută când se deschide body-ul site-ului (Frontend DOM)
add_action('wp_body_open', 'verintel_afiseaza_banner_alerta');

function verintel_afiseaza_banner_alerta() {
    // Mesajul de alertă optimizat pentru demo-ul tău
    $mesaj_alerta = "🔥 **ALERTĂ VERINTEL:** Modulul de monitorizare Emag a detectat reduceri masive! Verifică serverul.";
    
    // Injectăm codul HTML și stilul CSS inline direct în pagină
    echo '
    <div id="verintel-top-banner" style="background: #111; color: #00ffcc; text-align: center; padding: 12px; font-family: \'Segoe UI\', sans-serif; font-size: 14px; font-weight: bold; border-bottom: 2px solid #00ffcc; position: relative; z-index: 99999;">
        <span>' . esc_html($mesaj_alerta) . '</span>
    </div>
    ';
}
