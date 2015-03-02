/*global module:false*/
module.exports = function(grunt) {

	// load all grunt tasks
	require( 'load-grunt-tasks' )( grunt );


	// Project configuration.
	grunt.initConfig({

		package: grunt.file.readJSON( 'package.json' ),

		clean: {
			development: {
				src: [ 
					'<%= package.dist %>/*.php',
					'<%= package.dist %>/page-templates/*.php',
					'<%= package.dist %>/*.png',
					'<%= package.dist %>/fonts/*.*',
					'<%= package.dist %>/js/scripts.js',
					'<%= package.dist %>/images/*.*',
					'<%= package.dist %>/videos/*.*',
				]
			},
		},

		copy: {
			development: {
				expand: true,
				dest: '<%= package.dist %>/',
				cwd: '<%= package.src %>/',
				src: [ 
					'*.php',
					'page-templates/*.php', 
					'*.png', 
					'fonts/*.*', 
					'js/*.*', 
					'images/*.*', 
					'videos/*.*' 
				]
			},
		},

		less: {
			development: {
				files: {
					'<%= package.dist %>/style.css': '<%= package.src %>/styles/style.less'
				}
			},
			production: {
				options: {
					cleancss: true,
				},
				files: {
					'<%= package.dist %>/style.css': '<%= package.src %>/styles/style.less'
				}
			}
		},

		autoprefixer: {
			options: {
				browsers: [
					'Android 2.3',
					'Android >= 4',
					'Chrome >= 20',
					'Firefox >= 24', // Firefox 24 is the latest ESR
					'Explorer >= 8',
					'iOS >= 6',
					'Opera >= 12',
					'Safari >= 6'
				]
			},
			development: {
				src: '<%= package.dist %>/style.css'
			},
			production: {
				src: '<%= package.dist %>/style.css'
			},
		},

		webfont: {
			icons: {
				src: '<%= package.src %>/icons/*.svg',
				dest: '<%= package.dist %>/fonts/',
				destCss: '<%= package.src %>/styles/',
				options: {
					engine: 'node',
					font: 'icons',
					stylesheet: 'less',
					relativeFontPath: './fonts/',
					destHtml: '<%= package.src %>/icons/'
				}
			}
		},

		rename: {
			development: {
				files: [
					{ src: [ '<%= package.src %>/styles/icons.less' ], dest: [ '<%= package.src %>/styles/_icons.less' ] },
				]
			}
		},

		concat: {},

		uglify: {},

		jshint: {
			options: {
				jshintrc: '.jshintrc',
				reporter: require( 'jshint-stylish' )
			},
			development: [
				'Gruntfile.js',
			]
		},

		bower_concat: {
			development: {
				dest: '<%= package.dist %>/js/libs.js',
				dependencies: {},
			}
		},

		watch: {
			development: {
				files: [
					'Gruntfile.js',
					'<%= package.src %>/**/*.*',
					'!<%= package.src %>/styles/_icons.less',
				],
				tasks: [ 
					'prepare:development'
				],
				options: {
					livereload: true
				}
			}
		},

		open: {
			development: {
				path: 'http://local.brikk.se/'
			}
		},

		'ftp-deploy': {
			acceptance: {
				auth: {
					host: 'ftp.brikk.se',
					port: 21,
					authKey: 'acceptance',
				},
				src: '<%= package.dist %>',
				dest: './acceptance/wp-content/themes/twentyfifteen-child/',
				exclusions: [ '<%= package.dist %>/**/.DS_Store' ]
			},
		}
	});

	grunt.registerTask( 'prepare:icons', [

		'webfont:icons',
		'rename:development'
	]);

	grunt.registerTask( 'prepare:development', [

		'clean:development',
		'copy:development',
		'less:development',
		'autoprefixer:development',
		'prepare:icons',
		'jshint:development',
		'bower_concat:development',
	]);

	grunt.registerTask( 'development', [

		'prepare:development',
		'open:development',
		'watch:development'
	]);

	grunt.registerTask( 'acceptance', [

		'prepare:development',
		'ftp-deploy:acceptance',
	]);
};
