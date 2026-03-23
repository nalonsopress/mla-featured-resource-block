# MLA Featured Resource Block

This repository contains a small example WordPress Gutenberg block inspired by the kind of editorial component work I contributed to on style.mla.org.

## What it does

The block allows editors to add a featured editorial resource with:
- a title
- a URL
- a call-to-action label

## Why I built it this way

I chose a hybrid Gutenberg architecture:
- `block.json` for declarative registration and metadata
- React in the editor for a cleaner editorial experience
- PHP server-side rendering for secure, maintainable frontend output

This approach is useful on editorial sites where accessibility, consistency, and long-term maintainability matter more than storing large amounts of generated HTML in post content.

## Why this approach

This pattern solves a few practical problems:

- keeps editor UX simple
- centralizes frontend markup in PHP
- allows escaping and validation on output
- makes future markup changes easier without forcing content migrations
- supports dynamic behavior if requirements evolve later

## What I would improve in a production version

In a production implementation I would also add:
- stricter URL validation
- richer editor controls
- unit/integration testing
- design tokens or theme.json integration
- CI checks for linting and coding standards

## Local setup

1. Place the plugin in `wp-content/plugins/`
2. Run `npm install`
3. Run `npm run build`
4. Activate the plugin in WordPress
5. Add the "Featured Resource" block in the editor

## Notes

This is a simplified, self-contained example intended to demonstrate my coding style and architectural decision-making in modern WordPress/Gutenberg development.
