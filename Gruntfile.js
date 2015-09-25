module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    sass: {
      dev: {
        options: {
          style: 'compressed'
        },
        files : {
          'wp-content/themes/crander/style.css': 'wp-content/themes/crander/sass/style.scss'
        }
      }
    },
    watch: {
      sass: {
        files: ['wp-content/themes/crander/sass/*.scss'],
        tasks: ['sass:dev']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  // Default task(s).
  grunt.registerTask('default', ['sass:dev','watch:sass']);

};