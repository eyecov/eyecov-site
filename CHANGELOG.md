# Changelog

All notable changes to EyeCov Site are tracked here.

## [1.0.0] - 2026-05-02

### Added

- Added GitHub Actions CI for PHP gates, asset builds, and browser smoke tests.
- Added `CONTRIBUTING.md` and `SECURITY.md` for public repo hygiene.
- Added `composer phpstan` with Larastan and Pest closure `$this` support.
- Added `composer rector` and `composer rector:dry` for automated refactoring checks.
- Added `composer pint`, `composer pint:dry`, `composer pest`, and `composer pest:browser` as the canonical local gates.
- Added public page coverage in `tests/Feature/PublicPagesTest.php`.

### Changed

- Cleaned the repo agent guide so `AGENTS.md` is the only checked-in agent doc.
- Updated README coverage of the repo shape, commands, and public routes.
- Applied the shared PHP coding style across the Laravel app.

### Fixed

- Stopped the empty `public/docs/` directory from shadowing Laravel's `/docs` route in production.
- Replaced stock example tests with tests that cover the actual public pages.

### Removed

- Removed duplicate `CLAUDE.md` and `GEMINI.md` agent docs.
- Removed the repo-local `deploy.sh` in favor of the shared Laravel deploy flow.
- Removed the Instruckt integration from the local agent and frontend tooling.
