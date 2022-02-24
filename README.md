# Séance

Welcome to the development repository for Séance.

![Séance](https://camo.githubusercontent.com/d14779b981fadc1aef6b3ea8a63bfc2bbbad95dce67adcc07ab8ac64c2f485d9/68747470733a2f2f616c65786465626f7262612e636f6d2f77702d636f6e74656e742f75706c6f6164732f323032322f30322f686f6d655f6865616465722d7363616c65642e6a7067)


## Description

Séance was created to provide a solid monochromatic foundation embraced with an aura of dichromacy, and trichromacy, therefore, favouring those with colour vision deficiency within darker and lighter palettes yet poetically oriented with gothic aesthetics aimed at avid, inspiring writers for its clarity and minimalist approach.

Remarkably lightweight, assertive, featuring colour palettes drawn to [accessibility](https://developer.wordpress.org/themes/functionality/accessibility/), and full-featured with dozens of carefully handcrafted [Gutenberg Block Patterns](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) that gently bring the strength of minimalistic visuals to content as if flipping pages of a book quickly with gentle fingertips while reading words with leisure.

Fully customizable, Séance embraces the [Full Site Editing](https://make.wordpress.org/test/handbook/full-site-editing-outreach-experiment/) features introduced in [WordPress 5.9](https://wordpress.org/support/wordpress-version/version-5-9/) and, in its unusual manner, accommodates a new writing and visual experience.


## Contributing

If you wish to contribute code, the list of [open issues](https://github.com/alexdeborba/seance/issues) is a superb place to start scrutinising for tasks. However, [pull requests](https://github.com/alexdeborba/seance/pulls) are preferred when linked to an existing issue.

Please be advised that contributing is not just for developers. I welcome anyone willing to contribute with code, [testing](#testing), triage, discussion, designing while building patterns and templates, making Séance more accessible, etcetera. So please, feel free to look through [open issues](https://github.com/alexdeborba/seance/issues), and join wherever you feel most comfortable.

### Testing

To get started with Séance development:

1. Set up a [WordPress](https://wordpress.org/) instance. I would recommend [wp-env](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/), [Local](https://localwp.com/) or [DevKinsta](https://kinsta.com/devkinsta/).
2. Download [Séance](https://github.com/alexdeborba/seance).
3. Unzip, and upload this repository into your `/wp-content/themes/` directory.

### Contributing
  
- Séance aims to load fewer assets as much as possible. With a very minimalistic approach, it relies on the [Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) and [Global Styles](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) to provide you with the visuals.
- I strongly advise refraining from building any custom-built PHP or JavaScript-based workarounds for functionality that either Séance or the [Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) might provide. Séance is the first of its kind, minimalistic, lightweight, and aimed at individuals with colour vision deficiency. So please, let us keep its code as simple as possible.
- According to those last two points, Séance has no necessary build process.
- If you have [contributed](CONTRIBUTORS.md) to Séance, due credit will be given. I will be updating [CONTRIBUTORS.md](CONTRIBUTORS.md) periodically with the names of contributors; however, feel free to open a [pull request](https://github.com/alexdeborba/seance/pulls) or [issue](https://github.com/alexdeborba/seance/issues) if I somehow omitted someone.

## Requirements

- [Séance](https://github.com/alexdeborba/seance)
- [WordPress 5.9+](https://wordpress.org/download/)
- PHP 5.6+
- License: [GPLv2](https://www.gnu.org/licenses/gpl-2.0.html) or later.

Some Séance features and/or [pull requests](https://github.com/alexdeborba/seance/pulls) may require the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) trunk and will be described or tagged accordingly.

To optionally run tests locally, it will also be required:

- [Node.js](https://nodejs.org/en/)
- [Composer](https://getcomposer.org/)

You can install the test-specific development dependencies by running `npm i && composer install`.

The following test commands are then available:

- `npm run lint:css` lints and autofixes where possible the CSS
- `composer run analyze [filename.php]` statically analyzes PHP for bugs
- `composer run lint` checks PHP for syntax errors
- `composer run standards:check` checks PHP for standards errors according to [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
- `composer run standards:fix` attempts to automatically fix errors

## Resources

- [Setting up a development environment](https://developer.wordpress.org/block-editor/handbook/tutorials/devenv/)
- [Block Theme documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview)
- [Global Styles and theme.json documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

## Demos

Unfortunately, I do not have any demos setup; however, you may look at [my site](https://alexdeborba.com/) to see what Séance unfolds. Please accept my most sincere apologies beforehand.

## Roadmap

Fortunately, Séance has a [public roadmap](https://trello.com/c/QEw6yBCP/18-introducting-seance) that can be accessed to observe both its development and progress.

## Credit

The thumbnail on this README.md file:

"Person Holding Hand Mirror" by Lisa Fotios, CCO
https://www.pexels.com/photo/person-holding-hand-mirror-2183445/