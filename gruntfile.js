module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "css/styles.css": "css/styles.less", // destination file and source file
          "css/styles-publishing.css": "css/styles-publishing.less" // destination file and source file
        }
      }
    },
    watch: {
      styles: {
        //files: ['css/**/*.less'], // which files to watch
        files: ['app-src/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  grunt.registerTask('default', ['less', 'watch']);
};