'use strict';

module.exports = function(grunt) {

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        project: {
            app: ['app'],
			source: ['src'],
            sass: ['<%= project.source %>/sass'],
            css: ['<%= project.app %>/css'],
			js: ['<%= project.source %>/js']
        },

        sass: {
            dev: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none'
                },
                files: {
                    '<%= project.css %>/main.css':'<%= project.sass %>/main.scss'
                }
            }
        },
		
        watch: {
			html: {
				files: 'src/*.html',
				tasks: ['htmlmin']
			},
			css: {
				files: 'src/sass/{,*/}*.{scss,sass}',
				tasks: ['sass:dev', 'postcss', 'concat:css']
			},
			js: {
				files: 'src/js/*.js',
				tasks: ['concat:basic', 'uglify:my_target']
			}
        },
		
		postcss: {
			options: {
				processors: [
					require('pixrem')(), // add fallbacks for rem units
					require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
					require('cssnano')() // minify the result
				]
			},
			dist: {
				src: '<%= project.app %>/css/*.css'
			}
		},
		
		concat: {
			js: {
				options: {
					separator: "\n"
				},
				basic: {
					src: ['bower_components/svg4everybody/dist/svg4everybody.min.js','bower_components/jquery/dist/jquery.min.js','bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js','src/js/scripts.js'],
					dest: '<%= project.app %>/js/scripts.js'
				}
			},
			css: {
				src: ['src/sass/meta.css', 'app/css/main.css'],
				dest: 'style.css'
			}
		},
		
		uglify: {
            my_target: {
                files: {
                    '<%= project.app %>/js/scripts.js': [
                        '<%= project.app %>/js/scripts.js'
                    ]
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', [
        'sass',
		'postcss',
		'concat',
		'uglify'
    ]);

};
