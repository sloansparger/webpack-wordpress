const webpack      = require('webpack')
const compiler = require('../webpack.config.js').compiler

compiler.devtool = 'source-map'

compiler.plugins.push(new webpack.optimize.DedupePlugin())
compiler.plugins.push(new webpack.optimize.UglifyJsPlugin({
  minimize: true,
  sourceMap: false,
  output: { comments: false }
}))

module.exports = compiler
