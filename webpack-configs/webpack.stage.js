const compiler = require('../webpack.config.js').compiler

compiler.devtool = 'eval-source-map'

module.exports = compiler
