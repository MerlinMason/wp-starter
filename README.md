#wp-starter

A WordPress starter template for bespoke themes, built around a modern tooling environment.

The project provides modern tooling and a base theme structure so you can jump straight into development. It does not make any stylistic or functional assumptions, just gives you the tools you need to get on with your job.

wp-starter make use of the following projects:

- http://editorconfig.org/
- http://csslint.net/
- http://www.jshint.com/
- http://lesscss.org/
- http://bower.io/
- http://gruntjs.com/
- https://github.com/ai/autoprefixer
- http://modernizr.com/

##Requirements for local dev

- node.js v0.10.21 +
- grunt.js v0.4.1 +
- Bower v1.2.7 +

##Getting Setup
Once Bower is installed (http://bower.io), you can then install all dependencies by running:

    bower install

Once Grunt is installed (http://gruntjs.com/getting-started) you can install all dependencies by running:

    npm install

note: please see Bower/Grunt documentation for help with installation.

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
- Optimises all images
- Mac OSX users will then receive a notification upon successful build

The JS build does the following process:
- jshints your project.js file (based on .jshintrc config)
- Concatinates all javascript files used in the site
- Minifies the concatinated file
- Mac OSX users will then receive a notification upon successful build

##Deployment

wp-starter is compatible with dploy - https://github.com/LeanMeanFightingMachine/dploy/

Example of dploy.yaml config (not part of the repository, but will be created when you install dploy)

    staging:
        scheme: ftp
        host: yourhost.com
        port: 21
        user: yourusername
        pass: password123
        check: true
        exclude: ["*.yaml", "*.json", "js/**/*.js", "js/project.js", "**/*.less", "node_modules", "Gruntfile.js", "README.md", ".bowerrc", ".csslintrc", ".editorconfig", ".gitignore", ".jshintrc"]
        include:
            "style.css": "/"
        path:
            remote: httpdocs/wp-content/themes/wp-starter/

