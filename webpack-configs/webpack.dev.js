const DashboardPlugin = require('webpack-dashboard/plugin')
const compiler = require('../webpack.config.js').compiler
const THEME_NAME = require('../webpack.config.js').THEME_NAME

const proxyConfig = {
  "target": {
    "host": "localhost",
    "protocol": 'http:',
    "port": 8888
  },
  ignorePath: false,
  changeOrigin: true,
  secure: false
}

compiler.devtool = 'eval-source-map'
compiler.module.loaders.push({
  test: /\.js$/,
  loader: 'babel',
  exclude: /node_modules/,
  query: {
    presets: ['es2015']
  },
})
compiler.plugins.push(new DashboardPlugin())
compiler.devServer = {
  contentBase: './wordpress/wp-content/themes/' + THEME_NAME + '/assets',

  proxy: {
    '/': proxyConfig,
    '**': proxyConfig,
  },
}

module.exports = compiler
