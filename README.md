# Séance

Welcome to the development repository for Séance.

![Séance](https://github.com/alexdeborba/seance/assets/5738223/9b6491e2-ea09-4e5f-bdb5-8831af16a16b)

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

Séance may be an unconventional name for a WordPress theme, but I assure you, there is a depth of significance and purpose behind it that likely surpasses your initial assumptions.

In a nutshell, Séance is a term borrowed from French “séance” (/ˈseɪ.ɑːns/; French: [seɑ̃s]), that literally translates to an “attempt to communicate with spirits.”

Indeed, the name Séance holds an intensely personal significance for me. As unsettling as it may sound, I am battling [Lou Gehrig’s disease](https://en.wikipedia.org/wiki/Amyotrophic_lateral_sclerosis). Therefore, you can understand how profoundly Séance embodies my whole essence.

To be completely honest, Séance was not a premeditated project. It had not occurred to me to engage with another theme beyond the now obsolete [Olympus](https://wordpress.org/themes/olympuswp/), a theme had a promising and bright future ahead, which also motivated me to transition from [Astra](https://wpastra.com/) and dedicate myself entirely to it.

[Olympus](https://wordpress.org/themes/olympuswp/) was a theme I used to co-lead with my former close friend [Nicolas Lecocq](https://profiles.wordpress.org/olympuswp/) - yes, the same individual who was instrumental in creating the now outdated [OceanWP](https://oceanwp.org/), a company I was also involved in - alongside with [Zeus for Elementor](https://wordpress.org/plugins/zeus-elementor/). Given my limited time, I could not commit to any additional projects. Apart from [AEon](https://www.facebook.com/groups/aeonwp), my professional pursuits also encompass my company, [Atmostfear Entertainment](https://www.atmostfear-entertainment.com/).

In addition to this, I am an active contributor to [WordPress](https://profiles.wordpress.org/alexdeborba/), serve as a Beta Tester for several companies, and thanks to my unique narrative style, I write technical documentation for others as well. Of course, this is without even mentioning my own company, which has been my motivator for over a decade, constantly pushing me to my limits and significantly fulfilling my life post-diagnosis.

The inception of Séance was driven by the need to build my [personal site](https://alexdeborba.com/). I intended this platform for publishing personal content related to my life—or death, depending on your viewpoint. As I undertook routine tasks like setting up DNS, creating the instance for [WordPress 5.9.0](https://wordpress.org/news/2021/11/a-look-at-wordpress-5-9/), and accessing my freshly updated dashboard, I found myself captivated by the prospect of experimenting with the new [Twenty Twenty-Two](https://make.wordpress.org/core/2021/10/06/introducing-twenty-twenty-two/). I could not help thinking how it would be to experiment with it and see how far the new Full Site Editing would take theme development further.

I have a reputation for being experimental and taking concepts to an entirely new level beyond their original intent. Thus, it was second nature to delve into the default theme and familiarize myself with its intended functionality within just a few hours.

Needless to say, my inner developer was swiftly energized. I decided to open [Visual Studio Code](https://code.visualstudio.com/), commence coding the theme, extend its functionality, alter certain elements, and began constructing my [personal site](https://alexdeborba.com/).

Conversely, I must admit that I also have a deep-seated desire to share my knowledge with others. For several years, I have been an active participant in numerous groups, offering assistance to users in need by sharing my expertise, troubleshooting their problems, and providing them with solutions so they can continue on their journey with confidence.

Looking forward to continuing this journey...


## Description

Séance was designed to provide a uniform, single-color foundation enhanced with hints of two-tone and three-tone color schemes.

This design choice caters to individuals with color vision deficiency, covering both darker and lighter color palettes, all while maintaining a gothic aesthetic that appeals to passionate and aspiring writers due to its clarity and minimalist design.

Impressively lightweight yet bold, Séance incorporates color palettes focused on [accessibility](https://developer.wordpress.org/themes/functionality/accessibility/) and comes fully equipped with numerous meticulously designed [Gutenberg Block Patterns](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/).

These elements subtly impart a minimalist visual strength to the content, similar to quickly leafing through a book with delicate fingertips, leisurely absorbing the written words.

Fully customizable, Séance supports the [Full Site Editing](https://make.wordpress.org/test/handbook/full-site-editing-outreach-experiment/) features launched with [WordPress 5.9](https://wordpress.org/support/wordpress-version/version-5-9/) and, in its unique way, offers a fresh writing and visual experience.


### Getting Started with Séance

To initiate development with the Séance theme:

1. Begin by creating a [WordPress](#deploying-wordpress-locally) instance.
2. Proceed to download the [Séance](https://github.com/alexdeborba/seance) theme.
3. Next, unzip the downloaded file and upload the repository into your `/wp-content/themes/` directory.

If the process of installing WordPress locally seems too complex, I recommend experimenting with tools such as [wp-env](https://developer.wordpress.org/block-editor/getting-started/devenv/), [Local](https://localwp.com/) or [DevKinsta](https://kinsta.com/devkinsta/).


#### Requirements

- [Séance](https://github.com/alexdeborba/seance)
- [WordPress 5.9+](https://wordpress.org/download/)
- PHP 5.6+
- License: [GPLv2](https://www.gnu.org/licenses/gpl-2.0.html) or later.

Certain features of Séance or specific [pull requests](https://github.com/alexdeborba/seance/pulls) may necessitate the [Gutenberg plugin](https://wordpress.org/plugins/gutenberg/) trunk. Such requirements will be suitably described or tagged.

Additionally, if you wish to run tests locally, the following will be necessary:

- [Node.js](https://nodejs.org/en/)
- [Composer](https://getcomposer.org/)

To install the development dependencies specific to testing, execute the command: `npm i && composer install`

Upon completing the setup, you can use the following test commands:

- `npm run lint:css` lints the CSS and automatically fixes any possible errors.
- `composer run analyze [filename.php]` statically analyzes the PHP code for bugs.
- `composer run lint` checks the PHP code for syntax errors.
- `composer run standards:check` examines the PHP code for standards errors according to [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/).
- `composer run standards:fix` attempts to automatically correct these errors.


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
