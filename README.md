# Séance — A WordPress Block Theme

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

In case you'd rather install WordPress from scratch, here are the steps:

You will need a basic understanding of how to use the command line interface on your computer. This will allow you to establish the local development environment, start and stop it as needed, and run tests.

You will need Node and npm installed on your computer. Node is a JavaScript runtime used for developer tooling, and npm is the package manager included with Node. If you have a package manager installed for your operating system, the setup can be as simple as:

* For macOS: `brew install node`
* For Windows: `choco install nodejs`
* For Ubuntu: `apt install nodejs npm`

If you are not using a package manager, refer to the [Node.js download page](https://nodejs.org/en/download/) download page for installers and binaries.

[Docker](https://www.docker.com/products/docker-desktop), which powers the local development environment, also needs to be installed and running on your computer. Docker is virtualization software and can be installed like any other regular application.


### Development Environment Commands

Ensure [Docker](https://www.docker.com/products/docker-desktop) is running before using these commands.


#### How to start the development environment for the first time

Start by cloning the current repository using `git clone https://github.com/WordPress/wordpress-develop.git`.

Next, in your terminal, navigate to the repository folder using `cd wordpress-develop`

Run the subsequent commands:

```
npm install
npm run build:dev
npm run env:start
npm run env:install
```

Your WordPress site will accessible at http://localhost:8889. The `.env` file, located at the root of the project directory, allows you to view or modify configurations.


#### To watch for changes

Should you be modifying the WordPress core files, it is recommended to initiate the file watcher to build or replicate the files as needed:

```
npm run dev
```

To terminate the file watcher, press `ctrl+c`.


#### To run a [WP-CLI](https://make.wordpress.org/cli/handbook/) command

```
npm run env:cli <command>
```

WP-CLI offers a plethora of handy [commands](https://developer.wordpress.org/cli/commands/) that you can employ to work on your WordPress site.

In instances where the documentation advises running `wp`, instead run `npm run env:cli`. For example:

```
npm run env:cli help
```


#### How to run the tests

The following commands are used to run the PHP and end-to-end test suites, respectively:

```
npm run test:php
npm run test:e2e
```


#### How to restart the development environment

Should you make alterations to the configuration in the `docker-compose.yml` or `.env` files, it may be necessary to restart the environment.

The environment can be restarted using the following command:

```
npm run env:restart
```


#### How to stop the development environment

To conserve your computer's power and resources, you can halt the environment when it is not in use:

```
npm run env:stop
```


#### To start the development environment again

Reactivating the environment involves just a single command:

```
npm run env:start
```


## Credentials

Here are the default credentials for the environment:

* Database: `wordpress_develop`
* Username: `root`
* Password: `password`

To login to the site, proceed to: http://localhost:8889/wp-admin

* Username: `admin`
* Password: `password`

To create a new password (recommended):

1. Navigate to the Dashboard.
2. Click on the Users menu on the left side.
3. Click on the Edit link beneath the admin user.
Scroll down and click 'Generate password'. You may either utilize this password (recommended) or change it, then click 'Update User'. If you opt for the generated password, ensure you save it somewhere safe (like a password manager).


## Contributing

Before you start contributing, it is essential that you familiarize yourself with the [Code of Conduct](https://github.com/alexdeborba/seance/blob/main/CODE_OF_CONDUCT.md) for contributors and the [Contributing](https://github.com/alexdeborba/seance/blob/main/CONTRIBUTING.md) guidelines. These will provide valuable insights about how to submit bug reports, create patches, test modifications, write documentation, and generally get involved in any capacity.

If, after reading these, you are still eager to contribute code, the list of [open issues](https://github.com/alexdeborba/seance/issues) is an excellent starting point to search for tasks. However, it is always preferable to link your [pull requests](https://github.com/alexdeborba/seance/pulls) to an existing issue.

But remember, contributing is not just for developers. I wholeheartedly welcome anyone willing to contribute in any way – be it through code, [testing](#getting-started), triage, discussion, design work for building patterns and templates, making Séance more accessible, and so on. Feel free to browse through the [open issues](https://github.com/alexdeborba/seance/issues) and join in wherever you feel most comfortable.


## Development

- Séance is designed with a minimalist approach, striving to load as few assets as possible. It leans heavily on the [Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) and [Global Styles](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) for its visual aesthetics.
- I strongly discourage constructing any custom PHP or JavaScript-based solutions for features that Séance or the [Block Editor](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/) might already offer. Séance is unique in its minimalist, lightweight design, and it is specifically tailored for individuals with color vision deficiencies. Let us work together to keep its code as uncomplicated as we can.
- In line with this minimalist ethos, Séance does not require a complex build process.  
- As a contributor to Séance, your efforts will be recognized. I plan to update the [contributed](CONTRIBUTORS.md) file periodically with the names of all contributors. Still, if you notice someone being inadvertently overlooked, please do not hesitate to open a [pull request](https://github.com/alexdeborba/seance/pulls) or [issue](https://github.com/alexdeborba/seance/issues) to correct it.


## Experimenting

Should you desire to explore custom coding, I would recommend installing and using the [Child Theme](https://github.com/alexdeborba/seance-child) for advanced customization. To extend it further, consider utilizing [Code Snippets](https://github.com/alexdeborba/seance-snippets). This allows you to experiment while preserving the integrity of the main Séance theme.

| Repository | Description |
| --- | --- |
| [Séance Child Theme](https://github.com/alexdeborba/seance-child) | Official Séance Child Theme |
| [Séance Code Snippets](https://github.com/alexdeborba/seance-snippets) | Official Séance Code Snippets |


## Resources

To delve deeper into the development of block-based themes, the following resources could prove valuable:

- [Create a Block Theme (tutorial)](https://developer.wordpress.org/block-editor/how-to-guides/themes/create-block-theme/)
- [Full site editing development in the Gutenberg Repository](https://github.com/WordPress/gutenberg/labels/%5BFeature%5D%20Full%20Site%20Editing)
- [Block-based Theme Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/block-theme-overview/)
- [Global Styles and theme.json Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)
- [Global Styles development in the Gutenberg Repository](https://github.com/WordPress/gutenberg/issues?q=is%3Aissue+is%3Aopen+label%3A%22Global+Styles%22)
- [theme.json Documentation](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/)


## Demos

Regrettably, there are currently no specific demo sites for the Séance theme. However, you can explore my [personal website](https://alexdeborba.com/), which utilizes Séance in full swing, to get a sense of what the theme is capable of. I appreciate your understanding and am sincerely sorry for any inconvenience this might cause.


## Roadmap

Indeed, Séance offers a [publicly accessible roadmap](https://trello.com/c/QEw6yBCP/18-introducting-seance), allowing interested parties to track the theme's ongoing development and progress. This ensures transparency and provides a fascinating insight into the evolution of the project.


## Credits

The thumbnail on this README.md file:

"Mediator" by Alex de Borba, CCO


## Suggestions?

Should you be inspired to suggest enhancements to this repository, please do not hesitate to open an [issues](https://github.com/alexdeborba/seance/issues) or submit [pull requests](https://github.com/alexdeborba/seance/pulls).

I welcome and greatly appreciate your involvement in refining and expanding this project.