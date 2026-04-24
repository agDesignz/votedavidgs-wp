# votedavidgs-wp

Custom WordPress theme built for David G.S., a candidate running for Saint Paul City Council. The site was a full campaign platform — introducing the candidate, sharing his policy visions, amplifying community voices, and providing information for supporters who wanted to get involved.

> **Note:** The original hosted site is no longer live. A clone of the site is being prepared for local/demo deployment.

---

## Overview

This is a classic PHP-based WordPress theme built entirely from scratch — no page builder, no starter theme. Every template, layout, and interactive element was hand-coded to match a custom design created for the campaign. The project required wearing multiple hats: graphic design, UX/UI, development, and DevOps — an experience that deepened my appreciation for the value of specialized team collaboration.

---

## Tech stack

- PHP (WordPress theme API)
- SCSS (compiled to CSS)
- JavaScript
- Advanced Custom Fields (ACF)
- Custom Post Types (CPT)
- Deployed on cloud VPS (Gridpane), DNS via Cloudflare

---

## Theme structure

Built on WordPress's classic template hierarchy. Key templates:

- `front-page.php` — Campaign homepage
- `page-community.php` — Community section featuring Voices posts
- `page-vision.php` — Policy vision section featuring Vision posts
- `page-get-involved.php` — Supporter engagement page
- `functions.php` — Theme setup, enqueue scripts/styles, CPT and ACF registration
- `header.php` / `footer.php` — Sitewide layout and navigation

---

## Custom post types

Two custom post types power the campaign content sections:

- **Visions** — Policy positions and platform items displayed on the Vision page
- **Voices** — Community member testimonials and endorsements displayed on the Community page

These allowed the campaign team to add and manage content through the WordPress admin without touching theme code.

See [`/site-plugins/dgs_post_types.php`](./site-plugins/dgs_post_types.php)

---

## Advanced Custom Fields

ACF was used to attach structured custom fields to the Vision and Voice post types, enabling rich, consistently formatted content entries. This gave non-technical campaign staff a guided, form-based editing experience.

> **Note on plugin preservation:** This site was built before I had established a rigorous Git workflow. The theme code and custom post type registration are preserved here, but the ACF field group configuration — managed through the WordPress admin at the time — was not exported to JSON before the hosting lapsed. This is a workflow gap I've since corrected: in later projects I export ACF field groups to JSON files committed alongside the theme.

---

## SCSS

Styles are written in SCSS and compiled to CSS. The SCSS architecture follows a component-based structure organized around the site's main content sections, with variables for campaign colors and typography defined in a central `_variables.scss` partial.

---

## Deployment

Originally deployed on a cloud VPS managed through Gridpane, with DNS via Cloudflare. A demo clone is in progress.

---

## License

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

[GNU General Public License version 3 (GPL v3)](https://creativecommons.org/licenses/by-nc/4.0/)

---

_Built by [Alex Geer Web Design](https://alexgeer.dev)_
