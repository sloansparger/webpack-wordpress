module.exports = {
  el: '#app',
  data: {
    mobileNavOpen: false
  },
  ready: function() {

  },
  methods: {
    openMobileNav: function() {
      this.mobileNavOpen = true
    },
    closeMobileNav: function() {
      this.mobileNavOpen = false
    }
  }
}
