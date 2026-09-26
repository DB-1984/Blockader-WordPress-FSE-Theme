# Blockader

**[View the static demo](https://blockader.onrender.com/)**

Blockader is an experimental WordPress block theme built as a learning and portfolio project. It explores Full Site Editing, custom Gutenberg blocks and bold, typography-led design.

The theme uses templates, template parts and patterns to build its layouts, with global colours, typography and spacing managed through `theme.json`. Its custom blocks cover both static and dynamic content, including a server-rendered banner, live search and related posts.

## Custom blocks

### Banner

A split-layout banner with editable text and a button. Button colours can be adjusted in the block inspector, while PHP handles the frontend rendering.

### Live REST Search

A search interface that queries posts and pages through the WordPress REST API. Frontend requests are debounced, and results appear without reloading the page.

### Associated Posts

A block for displaying related content in a responsive card layout, including featured images and post type labels.

## Built with

* WordPress Full Site Editing
* Gutenberg Block API
* `theme.json`
* JavaScript and React
* PHP and CSS
* WordPress REST API
* `@wordpress/scripts`

## Development

Install the dependencies:

```bash
npm install
```

Start the development build:

```bash
npm run start
```

Build the block assets for production:

```bash
npm run build
```
