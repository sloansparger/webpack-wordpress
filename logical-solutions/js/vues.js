import Vue from 'vue'
import timeago from 'timeago.js'

Vue.filter('timeago', t => timeago().format(new Date(t)))

var inView

document.addEventListener('DOMContentLoaded', function() {
  inView = require('in-view')
})

var app = {
  el: '#app',
  data: {
    mobileNavOpen: false,
    slideNavActive: false
  },
  ready: function() {
    inView('.page-hero')
      .on('enter', () => this.deactivateSlideNav())
      .on('exit', () => this.activateSlideNav())
  },
  methods: {
    openMobileNav: function() {
      this.mobileNavOpen = true
    },
    closeMobileNav: function() {
      this.mobileNavOpen = false
    },
    activateSlideNav: function() {
      this.slideNavActive = true
    },
    deactivateSlideNav: function() {
      this.slideNavActive = false
    }
  }
}


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
  var vueApp = new Vue(vueObj)
  console.log(vueApp);
}

function mergeAndCreateVues(vueToMerge) {
  var modifiedApp = Object.assign({}, app)
  Object.assign(modifiedApp.data, vueToMerge.data)
  Object.assign(modifiedApp.methods, vueToMerge.methods)
  createVue(modifiedApp)
}
