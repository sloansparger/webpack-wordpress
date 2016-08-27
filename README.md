# TODO
- finish webpack setup
  - development
    - finish adding all the packages that would be useful to development (see todoist list)
    - autoprefixer
  - production
    - install image compressor
    - minify and other file reduction techniques
    - turn of sourcemaps
  - staging
    - same as setup for prod, except still have file mapping for debugging purposes
- npm scripts
  - create script that checks on the status of the webpack setup

- deployment setup
  - make sure



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
