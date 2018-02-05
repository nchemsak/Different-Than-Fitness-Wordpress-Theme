'use strict';
module.exports = function(grunt) {
    grunt.initConfig({

        jshint: {
            files: ['differentthanfitness/js/*.js'],
            options: {
                predef: ["document", "console", "Module", "$", ],
                esnext: true,
                globalstrict: true,
                globals: {}, //ex: {"Sandwich": true, "require": true}
                browserify: true 
            }
        },

        sass: {
            dist: {
                files: {
                    'sass/styles.full.css': 'sass/styles.scss'
                }
            }
        },


        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'sass/',
                    src: ['styles.full.css'],
                    dest: 'differentthanfitness/css/',
                    ext: '.min.css'
                }]
            }
        },

        imagemin: {
            dynamic: {
                options: {
                    optimizationLevel: 7

                },
                files: [{
                    expand: true,
                    cwd: 'original-images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'differentthanfitness/images/'
                }]
            }
        },


        'http-server': {

            'dev': {
                root: ".",
                host: "localhost",
                port: 8080,

                cache: 100,
                showDir: true,
                autoIndex: true,

                // server default file extension
                ext: "html",

                // run in parallel with other tasks
                runInBackground: true

                // Tell grunt task to open the browser
                // openBrowser: true
            }
        },

        watch: {
            // reload gruntfile.js if it changes while running
            configFiles: {
                files: ['gruntfile.js'],
                options: {
                    reload: true
                }
            },
            options: {
                livereload: true,
            },
            javascripts: {
                files: ['differentthanfitness/js/*.js'],
                tasks: ['jshint']
            },
            sass: {
                files: ['sass/styles.scss'],
                tasks: ['sass', 'cssmin']
            },

        }
    });

    require('jit-grunt')(grunt);


    // require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);
    grunt.registerTask('default', ['http-server:dev', 'jshint', 'sass', 'cssmin', 'imagemin', 'watch']);

};