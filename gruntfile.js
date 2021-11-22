'use strict';
module.exports = function(grunt) {

  grunt.initConfig({

    browserSync: {
      bsFiles: {
          src : '**/*.*'
      },
      options: {
          server: {
              baseDir: "./web"
          },
          watchTask: true
      }
    },

    watch: {
      assets: {
        files: ['src/**/*.js', 'src/**/*.css'],
        tasks: []
      }

    }

  });

  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-contrib-watch');


  grunt.registerTask('default', ['browserSync', 'watch']);

};