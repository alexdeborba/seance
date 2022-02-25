# Séance

Welcome to the Séance development repository.

![Séance](https://camo.githubusercontent.com/d14779b981fadc1aef6b3ea8a63bfc2bbbad95dce67adcc07ab8ac64c2f485d9/68747470733a2f2f616c65786465626f7262612e636f6d2f77702d636f6e74656e742f75706c6f6164732f323032322f30322f686f6d655f6865616465722d7363616c65642e6a7067)


##### Table of Contents

- [Introduction](#introduction)
- [Description](#description)
- [Getting Started with Séance](#getting-started-with-seance)
- [Requirements](#requirements)
- [Deploying WordPress Locally](#deploying-wordpress-locally)
- [Development Environment Commands](#development-environment-commands)
- [How to start the development environment for the first time](#how-to-start-the-development-environment-for-the-first-time)
- [How to watch for changes](#how-to-watch-for-changes)
- [How to run a WP-CLI command](#how-to-run-a-wp-cli-command)
- [How to run the tests](#how-to-run-the-tests)
- [To restart the development environment](#how-to-restart-the-development-environment)
- [How to stop the development environment](#how-to-stop-the-development-environment)
- [Credentials](#credentials)
- [Contributing](#contributing)
- [Development](#development)
- [Experimenting](#experimenting)
- [Resources](#resources)
- [Demos](#demos)
- [Roadmap](#roadmap)
- [Credits](#credits)
- [Suggestions?](#suggestions)


## Introduction

Séance is an uncommon name to a particular WordPress theme, but with a profound meaning behind its name and purpose, I am sure more than you initially thought.

Séance meaning in a few words stands for “A séance or seance (/ˈseɪ.ɑːns/; French: [seɑ̃s]) is an attempt to communicate with spirits.”

In truth, it does have a very personal meaning to me, as uncanny as it may be, I am dying from [Lou Gehrig’s disease](https://en.wikipedia.org/wiki/Amyotrophic_lateral_sclerosis), so you can imagine how dearly and important Séance holds my essence in full.

Truth be told, Séance was not planned. It never crossed my mind to get involved on another theme besides [Olympus](https://wordpress.org/themes/olympuswp/) at this moment, as my time is quite limited to commit to anything else. Except for Olympus, my professional endeavours also include a plugin called [Zeus](https://wordpress.org/plugins/zeus-elementor/), which I co-lead with my dearest long-time friend [Nicolas Lecocq](https://profiles.wordpress.org/nicolaslecocq/) (yes, the very same that once created OceanWP, to which I was also part).


## Description

Séance was created to provide a solid monochromatic foundation embraced with an aura of dichromacy, and trichromacy, therefore, favouring those with colour vision deficiency within darker and lighter palettes yet poetically oriented with gothic aesthetics aimed at avid, inspiring writers for its clarity and minimalist approach.

Remarkably lightweight, assertive, featuring colour palettes drawn to [accessibility](https://developer.wordpress.org/themes/functionality/accessibility/), and full-featured with dozens of carefully handcrafted [Gutenberg Block Patterns](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) that gently bring the strength of minimalistic visuals to content as if flipping pages of a book quickly with gentle fingertips while reading words with leisure.

Fully customisable, Séance embraces the [Full Site Editing](https://make.wordpress.org/test/handbook/full-site-editing-outreach-experiment/) features introduced in [WordPress 5.9](https://wordpress.org/support/wordpress-version/version-5-9/) and, in its unusual manner, accommodates a new writing and visual experience.


### Getting Started with Séance

To get started with Séance development:

1. Set up a [WordPress](#deploying-wordpress-locally) instance.
2. Download [Séance](https://github.com/alexdeborba/seance).
3. Unzip, and upload this repository into your `/wp-content/themes/` directory.

Just in case you find the method to install WordPress locally too overwhelming, then I would recommend experimenting with [wp-env](https://developer.wordpress.org/block-editor/getting-started/devenv/), [Local](https://localwp.com/) or [DevKinsta](https://kinsta.com/devkinsta/).

#### Requirements

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

### Deploying WordPress Locally

Just in case you prefer to install WordPress from the ground up:

You will need a basic understanding of how to use the command line on your computer. This will allow you to set up the local development environment, start it and stop it when necessary, and run the tests.

You will need Node and npm installed on your computer. Node is a JavaScript runtime used for developer tooling, and npm is the package manager included with Node. If you have a package manager installed for your operating system, setup can be as straightforward as:

* macOS: `brew install node`
* Windows: `choco install nodejs`
* Ubuntu: `apt install nodejs npm`

If you are not using a package manager, please check the [Node.js download page](https://nodejs.org/en/download/) for installers and binaries.

You will also need [Docker](https://www.docker.com/products/docker-desktop) installed and running on your computer. Docker is the virtualisation software that powers the local development environment. Docker can be installed just like any other regular application.

### Development Environment Commands

Ensure [Docker](https://www.docker.com/products/docker-desktop) is running before using these commands.

#### How to start the development environment for the first time

Start by cloning the current repository using `git clone https://github.com/WordPress/wordpress-develop.git`.

Then in your terminal move to the repository folder `cd wordpress-develop` and run the following commands:

```
npm install
npm run build:dev
npm run env:start
npm run env:install
```

Your WordPress site will accessible at http://localhost:8889. You can see or change configurations in the `.env` file located at the root of the project directory.

#### To watch for changes

If you are making changes to WordPress core files, you should start the file watcher in order to build or copy the files as necessary:

```
npm run dev
```

To stop the file watcher, please press `ctrl+c`.

#### To run a [WP-CLI](https://make.wordpress.org/cli/handbook/) command

```
npm run env:cli <command>
```

WP-CLI has a plenty of [useful commands](https://developer.wordpress.org/cli/commands/) you can use to work on your WordPress site.

Where the documentation mentions running `wp`, run `npm run env:cli` instead. For example:

```
npm run env:cli help
```

#### How to run the tests

These commands run the PHP and end-to-end test suites, respectively:

```
npm run test:php
npm run test:e2e
```

#### How to restart the development environment

You may want to restart the environment if you have made changes to the configuration in the `docker-compose.yml` or `.env` files.

You can restart the environment with:

```
npm run env:restart
```

#### How to stop the development environment

You can stop the environment when you're not using it to preserve your computer's power and resources:

```
npm run env:stop
```

#### To start the development environment again

Starting the environment again is a single command:

```
npm run env:start
```

## Credentials

These are the default environment credentials:

* Database Name: `wordpress_develop`
* Username: `root`
* Password: `password`

To login to the site, navigate to http://localhost:8889/wp-admin.

* Username: `admin`
* Password: `password`

To generate a new password (recommended):

1. Go to the Dashboard.
2. Click the Users menu on the left.
3. Click the Edit link below the admin user.
4. Scroll down and click 'Generate password'. Either use this password (recommended) or change it, then click 'Update User'. If you use the generated password be sure to save it somewhere (password manager, etc).

## Contributing

Before contributing, please read the contributors' [Code of Conduct](https://github.com/alexdeborba/seance/blob/main/CODE_OF_CONDUCT.md) and [Contributing](https://github.com/alexdeborba/seance/blob/main/CONTRIBUTING.md) for information about how to open bug reports, contribute patches, test changes, write documentation, or get involved in any way you can.

If after reading you still wish to contribute with code, the list of [open issues](https://github.com/alexdeborba/seance/issues) is a superb place to start scrutinising for tasks. However, [pull requests](https://github.com/alexdeborba/seance/pulls) are preferred when linked to an existing issue.

Be advised that contributing is not just for developers. I welcome anyone willing to contribute with code, [testing](#getting-started), triage, discussion, designing while building patterns and templates, making Séance more accessible, etcetera. So please, feel free to look through [open issues](https://github.com/alexdeborba/seance/issues), and join wherever you feel most comfortable.

## Development
  
- Séance aims to load fewer assets as much as possible. With a very minimalistic approach, it relies on the [Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) and [Global Styles](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) to provide you with the visuals.
- I strongly advise refraining from building any custom-built PHP or JavaScript-based workarounds for functionality that either Séance or the [Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) might provide. Séance is the first of its kind, minimalistic, lightweight, and aimed at individuals with colour vision deficiency. So please, let us keep its code as simple as possible.
- According to those last two points, Séance has no necessary build process.
- If you have [contributed](CONTRIBUTORS.md) to Séance, due credit will be given. I will be updating [CONTRIBUTORS.md](CONTRIBUTORS.md) periodically with the names of contributors; however, feel free to open a [pull request](https://github.com/alexdeborba/seance/pulls) or [issue](https://github.com/alexdeborba/seance/issues) if I somehow omitted someone.

## Experimenting

If you wish to experiment with custom code, I will encourage you to install and use the Séance Child for further custom customisation, or further extend it with Code Snippets.

| Repository | Description |
| --- | --- |
| [Séance Child Theme](https://github.com/alexdeborba/seance-child) | Official Séance Child Theme |
| [Séance Code Snippets](https://github.com/alexdeborba/seance-snippets) | Official Séance Code Snippets |

## Resources

Here are some resources that may be helpful to context for learning more about developing block-based themes:

- [Create a Block Theme (tutorial)](https://developer.wordpress.org/block-editor/how-to-guides/themes/create-block-theme/)
- [Full site editing development in the Gutenberg Repository](https://github.com/WordPress/gutenberg/labels/%5BFeature%5D%20Full%20Site%20Editing)
- [Block-based Theme Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/)
- [Global Styles and theme.json Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [Global Styles development in the Gutenberg Repository](https://github.com/WordPress/gutenberg/issues?q=is%3Aissue+is%3Aopen+label%3A%22Global+Styles%22)
- [theme.json Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)

## Demos

Unfortunately, I do not have any demos setup; however, you may look at [my site](https://alexdeborba.com/) to see what Séance unfolds. Please accept my most sincere apologies beforehand.

## Roadmap

Fortunately, Séance has a [public roadmap](https://trello.com/c/QEw6yBCP/18-introducting-seance) that can be accessed to observe both its development and progress.

## Credits

The thumbnail on this README.md file:

["Person Holding Hand Mirror"](https://www.pexels.com/photo/person-holding-hand-mirror-2183445/) by Lisa Fotios, CCO


## Suggestions?

If you would wish to propose any improvements to this repository, please feel free to open an [issues](https://github.com/alexdeborba/seance/issues) or [pull requests](https://github.com/alexdeborba/seance/pulls).