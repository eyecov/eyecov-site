# EyeCov Site

Public Laravel site for EyeCov: the VS Code-compatible extension and MCP tooling that makes code coverage visible to editors and AI agents.

The site has two routes:

- `/` — product landing page
- `/docs` — installation, editor workflow, MCP tools, report CLI, and contributing guide

## Stack

- Laravel 13 on PHP 8.4
- Blade views with anonymous components
- Livewire 4 available in the base layout
- Tailwind CSS 4 through Vite
- Pest/PHPUnit tests, including browser smoke tests
- SQLite for local development

## Project Shape

- `CHANGELOG.md` tracks notable repo changes before releases.
- `routes/web.php` defines the public routes.
- `app/Http/Controllers/DocsController.php` supplies the docs page table of contents and supported coverage formats.
- `resources/views/welcome.blade.php` is the landing page.
- `resources/views/docs.blade.php` is the docs page.
- `resources/views/components/layouts/app.blade.php` owns shared metadata, favicons, Vite, and Livewire hooks.
- `resources/css/app.css` contains the Tailwind entrypoint and site styling.
- `public/` contains the logo, icons, manifest, and built assets.

## Naming

Use `eyecov` for technical identifiers: commands, config keys, package names, domains, paths, environment variables, and logo text.

Use `EyeCov` for product prose, docs copy, metadata, and user-facing labels.

## Local Development

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
composer run dev
```

For the small two-terminal version:

```bash
php artisan serve
npm run dev
```

## Tests

```bash
composer pest
composer pest:browser
composer phpstan
composer pint
composer pint:dry
composer rector
composer rector:dry
```

Use the smallest relevant test first when changing behavior. Browser tests cover the landing page and docs page.

## Production Build

```bash
npm run build
```
