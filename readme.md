# Blockader

A custom WordPress block theme combining bold typography, reusable layouts and bespoke Gutenberg blocks. Blockader uses Full Site Editing to bring templates, global styles and custom functionality into a consistent editing workflow.

[Live demo](https://blockader.davidbrandondev.com/)

## Video walkthrough

[![Watch the Blockader video walkthrough](https://img.youtube.com/vi/xbY-ytNbnEg/hqdefault.jpg)](https://www.youtube.com/watch?v=xbY-ytNbnEg)

Click the thumbnail to watch the walkthrough on YouTube.

## Overview

Blockader pairs native WordPress editing tools with custom React-based block interfaces and PHP rendering. Theme settings are centralised in `theme.json`, while reusable patterns and template parts provide a consistent foundation across the site.

The theme includes a configurable banner, live REST search and an associated-posts block, with responsive layouts and styling driven by CSS variables.

## Features

### Full Site Editing

- Custom block templates and shared template parts.
- Reusable patterns for consistent page composition.
- Global colour, typography and spacing settings through `theme.json`.
- Responsive typography and layouts.

### Banner block — `blockader/banner`

A dynamic split-layout banner with editable heading, content and button controls.

- Editor controls for content and button colours.
- Server-side frontend rendering through `render.php`.
- Theme-aware styling using CSS variables.

### Live REST search

A custom search block that retrieves posts and pages through the WordPress REST API.

- Live results as the visitor types.
- Debounced frontend requests.
- A custom results interface styled to match the theme.

### Associated posts

A block for displaying context-aware related content.

- Featured images and post-type labels.
- Responsive card layouts.
- Related-content presentation within the block editor workflow.

## Technical approach

- **WordPress and Gutenberg:** native block editing and Full Site Editing.
- **JavaScript and React:** custom block interfaces and frontend interactions.
- **PHP:** dynamic block rendering and WordPress integration.
- **CSS:** responsive layouts, custom properties and theme styling.
- **WordPress REST API:** live content retrieval.
- **`@wordpress/scripts`:** block development and asset compilation.

## Development

Run commands from the theme directory containing `package.json`.

Install dependencies:

```bash
npm install
```

Start the development build and watch for changes:

```bash
npm run start
```

Create a production build:

```bash
npm run build
```

Compiled assets must be included when deploying the theme. Node.js is used for development and compilation; WordPress serves the resulting assets.

## Installation

1. Build the theme assets using the commands above.
2. Copy the theme directory into `wp-content/themes/`.
3. Activate **Blockader** under **Appearance → Themes**.
4. Use **Appearance → Editor** to customise templates, template parts and global styles.
5. Add content and configure the custom blocks through the editor.

## Author

**David Brandon** — [davidbrandondev.com](https://davidbrandondev.com/)
