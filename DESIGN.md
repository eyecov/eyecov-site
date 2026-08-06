---
version: alpha
name: EyeCov
description: Public site identity for EyeCov, a coverage tool for VS Code-compatible editors and MCP-aware AI agents.
colors:
  primary: "#e4e4e6"
  on-primary: "#0b0b0e"
  secondary: "#b0b0b8"
  accent: "#7c3aed"
  accent-light: "#9f67ff"
  accent-dark: "#5a0ca3"
  canvas: "#0b0b0e"
  surface: "#0d0d12"
  surface-raised: "#101015"
  surface-chrome: "#111116"
  border-subtle: "#1a1a20"
  border-default: "#2a2a30"
  border-strong: "#22222a"
  border-soft: "#2b2b34"
  fg: "#e4e4e6"
  fg-bright: "#f5f5f6"
  fg-muted: "#b0b0b8"
  fg-soft: "#a0a0a8"
  fg-subtle: "#8f8f99"
  fg-faint: "#7b7b87"
  fg-dim: "#4a4a54"
  code: "#d4d4d4"
  covered: "#22c55e"
  uncovered: "#ef4444"
  uncoverable: "#facc15"
  window-red: "#ff5f57"
  window-yellow: "#febc2e"
  window-green: "#28c840"
  syntax-blue: "#7aa2c8"
  syntax-purple: "#c586c0"
  syntax-string: "#ce9178"
  syntax-comment: "#6a9955"
  syntax-property: "#9cdcfe"
  syntax-number: "#b5cea8"
typography:
  display:
    fontFamily: Geist
    fontSize: 3.5rem
    fontWeight: 500
    lineHeight: 1.05
    letterSpacing: 0
  h1:
    fontFamily: Geist
    fontSize: 3rem
    fontWeight: 600
    lineHeight: 1.08
    letterSpacing: 0
  h2:
    fontFamily: Geist
    fontSize: 1.875rem
    fontWeight: 600
    lineHeight: 1.16
    letterSpacing: 0
  body:
    fontFamily: Geist
    fontSize: 1rem
    fontWeight: 400
    lineHeight: 1.65
    letterSpacing: 0
  body-lg:
    fontFamily: Geist
    fontSize: 1.125rem
    fontWeight: 400
    lineHeight: 1.7
    letterSpacing: 0
  label-caps:
    fontFamily: Geist
    fontSize: 0.75rem
    fontWeight: 700
    lineHeight: 1.2
    letterSpacing: 0.18em
  code:
    fontFamily: Geist Mono
    fontSize: 0.875rem
    fontWeight: 400
    lineHeight: 1.55
    letterSpacing: 0
rounded:
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  xxl: 24px
spacing:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 10px 20px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.fg}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 10px 20px
  card:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.fg}"
    rounded: "{rounded.xl}"
    padding: 24px
  card-muted:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.fg-muted}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 24px
  code-panel:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.code}"
    typography: "{typography.code}"
    rounded: "{rounded.lg}"
    padding: 16px
  nav-bar:
    backgroundColor: "{colors.surface-chrome}"
    textColor: "{colors.fg-soft}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px
  nav-label:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.fg-faint}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.sm}"
    padding: 4px
  divider:
    backgroundColor: "{colors.border-subtle}"
    textColor: "{colors.fg-bright}"
    rounded: "{rounded.sm}"
    size: 1px
  border-frame:
    backgroundColor: "{colors.border-default}"
    textColor: "{colors.fg-bright}"
    rounded: "{rounded.lg}"
    padding: 1px
  border-frame-strong:
    backgroundColor: "{colors.border-strong}"
    textColor: "{colors.fg-bright}"
    rounded: "{rounded.xxl}"
    padding: 1px
  border-frame-soft:
    backgroundColor: "{colors.border-soft}"
    textColor: "{colors.secondary}"
    rounded: "{rounded.xl}"
    padding: 1px
  accent-chip:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.fg-bright}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.md}"
    padding: 8px 12px
  accent-chip-hover:
    backgroundColor: "{colors.accent-light}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.md}"
    padding: 8px 12px
  accent-chip-pressed:
    backgroundColor: "{colors.accent-dark}"
    textColor: "{colors.fg-bright}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.md}"
    padding: 8px 12px
  editor-line-covered:
    backgroundColor: "{colors.covered}"
    textColor: "{colors.on-primary}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  editor-line-uncovered:
    backgroundColor: "{colors.uncovered}"
    textColor: "{colors.on-primary}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  editor-line-uncoverable:
    backgroundColor: "{colors.uncoverable}"
    textColor: "{colors.on-primary}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  metadata-subtle:
    backgroundColor: "{colors.fg-subtle}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.sm}"
    padding: 4px
  metadata-dim:
    backgroundColor: "{colors.fg-dim}"
    textColor: "{colors.fg-bright}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.sm}"
    padding: 4px
  window-control-close:
    backgroundColor: "{colors.window-red}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    size: 12px
  window-control-minimize:
    backgroundColor: "{colors.window-yellow}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    size: 12px
  window-control-zoom:
    backgroundColor: "{colors.window-green}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    size: 12px
  syntax-function:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.syntax-blue}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  syntax-keyword:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.syntax-purple}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  syntax-string:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.syntax-string}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  syntax-comment:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.syntax-comment}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  syntax-property:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.syntax-property}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
  syntax-number:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.syntax-number}"
    typography: "{typography.code}"
    rounded: "{rounded.sm}"
    padding: 4px
