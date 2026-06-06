# Changelog

All notable changes to the **Anesidora** project will be documented in this file.

## [1.1.0] - 2026-06-06
### Added
- Integrated **Vue.js 3** (Composition API) as the primary frontend framework.
- Added **Vue Router** for client-side navigation.
- Created root `App.vue` and `router.js` configuration.
- Created reusable Vue components: `Navbar.vue` and `Card.vue`.
- Created Vue views: `Home.vue`, `Login.vue`, `Register.vue`, `Upload.vue`, and `Drive.vue`.
- Added `@vitejs/plugin-vue` for Vite compilation support.

### Changed
- Migrated existing Blade-based UI to **Single Page Application (SPA)** architecture.
- Updated `resources/views/app.blade.php` to serve as the SPA entry point.
- Refactored `routes/web.php` to handle all frontend routes through a single catch-all route.
- Updated Tailwind CSS configuration to scan `.vue` files in `resources/js/`.
- Optimized `app.js` to initialize the Vue application instance.

### Removed
- Removed legacy Blade views in `resources/views/routes/` and `resources/views/components/` (replaced by Vue equivalents).
- Removed direct Blade-to-Route mapping in favor of Vue Router.

---

## [1.0.0] - 2026-06-05
### Added
- Initial project setup with Laravel.
- Database schema for Users, File Handling, and Sessions.
- Basic Blade templates and Tailwind CSS v4 styling.
- Core File Upload functionality.
