# Jane Prince Theme

Custom WordPress theme built for Jane Prince, former Saint Paul City Councilmember for Ward 7. The site serves as a civic engagement and community discussion platform, allowing the client to publish ongoing commentary, letters, and diary-style posts about local issues in Saint Paul.

**Live site:** [janeprincew7.com](https://janeprincew7.com)

---

## Overview

This is a classic PHP-based WordPress theme built from scratch — no page builder, no starter theme. The design and all template logic were written by hand to meet the client's specific content needs: a clean, readable civic site that a non-technical user could maintain independently after handoff.

---

## Tech stack

- PHP (WordPress theme API)
- HTML5 / CSS3
- JavaScript
- Advanced Custom Fields (ACF)
- Custom Post Types (CPT)

---

## Theme structure

The theme uses WordPress's classic template hierarchy. Key templates include:

- `front-page.php` — Homepage with featured content and recent posts
- `page-about.php` — Static About page
- `archive-diary.php` / `single-diary.php` — Archive and single-post views for the East Side Diary section
- `functions.php` — Theme setup, enqueue scripts/styles, register CPTs and ACF fields
- `header.php` / `footer.php` — Sitewide layout

---

## Custom post types

A custom post type plugin registers the **Diary** post type, which drives the East Side Diary section of the site. This allows the client to add new diary entries through the standard WordPress admin interface, with entries displayed chronologically in a dedicated archive.

See [`/site-plugins/jp_post_types.php`](./site-plugins/jp_post_types.php)

---

## Advanced Custom Fields

ACF was used to extend the Diary post type with structured custom fields, giving the client a clean, guided editing experience rather than a blank text editor. Field configuration was managed through the WordPress admin and deployed with the theme.

---

## Notes

This project was built early in my freelance practice, before I had fully adopted Git-based workflows. The repository contains the custom theme and the custom post type plugin. Some ACF field configuration was managed through the WordPress admin UI rather than exported to code — a workflow limitation I've since addressed in later projects by exporting ACF field groups to JSON for version control.

---

## License

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

[GNU General Public License version 3 (GPL v3)](https://creativecommons.org/licenses/by-nc/4.0/)

---

_Built by [Alex Geer Web Design](https://alexgeer.dev)_
