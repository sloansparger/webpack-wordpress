import Vue from 'vue'
import timeago from 'timeago.js'

Vue.filter('timeago', t => timeago().format(new Date(t)))

Vue.filter('epochToShortDate', function(timestamp) {
  var trainingDate = new Date(timestamp)
  var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
  var day = weekday[trainingDate.getDay()]
  var date = trainingDate.getDate()
  var month = trainingDate.getMonth() + 1
  var year = trainingDate.getFullYear()
  return `${day}, ${month}.${date}.${year}`
})

Vue.filter('epochToFullDate', function(timestamp) {
  var trainingDate = new Date(timestamp)
  var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
  var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
  var day = weekday[trainingDate.getDay()]
  var date = trainingDate.getDate()
  var month = months[trainingDate.getMonth()]
  var year = trainingDate.getFullYear()
  return `${day}, ${month} ${date}, ${year}`
})

Vue.filter('epochToMMMMDDYYYY', function(timestamp) {
  var trainingDate = new Date(timestamp)
  var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
  var date = trainingDate.getDate()
  var month = months[trainingDate.getMonth()]
  var year = trainingDate.getFullYear()
  return `${month} ${date}, ${year}`
})

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
    // sticky nav
    inView('.page-hero')
      .on('enter', () => this.deactivateSlideNav())
      .on('exit', () => this.activateSlideNav())

    // slide to links
    var subnavLinks = document.querySelectorAll('.current-menu-item .sub-menu a')

    subnavLinks.forEach(function(a) {
      a.onclick = function(e) {
        e.preventDefault()
        const hash = e.target.href.split('#')[1]
        const elem = document.getElementById(hash)
        jQuery('html, body').animate({
          scrollTop: elem.offsetTop - 80
        }, 1000);
      }
    })
  },
  methods: {
    openMobileNav: function() {
      this.mobileNavOpen = true
    },
    closeMobileNav: function() {
      this.mobileNavOpen = false
    },
    activateSlideNav: function() {
      console.log('activateSlideNav');
      this.slideNavActive = true
    },
    deactivateSlideNav: function() {
      console.log('deactivateSlideNav');
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
  else if(document.getElementById('training')) {
    mergeAndCreateVues(require('./vues/training'))
  }
  else {
    createVue(app)
  }
})

function createVue(vueObj) {
  var vueApp = new Vue(vueObj)
}

function mergeAndCreateVues(vueToMerge) {
  var modifiedApp = Object.assign({}, app)
  Object.assign(modifiedApp.data, vueToMerge.data)
  Object.assign(modifiedApp.methods, vueToMerge.methods)
  if (vueToMerge.ready) {
    modifiedApp.ready = vueToMerge.ready
  }
  createVue(modifiedApp)
}
