import Vue from 'vue'

Vue.filter('reverse', function (value) {
  return value.split('').reverse().join('')
})

Vue.filter('timeago', t => timeago().format(new Date(t)))
