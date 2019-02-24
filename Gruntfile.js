module.exports = function(grunt) {
	const sass = require('node-sass');
	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		connect: {
			server: {
				options: {
          hostname: 'localhost',
          port: 3000,
          livereload: true
        }
			}
		},
		sass: {
			options: {
				implementation: sass,
				sourceMap: true
			},
			dist: {
				files: {
					'public/css/demo/app.css': 'resources/sass/demo/app.scss',
				}
			}
		},
		watch: {
			scripts: {
				files: ['resources/sass/demo/**/*.scss'],
				tasks: ['sass'],
				options: {
					livereload: true
				},
			},
		},
	});

	grunt.registerTask('default', ['sass', 'connect', 'watch']);
};
