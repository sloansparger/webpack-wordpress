const webpack           = require('webpack')
const autoprefixer      = require('autoprefixer')
const CopyWebpackPlugin = require('copy-webpack-plugin')
const WriteFilePlugin   = require('write-file-webpack-plugin')

const THEME_NAME        = 'awesome-theme'
exports.THEME_NAME      = THEME_NAME


exports.compiler = {
  entry: './' + THEME_NAME + '/index.js',

  output: {
    filename: 'bundle.js',
    path: __dirname + '/wordpress/wp-content/themes/' + THEME_NAME + '/assets',
    publicPath: '/wp-content/themes/' + THEME_NAME + '/assets',
  },

  module: {
    loaders: [
      { test: /\.js$/, loader: 'babel?presets=es2015', exclude: /node_modules/ },
      { test: /\.sass$/, loaders: ['style', 'css', 'postcss?sourceMap=inline', 'sass'], exclude: /node_modules/, },
      { test: /\.(png|jpg)$/, loader: 'url?limit=10000', exclude: /node_modules/, }
    ]
  },

  postcss: function () {
    return [autoprefixer({ browsers: ['last 2 versions', '> 5%', 'Firefox ESR'] })]
  },

  plugins: [
    new CopyWebpackPlugin([
      {context: __dirname + '/' + THEME_NAME + '/theme-files', from: './**/*', to: '../'}
    ], {ignore: ['./styles', './js', './index.js']}),
    new WriteFilePlugin()
  ],
}
