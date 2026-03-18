# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## About

Laravel 13 marketing site for the EyeCov open source ecosystem, a suite of packages that make code coverage available to AI agents and the VS Code editor. The main package is `eyecov/eyecov-vscode`.

## Naming

Use `eyecov` for technical identifiers such as logo text, commands, code, config, package names, domains, paths, and environment variables. Use `EyeCov` for normal product writing and prose.

## Common Commands

```bash
# Start dev server (two terminals)
php artisan serve
npm run dev

# Build production assets
npm run build

# Artisan shortcuts
php artisan make:livewire ComponentName
php artisan make:controller FooController
php artisan make:view foo

# Deploy (requires env vars)
DEPLOY_HOST=user@host DEPLOY_PATH=/var/www/eyecov ./deploy.sh
```

## Stack

- **Laravel 13** — PHP 8.4
- **Blade** — templating, anonymous components in `resources/views/components/`
- **Tailwind CSS v4** — via `@tailwindcss/vite`, configured in `resources/css/app.css`
- **Livewire** — for interactive components; directives live in the base layout
- **Vite** — asset bundling (`vite.config.js`)

## Architecture

- `resources/views/layouts/app.blade.php` — base layout (Vite, Livewire, favicons)
- `resources/views/welcome.blade.php` — landing page, uses `<x-layouts.app>`
- `resources/views/components/` — anonymous Blade components
- `app/Livewire/` — Livewire components
- `public/` — web root served by the hosting provider
- `deploy.sh` — rsync-based deploy script; builds assets then syncs to server and caches config/routes/views

## Deployment

The site deploys via `deploy.sh` which rsyncs to plain PHP hosting. The server's web root must point to `public/`. A `.env` file must exist on the server (not synced). After sync the script runs `config:cache`, `route:cache`, and `view:cache` remotely.
