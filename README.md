# TODO
- finish webpack setup
  - set webpack to work off of NODE_ENV, set NODE_ENV in npm scripts
  - development
    - get webpack dev server working with mamp (hot/live/whatever reloading)
      - this may require proxy setting
    - finish adding all the packages that would be useful to development (see todoist list)
    - see if we need browsersync? what does it do that HMR can't do?
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
- added proxying for wordpress front end, script handles rewriting all links on the page so that
  the developer stays within the proxying of webpack dev server
