# Contributing

EyeCov Site is small on purpose. Keep changes focused.

## Local Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
composer run dev
```

## Before Opening A PR

Run the same checks CI runs:

```bash
composer test
npm run build
composer pest:browser
```

Use the smallest relevant test while working. Run the full set before handing the work over.

## Pull Requests

- Keep one concern per PR.
- Update `README.md` or `CHANGELOG.md` when behavior, setup, or release notes change.
- Do not add generated assets, local env files, deploy config, screenshots, or editor state.
- Follow the existing Blade, Laravel, Tailwind, and Pest conventions before adding new patterns.

## Agent Docs

`AGENTS.md` is the canonical repo guide for coding agents. Do not add duplicate `CLAUDE.md`, `GEMINI.md`, or tool-specific instruction files.
