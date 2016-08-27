// module.exports = if (process.env.NODE_ENV === 'production') {
//   require('./webpack.config.production.js')
// } else {
//   require('./webpack.config.development.js');
// }

var webpack = require('webpack')
var DashboardPlugin = require('webpack-dashboard/plugin')

var THEME_NAME = 'logical-solutions'


module.exports = {
  entry: './' + THEME_NAME + '/index.js',

  output: {
    filename: 'bundle.js',
    path: __dirname + '/wordpress/wp-content/themes/' + THEME_NAME + '/assets',
    publicPath: '/wp-content/themes/' + THEME_NAME + '/assets',
  },

  devtool: 'eval-source-map',

  devServer: {
    contentBase: './wordpress/wp-content/themes/' + THEME_NAME + '/assets',
    // proxy: {
    //   '/wp-content/themes/logical-solutions/assets': {
    //     target: 'localhost:8888',
    //     secure: false
    //   }
    // }
    proxy: {
      '/': {
        "target": {
          "host": "localhost",
          "protocol": 'http:',
          "port": 8888
        },
        ignorePath: false,
        changeOrigin: true,
        secure: false
      },
      '**': {
        "target": {
          "host": "localhost",
          "protocol": 'http:',
          "port": 8888
        },
        ignorePath: false,
        changeOrigin: true,
        secure: false
      }
    },
  },

  module: {
    loaders: [
      {
        test: /\.js$/,
        loader: 'babel',
        exclude: /node_modules/,
        query: {
          presets: ['es2015']
        },
      },
      {
        test: /\.sass$/,
        loader: 'style!css!sass',
        exclude: /node_modules/,
      },
      {
        test: /\.(png|jpg)$/,
        loader: 'url',
        exclude: /node_modules/,
      }
    ]
  },

  plugins: [
    new DashboardPlugin()
  ]
}

// TODO: include webpackDevServer, save compiler as variable to export

// var server = new webpackDevServer(compiler, {
//   quiet: false,
//   stats: { colors: true },
//   proxy: {
//     "/wp-content/themes/logical-solutions": {
//       "target": {
//         "host": "localhost",
//         "protocol": 'http:',
//         "port": 8888
//       },
//       ignorePath: true,
//       changeOrigin: true,
//       secure: false
//     }
//   }
// })
//
// server.listen(8080);

// if we are using webpack-dev-server and don't want to pass arguements via cmd line set this up
// if (compiler) {
//   compiler.apply(new DashboardPlugin());
// }
