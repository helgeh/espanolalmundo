module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-ftp-push');

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    serverpath: '/www/espanolalmundo/',
    ftp_push: {
      deploy: {
        options: {
          authKey: 'authKey1',
          host: 'ftp.domeneshop.no',
          dest: '<%= serverpath %>',
          port: 21
        },
        files: [
          {
            expand: true,
            cwd: '.',
            src: [
              '**/*',
              '!node_modules/**',
              '!.git{,**/}*',
              '!Gruntfile.js',
              '!README.md',
              '!package.json'
            ]
          }
        ]
      }
    }
  });

  grunt.registerTask('upload', 'Upload files to ftp server.', function(target) {
    grunt.task.run(['ftp_push:deploy']);
  });

  grunt.registerTask('default', ['upload']);

};