# BugSports Theme [![Build Status](https://travis-ci.com/BugSportsClub/bugsports-theme.svg?branch=master)](https://travis-ci.com/BugSportsClub/bugsports-theme)

A Wordpress theme for https://bugsports.org based on [FoundationPress](https://github.com/olefredrik/FoundationPress) [![Build Status](https://travis-ci.org/olefredrik/FoundationPress.svg?branch=master)](https://travis-ci.org/olefredrik/FoundationPress)

>This is a WordPress starter theme based on Foundation 5 by Zurb. The purpose of FoundationPress, is to act as a small and handy toolbox that contains the essentials needed to build any design. FoundationPress is meant to be a starting point, not the final product. If you're looking for an all-in-one theme with built-in shortcodes, plugins, fancypancy portfolio templates or whatnot, I'm afraid you have to look elsewhere.
>
>Please fork, copy, modify, delete, share or do whatever you like with this.
>
>All contributions are welcome!

## Requirements

This project requires [NodeJS](http://nodejs.org) to be installed on your machine.

FoundationPress uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

If you have not worked with a Sass-based workflow before, I would recommend reading [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners), a short blog post that explains what you need to know.

## Quickstart

### 1. Clone the repository and install with npm
```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://github.com/olefredrik/FoundationPress.git
$ cd FoundationPress
$ npm install
```

(Many projects force their users to install [Bower](http://bower.io) and [Grunt](http://gruntjs.com/) globally. We don't like that and decided to use them via `npm scripts` which means, that Grunt and Bower are installed in your `node_modules` folder and we'll call them there. Bower install and grunt build will be called via npm scripts when you run npm install.)


### 2. While you're working on your project, run:

```bash
$ npm run watch
```

If you want to take advantage of browser-sync (automatic browser refresh when a file is saved), simply enter the URL of your local WP-server in Gruntfile.js line 184, save and run
```bash
$ npm run browsersync
```

### 3. For building all the assets, run:

```bash
$ npm run build
```

### 4. Compress all files required for deployment:
It is not recommended that you deploy the entire theme folder to your webserver. There is no danger associated with doing this, but it is a waste of disk space and bandwidth. The node_modules and components for instance is only required during theme development.

By executing the command below, you will compress only the files that are required for deployment. The file will be available as a .zip inside the folder named '/packaged'.

```bash
$ npm run package
```


### How to structure your styles

  * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

  * `assets/scss/foundation.scss`: Imports for Foundation components and your custom styles.
  * `assets/scss/config/_settings.scss`: Original Foundation 5 base settings
  * `assets/scss/config/_custom-settings.scss`: Copy the settings you will modify to this file. Make it your own
  * `assets/scss/site/*.scss`: Unleash your creativity. Create the files you need (and remember to make import statements for all your files in assets/scss/foundation.scss)

Please note that you **must** run `$npm run build` in your terminal for the styles to be copied and concatinated. See [Gruntfile.js](https://github.com/olefredrik/FoundationPress/blob/master/Gruntfile.js) for details

### How to structure your scripts

* `assets/javascript/custom`: This is the folder where you put all your custom scripts. Every .js file you put in this directory will be minified and concatinated one single .js file. (This is good for site speed and performance)

Please note that you must run `npm run build` in your terminal for the scripts to be copied and concatinated. See [Gruntfile.js](https://github.com/olefredrik/FoundationPress/blob/master/Gruntfile.js) for details

### The styles and scripts generated by the build

Version control on these files are turned off because they are automatically generated as part of the build process.

* `assets/stylesheets/foundation.css`: All Sass files are minified and compiled to this file
* `assets/stylesheets/foundation.css.map`: CSS source maps

* `assets/javascript/vendor`: Vendor scripts are copied from `assets/javascript/components/` to this directory. We use this path for enqueing the vendor scripts in WordPress.

## Demo

* [Clean FoundationPress install](http://foundationpress.olefredrik.com/)
* [FoundationPress Kitchen Sink - see every single element in action](http://foundationpress.olefredrik.com/kitchen-sink/)

## Unit Testing With Travis-CI

FoundationPress is completely ready to be deployed to and tested by Travis-CI for WordPress Coding Standards and best practices. All you need to do to activate the test is sign up and follow the instructions to point Travis-CI towards your repo. Just don't forget to update the status badge to point to your repositories unit test.
[Travis-CI](https://travis-ci.org/)

## UI toolkits for rapid prototyping

* [Foundation UI Kit for Axure RP](https://gumroad.com/l/foundation-ui-kit-axure-rp)
* [FoundationPSD - Foundation UI Kit for Photoshop](http://foundationpress.olefredrik.com/downloads/foundation-psd-template/)

## Tutorials

* [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners/)
* [Responsive images in WordPress with Interchange](http://rachievee.com/responsive-images-in-wordpress/)
* [Build a Responsive WordPress theme](http://www.webdesignermag.co.uk/build-a-responsive-wordpress-theme/)
* [Learn to use the _settings file to change almost every aspect of a Foundation site](http://zurb.com/university/lessons/66)
* [Other lessons from Zurb University](http://zurb.com/university/past-lessons)

## Showcase

* [Harvard Center for Green Buildings and Cities](http://www.harvardcgbc.org/)
* [INTI International University & Colleges](http://international.newinti.edu.my/)
* [Conservative Leadership Conference](http://civitasclc.com/)
* [The New Tropic](http://thenewtropic.com/)
* [Parent-Child Home Program](http://www.parent-child.org/)
* [Hip and Healthy](http://hipandhealthy.com/)
* [Threadbird blog](http://blog.threadbird.com/)
* [Public House Wines](http://publichousewine.com/)
* [Franchise Career Advisors](http://franchisecareeradvisors.com/)
* [Le saint](http://www.lesaint.ca/)
* [Help blog](http://help.com/blog/)
* [Maren Schmidt](http://marenschmidt.com/)
* [Ciancimino Gallery](http://ciancimino.com/)
* [The Rainbow Venues](http://www.therainbowvenues.co.uk/)
* [Ameronix](http://www.ameronix.com/)
* [Finnerodja](http://www.finnerodja.se/)
* [Glossop Cartons](http://www.glossopcartons.co.uk/)
* [Ready4Work](http://www.ready4work.my/)
* [Just Legal](http://www.justlegal.co.jp/en/)
* [Vintage and Stuff](http://vintageandstuff.com/)
* [Software for FM](http://softwareforfm.co.uk/)
* [WP Diamonds](http://www.wpdiamonds.com/)
* [Storm Arts](http://stormarts.fi/)
* [USS Illinois](http://ussillinois.org/)

>Credit goes to all the brilliant designers and developers out there. Have **you** made a site that should be on this list? [Please let me know](https://twitter.com/olefredrik)

## Contributing
#### Here are ways to get involved:

1. [Star](https://github.com/olefredrik/FoundationPress/stargazers) the project!
2. Answer questions that come through [GitHub issues](https://github.com/olefredrik/FoundationPress/issues)
3. Report a bug that you find
4. Share a theme you've built on top of FoundationPress
5. [Tweet](https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Ffoundationpress.olefredrik.com%2F&text=Check%20out%20FoundationPress%2C%20the%20ultimate%20%23WordPress%20starter-theme%20built%20on%20%23Foundation%205&tw_p=tweetbutton&url=http%3A%2F%2Ffoundationpress.olefredrik.com&via=olefredrik) and [blog](http://www.justinfriebel.com/my-first-experience-with-foundationpress-a-wordpress-starter-theme-106/) your experience of FoundationPress.

#### Pull Requests

Pull requests are highly appreciated. More than three dozen amazing people have contributed to FoundationPress (so far). Here are some guidelines to help:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover
2. Make sure that your code is bug-free and does not introduce new bugs
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request)
4. Verify that all the Travis-CI build checks have passed

## Documentation

* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)
* [WordPress Codex](http://codex.wordpress.org/)
