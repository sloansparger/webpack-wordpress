# Wordpress Webpack
This project aims to bring the best features of the latest tooling to Wordpress theme development. Namely, this project gives you the ability to have hot module replacement provided by Webpack to allow you to develop javascript rich themes that without having to constantly reload the page. Additionally you can import any npm module and have it available on the front-end. This project also allows you to write your styling using SASS and use ES2015, and utilizes the awesome webpack-dashboard tool so you feel cool too.

# Getting Started
To start using the project simply run:
```
git clone
npm install
```
The next step requires you to download Wordpress and add it into a wordpress folder in the root folder. If you have WP CLI installed you can simply run
```
npm run setup
```
This will download the latest version of Wordpress and add it to a wordpress folder. To view your project you will need to aim a tool like MAMP, WAMP, XAMMP, etc. to this wordpress folder. Now make sure to turn on your Apache server along with your MySQL server, then visit localhost:8888. You should now see the Wordpress wp-config creation page. Create a new database in PhpMyAdmin and link up wordpress to it using Wordpress' walkthrough. Once completed return to your terminal and run
```
npm run dev
```
Once run a browser will load the home page of your site at localhost:3000. This where be will all your development will take place.

# Developing
### Styling
To style your webpages you simply go into the awesome-theme/styling folder. Any SASS styles that are added to these folders will reload in the browser instantaneously.

### Javascript
In awesome-theme/index.js you can import any and all javascript that you would like. Import npm packages or import your own files. Take advantage of having a modern ecosystem to create web apps using Wordpress.

### Php and Template Files
All edits to php files will require a manual refresh to see changes. The hope is that in future versions of this tool that this will no longer be a need, but for now it is a requirement.

# TODO
- have page refresh when php file is changed, not just sass and js
- source maps for sass
- code linting
- add composer to handle the plugins (php)
- have a npm start-project script that downloads the freshest version of wordpress
- fix CopyWebpackPlugin copying \*.hotpush.json files to wordpress/../theme-name-folder/assets/js
