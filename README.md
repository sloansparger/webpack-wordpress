# TODO
- finish webpack setup
  - development
    - finish adding all the packages that would be useful to development (see todoist list)
  - production
    - install image compressor
    - minify
    - turn of sourcemaps
  - staging
    - same as setup for prod, except still have file mapping for debugging purposes
- npm scripts
  - create script that checks on the status of the webpack setup
- deployment setup
  - make sure
- would love to be able to move the entire theme folder up only ever have it move down when it is needed for building...
  not really sure  this is possible with php..
- is there a better way to get css to load with sourcemaps... though everything works, there has to be a better way...


# Completed
- added wordpress install using "wp core download" (using wp-cli)
- installed wordpress
  - created new database in mySQL and then just went through the normal wordpress install
- finish webpack set up
- solved how I wanted to split up webpack configs
- development
  - get webpack dev server working with mamp (hot/live/whatever reloading)
  - added proxying for wordpress front end, script handles rewriting all links on the page so that
    the developer stays within the proxying of webpack dev server
- production
  - minification
