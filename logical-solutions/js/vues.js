import Vue from 'vue'
import timeago from 'timeago.js'
timeago(Date.now())
require('./vues/capabilites')
require('./vues/jobs')

Vue.filter('reverse', function (value) {
  return value.split('').reverse().join('')
})

Vue.filter('timeago', t => timeago().format(new Date(t)))
