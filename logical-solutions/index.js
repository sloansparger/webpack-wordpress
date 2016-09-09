require('./js/dev-env')
require('./styles/index.sass')
import Vue from 'vue'

document.addEventListener('DOMContentLoaded', function() {
  new Vue({
    el: '#capabilities',
    data: {
      slideNumber: 1
    },
    methods: {
      showSlide: function(newSlideNum) {
        this.slideNumber = newSlideNum
      }
    }
  })
})
