module.exports = function (grunt) {

    "use strict";

    // this saves us having to load each plugin individually
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        pkg: grunt.file.readJSON("package.json"),

        less: {
            development: {
                options: {
                    compress: true,
                    strictMath: true,
                    strictUnits: true,
                    cleancss: true
                },
                files: {
                    "style.css": "styles/style.less"
                }
            }
        },

        jshint: {
            options: {
                curly: true,
                eqeqeq: true,
                strict: true,
                evil: true,
                indent: 4,
                undef: true,
                white: true,
                browser: true,
                quotmark: "double",
                trailing: true,
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    require: true
                },
            },
            all: [
                ".jshintrc",
                "Gruntfile.js",
                "js/project.js"
            ]
        },

        concat: {
            dist: {
                src: [
                    "components/jquery/jquery.js",
                    "components/modernizr/modernizr.js",
                    "js/project.js"
                ],
                dest: "js/production.js"
            }
        },

        uglify: {
            my_target: {
                files: {
                    "js/production.js": ["js/production.js"]
                }
            }
        }
    });

    // List of available tasks
    grunt.registerTask("default", []);
    grunt.registerTask("buildcss", ["less"]);
    grunt.registerTask("buildjs", ["jshint", "concat", "uglify"]);

};
