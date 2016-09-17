module.exports = function(grunt) {

	grunt.initConfig({
		watch: {
			scripts: {
				files: ['**/*.php'],
				tasks: ['composer:ci'],
				options: {
					spawn: false
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-composer');

};
