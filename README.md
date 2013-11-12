#wp-starter

A WordPress starter template for bespoke themes, built around a modern tooling environment. 

wp-starter make use of the following projects:

- https://github.com/
- http://editorconfig.org/
- http://csslint.net/
- http://www.jshint.com/
- http://lesscss.org/
- http://bower.io/
- http://gruntjs.com/
- https://github.com/ai/autoprefixer

##Requirements

- node.js v0.10.21 +
- grunt.js v0.4.1 +
- Bower v1.2.7 +

##Using Grunt

You can use the Grunt watch task to watch .less and .js files for changes and automatically process them.

    $ grunt watch

Alternatively, you can process them at anytime with the following commands.

    $ grunt buildcss
    $ grunt buildjs

The CSS build does the following process:
- Compiles all the .less files imported into style.less
- Autoprefixes the compiled style.css with vendor prefixes (by default it supports current browser version -2)
- Checks the prefixed file for CSS Lint errors (based on .csslintrc config)
- Minifies the file
- Mac OSX users will then receive a notification upon successful build

The JS build does the following process:
- jshints your project.js file (based on .jshintrc config)
- Concatinates all javascript files used in the site
- Minifies the concatinated file
- Mac OSX users will then receive a notification upon successful build

##Woahhh there, but you're not using wp_enqueue_script()???

Enqueuing scripts through WordPress has some great advantages, but also hands responsibility and versioning over to the core to manage your theme... This is great if you make widgetable themes where you're expecting end users to be adding plugings willy-nilly all over the shop. But, if you're making bespoke one-off themes and the idea of any third party script littering your DOM with crap makes you feel sick, maybe you'd prefer complete control of what you're delivering to the browser, which includes delivering the concatenated and minified scripts provided by Grunt.