---

## Overview

EyeCov should feel like a precise editor tool, not a SaaS confetti cannon.

The visual language is dark, quiet, technical, and sharp. It borrows from code editors: matte surfaces, restrained borders, compact controls, monospaced examples, and coverage states that are obvious without shouting. The product promise is clarity: show what is covered, what is not, and when the data cannot be trusted.

Use `eyecov` for technical identifiers. Use `EyeCov` for product prose and UI labels.

## Colors

The palette is a dark neutral system with one violet accent and explicit coverage status colors.

- **Canvas (`#0b0b0e`)** is the page background. Keep it dominant.
- **Surface tokens** stack from `surface` to `surface-raised` to `surface-chrome`. Use them for editor panes, cards, sticky navigation, and cookie consent.
- **Foreground tokens** move from bright text to dim metadata. Do not invent one-off grays unless the value is already present in the Tailwind theme.
- **Accent (`#7c3aed`)** is for energy, focus, and glow. Use it sparingly. White buttons currently carry the main conversion work.
- **Coverage colors** are semantic: green covered, red uncovered, yellow uncoverable. Do not repurpose them for decoration.
- **Window and syntax colors** belong only inside editor-style product artifacts. They are evidence colors, not brand colors.

## Typography

Use Geist for UI and prose. Use Geist Mono for code, CLI examples, tool calls, and editor simulations.

Headlines are tight and direct. Body copy should be plain, specific, and a little dry when it helps. No pitch-deck filler. No "seamless", "empower", or "unlock". EyeCov is a tool for people who read code; write like they already know what software is.

Keep letter spacing at `0` for normal text. Caps labels can use tracking, but they should stay small and rare.

## Layout

Use a `max-w-6xl` content width with `px-6` on mobile and `md:px-8` on larger screens. Main sections should breathe vertically, usually `py-32` on the landing page and tighter spacing in docs.

Prefer two-column editorial layouts with a real product artifact beside the copy: editor mockups, coverage snippets, MCP output, settings, or CLI examples. Avoid abstract decorative panels. If a section has no product artifact, it needs a strong reason to exist.

## Elevation & Depth

Depth should be subtle and functional. Cards can lift on hover, but the page should not become a stack of floating tiles.

Use borders first, shadows second. Existing cards use a soft border, dark surface, and hover lift. Keep that behavior consistent. Avoid glow soup; violet is a scalpel, not wallpaper.

## Shapes

The default radius is 8px for buttons and compact controls. Cards use 12px to 24px depending on density. Editor mockups can use 12px with clipped overflow.

Do not round everything into pills. EyeCov should feel like a sharp instrument, not a plush toy with npm scripts.

## Components

### Navigation

Navigation is thin, sticky or fixed, dark, and low-contrast until hovered. Logo first. Product links second. Keep it predictable.

### Buttons

Primary buttons use white on the dark canvas. Secondary buttons use dark backgrounds with borders. Hover can lift by 1px and brighten the border or fill.

Button text should say the action: "Install from Marketplace", "Install from Open VSX", "Read the Docs". No vague CTA sludge.

### Cards

Cards are for product artifacts and repeated content. Use `.ec-card` for hover behavior when the card is interactive or preview-like. Do not nest cards inside cards.

### Code And Editor Panels

Code panels are core brand material. They should look like usable editor surfaces:

- top chrome with file or tool context
- monospaced code
- subdued line numbers
- left status bars for coverage
- green, red, and yellow used only for coverage state
- syntax colors pulled from the design tokens, never one-off inline hexes

### Consent Banner

The analytics consent banner should stay compact, plain, and honest. It is a utility control, not a campaign.

## Do's and Don'ts

Do:

- lead with product evidence
- use exact coverage language
- keep copy short and concrete
- keep the dark neutral palette disciplined
- make stale or uncertain coverage states visible instead of pretending

Don't:

- add generic SaaS gradients, blobs, or mascot energy
- use purple as a blanket background treatment
- introduce new font families
- use bright status colors for decoration
- make landing-page sections that only restate the headline
- soften technical claims until they say nothing
