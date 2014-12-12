module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		project: {
			app: '.',
			css: 'sass'
		},
		sass: {
			dev: {
				options: {
					style: 'expanded',
					compass: false
				},
				files: {
					'style.css': 'sass/style.scss'
				}
			},
			dist: {
				options: {
					style: 'compressed',
					compass: false
				},
				files: {
					'style.min.css': 'sass/style.scss'
				}
			}
		},
		watch: {
			sass: {
				files: ['sass/*.scss', '!sass/style.scss'],
				tasks: ['sass:dev']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');		
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['sass:dev']);
	grunt.registerTask('dist', ['sass:dist']);
	grunt.registerTask('watch', ['watch:sass'])
};