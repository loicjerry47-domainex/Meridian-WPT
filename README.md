# 🌓 Meridian WordPress Theme

[![WordPress](https://img.shields.io/badge/WordPress-5.8+-117AC9?style=flat-square&logo=wordpress)](https://wordpress.org/)
[![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php)](https://php.net/)
[![License: GPL v2+](https://img.shields.io/badge/License-GPL%202.0+-blue?style=flat-square)](https://www.gnu.org/licenses/gpl-2.0)
[![Author](https://img.shields.io/badge/Author-Loic%20Hazoume-orange?style=flat-square)](https://wxza.net)

**Meridian** is a modern, high-performance, conversion-focused WordPress theme engineered specifically for SaaS companies, digital agencies, and startups. 

Designed to prioritize landing page conversions, lead generation, and product showcasing, Meridian includes specialized page templates, an integrated testimonial system, responsive pricing tables, and full WordPress Customizer integration.

---

## ✨ Features Overview

- **Conversion-First Design:** Optimized layouts targeting lead capture, pricing, and social proof.
- **Native Dark Mode:** Seamless Light/Dark mode toggle synced with OS preferences and `localStorage`.
- **Vanilla JavaScript:** Zero jQuery dependencies for blazing fast interactions, sliders, and counters.
- **Custom Post Types:** Purpose-built Testimonials engine with specific meta fields.
- **Flexible Shortcodes:** Easily drop in pricing tables, feature grids, and CTAs anywhere.
- **Widget Areas:** 5 dedicated widget locations including a special "CTA Sidebar" for landing pages.
- **Accessibility Ready:** ARIA labels, semantic HTML5, skip links, and focus outline management.
- **Theme Customizer:** Edit hero texts, client logos, URLs, and dark mode defaults instantly.
- **Design System:** Indigo (`#6366f1`) and Violet (`#8b5cf6`) accents, clean `Inter` typography, and soft modern geometry (12px border radius).

---

## 🏠 Homepage Sections

The `front-page.php` template renders a high-converting funnel, structured in the following order:

1. **Hero Section (`hero-saas.php`):** A split-screen layout. The left features a headline, subtitle, and primary/secondary CTA buttons (customizable via WP Customizer). The right features a pure CSS dashboard/mockup window.
2. **Client Logos (`section-clients.php`):** Horizontal scrollable row displaying up to 6 trusted brands (uploaded via Customizer).
3. **Features Grid (`section-features.php`):** 3x2 grid of your SaaS benefits leveraging the features shortcode.
4. **Social Proof Stats:** Real-time animating number counters ("10,000+ Users", "99.9% Uptime") triggering on scroll via modern `IntersectionObserver` JS.
5. **Pricing Table (`section-pricing.php`):** Renders the 3-tier card layout using the pricing shortcode.
6. **Testimonials (`section-testimonials.php`):** Integrated slider displaying client reviews.
7. **CTA Banner (`section-cta.php`):** Full-width, vibrant gradient call-to-action inviting signups.
8. **Blog Preview:** Displays a grid of the 3 most recently published posts.

---

## 🌙 Dark Mode

Meridian comes with fully integrated, CSS-variable-powered Dark Mode that avoids flashing and flash-of-unstyled-content (FOUC).

- **Implementation:** Governed by `dark-mode-toggle.js` and `dark-mode.css`.
- **Logic:** On the first visit, it checks `window.matchMedia('(prefers-color-scheme: dark)')`.
- **Persistence:** User selection (Sun/Moon header toggle) is saved into `localStorage` as `meridian_theme`.
- **Customizer:** Global dark mode defaults (auto/light/dark) and switch visibility can be managed in the Appearance Customizer.

---

## 💬 Custom Post Types (Testimonials)

Meridian bundles a custom post type solely for social proof: **Testimonials** (`meridian_testimonial`). This separates reviews from standard blog posts and integrates with custom meta boxes.

**Available Meta Fields:**
- **Client Name** (Text)
- **Client Title/Role** (Text)
- **Company Name** (Text)
- **Rating** (Numeric slider, 1-5 stars)

*The slider securely sanitizes responses and implements nonce verification via the Meta Box API.*

---

## 🧩 Shortcodes

Meridian utilizes the WordPress Shortcode API heavily. Drop any of these into your pages, posts, or the landing page template:

### 1. Pricing Table
Outputs a fully responsive 3-tier SaaS pricing table. The middle card is automatically elevated with a "Popular" badge.
```text
[meridian_pricing]
```

### 2. Feature Grid
Generates a 3x2 grid showcasing key product benefits alongside SVG icons.
```text
[meridian_features]
```

### 3. Testimonials Carousel
Outputs the Vanilla JS accessible slider. Automatically tracks touch/swipe gestures on mobile, pauses on hover, and injects aria-live updates.
- **Parameters:** `count` (Default: `3`)
```text
[meridian_testimonials count="6"]
```

### 4. Call-to-Action Banner
Outputs a full-width gradient banner.
- **Parameters:** `title`, `button_text`, `button_url`
```text
[meridian_cta title="Ready to upgrade your workflow?" button_text="Start Free Trial" button_url="/signup"]
```

---

## 📂 File Structure

```text
meridian/
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── sidebar.php
├── single.php
├── page.php
├── archive.php
├── search.php
├── 404.php
├── comments.php
├── front-page.php
├── template-parts/
│   ├── content.php
│   ├── content-none.php
│   ├── hero-saas.php          
│   ├── section-features.php    
│   ├── section-pricing.php     
│   ├── section-testimonials.php 
│   ├── section-cta.php         
│   ├── section-clients.php     
│   └── card-blog.php           
├── page-templates/
│   ├── template-landing.php    
│   ├── template-pricing.php    
│   └── template-fullwidth.php
├── inc/
│   ├── customizer.php
│   ├── widgets.php
│   ├── template-tags.php
│   ├── custom-post-types.php   
│   └── shortcodes.php          
├── assets/
│   ├── css/
│   │   ├── custom.css
│   │   └── dark-mode.css
│   └── js/
│       ├── navigation.js
│       ├── dark-mode-toggle.js
│       ├── customizer.js
│       ├── testimonial-slider.js
│       └── animations.js
├── screenshot.png
├── readme.txt
└── README.md
```

---

## 🛠 Tech Stack

- **Backend:** PHP 7.4+, WordPress Core APIs (Customizer API, Meta Box API, Shortcode API)
- **Frontend/Styling:** HTML5, CSS3 via CSS Variables (Custom Properties)
- **Interactivity:** Vanilla JavaScript (ES6+), `IntersectionObserver`, `localStorage` API
- **Design Toolkit:** `Inter` Google Font, raw SVG icons (Lucide/Feather inspired)

---

## 🚀 Installation & Usage

1. Download the latest `meridian.zip` release.
2. Log into your WordPress Dashboard.
3. Navigate to **Appearance > Themes**.
4. Click **Add New** at the top, then **Upload Theme**.
5. Select `meridian.zip` and click **Install Now**.
6. Click **Activate**.
7. Navigate to **Appearance > Customize** to configure your Hero texts, Client Logos, and Social Profile links.
8. Navigate to **Settings > Reading** and set "Your homepage displays" to a Static Page pointing to your configured Front Page.

---

## 👤 Author

**Loic Hazoume**
* Website: [wxza.net](https://wxza.net)
* Email: [jerryhazoume@gmail.com](mailto:jerryhazoume@gmail.com)

## 📄 License
This project is licensed under the [GPL-2.0-or-later License](https://www.gnu.org/licenses/gpl-2.0.html).
