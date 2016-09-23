var inView
document.addEventListener('DOMContentLoaded', function() {
  inView = require('in-view')
  console.log(inView)
})

module.exports = {
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
