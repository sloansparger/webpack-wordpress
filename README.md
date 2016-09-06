# TODO
- webpack production config
  - install image/svg compressor, would love this to be opt in depending on file name or something?
  - code splitting for css, add conditional need for css link in header.php (we don't want errors in the console all the time)
- webpack development config
  - would love when files in the theme-files directory are saved that webpack-dev-server refreshed the page
- finish deployment set up
  - finish writing npm scripts that can be run by deploybot
- better way to do sass compilation so that we get source maps for development
- linting set up so that we are using same code style
- add composer to handle the plugins (php)


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
  - turned off source maps
- staging
  - same as setup for prod, except still have file mapping for debugging purposes
  - create script
- moved theme folder up into development directory
