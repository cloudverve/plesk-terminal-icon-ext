[![Vendor](https://img.shields.io/badge/author-CloudVerve%2C%20LLC-lightgrey.svg?colorB=9900cc&label=vendor )](https://2lab.net)
[![GitHub License](https://img.shields.io/github/license/cloudverve/plesk-terminal-icon-ext.svg)](https://raw.githubusercontent.com/cloudverve/plesk-terminal-icon-ext/master/LICENSE)
[![Latest Release](https://img.shields.io/github/release/cloudverve/plesk-terminal-icon-ext.svg)](https://github.com/cloudverve/plesk-terminal-icon-ext/releases)
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://paypal.me/danielhendricks)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/cloudverve/plesk-terminal-icon-ext.svg?style=social)](https://twitter.com/danielhendricks)

# Terminal Icon Extension for Plesk

This is a simple extension that adds an icon to the user's control panel for web-based SSH access via Shell in a Box. It is designed to be used in conjunction with [Shell in a Box](https://github.com/shellinabox/shellinabox).

For instructions on installing Shell in a Box as a Docker container, refer to the [documentation](https://github.com/cloudverve/plesk-terminal-icon-ext/wiki).

## Requirements

- [Plesk](https://www.plesk.com/) 17.0.17 or higher
- [Docker extension](https://www.plesk.com/extensions/docker/)
- A Shell in a Box instance

**Note:** While Docker is not required (you can install Shell in a Box locally or on a remote server), the [instructions](https://github.com/cloudverve/plesk-terminal-icon-ext/wiki) related to this extension describe how to use it with a Shell in a Box docker instance.

## Installation

### Install from Distribution ZIP

This is the easiest method to install the plugin.

1. [Install Shell in a Box](https://github.com/cloudverve/plesk-terminal-icon-ext/wiki#add-shell-in-a-box-docker-container)
2. **[Download the distribution ZIP](https://github.com/cloudverve/plesk-terminal-icon-ext/releases)** of this extension and install. **DO NOT** download the _source_ ZIP or clone by itself - it will not work without doing some extra steps (see below).
3. Enter your Shell in a Box URL in the [extension settings](https://github.com/cloudverve/plesk-terminal-icon-ext/wiki#install-and-configure-terminal-icon-extension).

See the [wiki](https://github.com/cloudverve/plesk-terminal-icon-ext/wiki) for detailed instructions.

### Install from Source

If you prefer to install from source:

1. Download the source or clone the repo
2. Change directory to the extracted/cloned extension
3. Run the following commands to create an installable ZIP file:

```
npm install
gulp
npm run zip
```

The last command will create a file named `terminal-icon-{version}.zip` in the _parent_ directory.

## Contributing

There are several ways that you can contribute:

1. [Report bugs](https://github.com/cloudverve/plesk-terminal-icon-ext/issues) that you find.
2. Contribute improvements.
3. Provide [translations](https://github.com/cloudverve/plesk-terminal-icon-ext/tree/master/plib/resources/locales).

## TODO

- Resize terminal window based on the browser's viewport height.
- Hide icon for users that do not have SSH access.
- Explore the possibility of hiding the icon on mobile devices.

## Change Log

Release changes are noted on the [Releases](https://github.com/cloudverve/plesk-terminal-icon-ext/releases) page.

#### Branch: `master`

* None since release

## Screenshots

![Terminal Window](https://raw.githubusercontent.com/cloudverve/plesk-terminal-icon-ext/master/_meta/screenshots/2.png)

![Terminal (SSH) Link](https://raw.githubusercontent.com/cloudverve/plesk-terminal-icon-ext/master/_meta/screenshots/1.png)

![Extension Settings](https://raw.githubusercontent.com/cloudverve/plesk-terminal-icon-ext/master/_meta/screenshots/3.png)
