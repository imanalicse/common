1. Install NodeJs
2. need to set environment variables.
3. Install gulp globally "npm install gulp -g"
4.

Basic operations:
Declaring required dependencies
Creating task for the dependencies
Running the task
Watching the task

npm install gulp-imagemin --save-dev
a. var imagemin = require('gulp-imagemin');
b.

gulp.task('task-name', function() {
//do stuff here
});

c. gulp imagemin