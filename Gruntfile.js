'use strict';
module.exports = function(grunt) {
    grunt.initConfig({

        jshint: {
            files: ['differentthanfitnesstheme/js/*.js'],
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
                    dest: 'differentthanfitnesstheme/css/',
                    ext: '.min.css'
                }]
            }
        },

        imagemin: {
            dynamic: {
                options: {
                    // optimizationLevel: 2

                },
                files: [{
                    expand: true,
                    cwd: 'original-images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'differentthanfitnesstheme/images/'
                }]
            }
        },

        // for local development
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


        // FTP push to server
        ftp_push: {
            your_target: {
                options: {
                    authKey: "serverA",

                    // create a file named .ftpauth with info below.  Must be in same folder as gruntfile.js
                    // {
                    //     "serverA":{
                    //         "username":"PU TUSERNAME HERE",
                    //         "password":"PUT PW HERE"
                    //     }
                    // }

                    host: "ftp.differentthanfitness.com",
                    dest: "/public_html/wp-content/themes/"

                },
                files: [{
                    expand: true,
                    cwd: '.',
                    src: [
                        "differentthanfitnesstheme/**"
                    ]
                }]
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
                files: ['differentthanfitnesstheme/js/*.js'],
                tasks: ['jshint', 'ftp_push']
            },
            sass: {
                files: ['sass/styles.scss'],
                tasks: ['sass', 'cssmin', 'ftp_push']
            },
            php: {
                files: ['differentthanfitnesstheme/*.php'],
                tasks: ['ftp_push']
            }


        }
    });

    require('jit-grunt')(grunt);


    // grunt.registerTask('default', ['http-server:dev', 'jshint', 'sass', 'cssmin', 'imagemin', 'ftp_push', 'watch']);
    grunt.registerTask('default', ['http-server:dev', 'jshint', 'sass', 'cssmin', 'imagemin', 'watch']);

};