import Vue from 'vue'
import timeago from 'timeago.js'

Vue.filter('timeago', t => timeago().format(new Date(t)))

var app = require('./vues/index')

document.addEventListener('DOMContentLoaded', function() {
  if(document.getElementById('home')) {
    mergeAndCreateVues(require('./vues/home'))
  }
  else if(document.getElementById('jobs')) {
    mergeAndCreateVues(require('./vues/jobs'))
  }
  else if(document.getElementById('capabilities')) {
    mergeAndCreateVues(require('./vues/capabilities'))
  }
  else if(document.getElementById('products')) {
    mergeAndCreateVues(require('./vues/products'))
  }
  else {
    createVue(app)
  }
})

function createVue(vueObj) {
  new Vue(vueObj)
}

function mergeAndCreateVues(vueToMerge) {
  var modifiedApp = Object.assign({}, app)
  Object.assign(modifiedApp.data, vueToMerge.data)
  Object.assign(modifiedApp.methods, vueToMerge.methods)
  createVue(modifiedApp)
}
