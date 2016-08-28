const webpack      = require('webpack')
const compiler = require('../webpack.config.js').compiler
const THEME_NAME = require('../webpack.config.js').THEME_NAME

compiler.devtool = 'source-map'

compiler.plugins.push(new webpack.optimize.UglifyJsPlugin({
  minimize: true,
  sourceMap: false,
  output: {
    comments: false
  }
}))

module.exports = compiler
