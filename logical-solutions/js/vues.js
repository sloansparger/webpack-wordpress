import Vue from 'vue'
import timeago from 'timeago.js'
timeago(Date.now())
require('./vues/capabilites')
require('./vues/jobs')

Vue.filter('reverse', function (value) {
  return value.split('').reverse().join('')
})

Vue.filter('timeago', t => timeago().format(new Date(t)))


const modal = Vue.extend({
  props: ['title'],
  template: `
    <div class="repeatable-building-bg">
      <div class="container relative">
        <div class="modal--exit"></div>
      </div>
      <div class="modal--content-height-set">
        <slot></slot>
      </div>
    </div>
    `
})

Vue.component('modal', modal)
