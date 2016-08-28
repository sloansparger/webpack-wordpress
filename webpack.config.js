const webpack      = require('webpack')
const autoprefixer = require('autoprefixer')

const THEME_NAME   = 'logical-solutions'
exports.THEME_NAME = THEME_NAME


exports.compiler = {
  entry: './' + THEME_NAME + '/index.js',

  output: {
    filename: 'bundle.js',
    path: __dirname + '/wordpress/wp-content/themes/' + THEME_NAME + '/assets',
    publicPath: '/wp-content/themes/' + THEME_NAME + '/assets',
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
        loaders: ['style', 'css', 'postcss?sourceMap=inline', 'sass'],
        exclude: /node_modules/,
      },
      {
        test: /\.(png|jpg)$/,
        loader: 'url',
        exclude: /node_modules/,
      }
    ]
  },

  postcss: function () {
    return [autoprefixer({ browsers: ['last 2 versions', '> 5%', 'Firefox ESR'] })]
  },

  plugins: []

}
