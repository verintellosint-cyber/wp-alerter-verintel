# WordPress Custom Action Plugin - Verintel Alerter

A lightweight, production-safe WordPress plugin written in **PHP** that dynamically injects high-visibility promotional banners or notification alerts into the frontend layout.

## 🛠️ Technical Implementation
* **WordPress Hooks:** Utilizes the modern `wp_body_open` action hook for non-intrusive layout manipulation.
* **Security Standards:** Implements strict validation via `ABSPATH` to prevent Direct File Access (DFA) and enforces data escaping with `esc_html()` to mitigate Cross-Site Scripting (XSS) risks.

## 💻 How to Install & Activate

1. Download or clone this folder into your local WordPress workspace:
   ```bash
   cd wp-content/plugins/
   git clone https://github.com
   ```
2. Navigate to your WordPress Admin Dashboard -> **Plugins**.
3. Find **Verintel Global Alerter for WordPress** and click **Activate**.
