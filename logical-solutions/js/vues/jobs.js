import { get } from 'axios'
import Vue from 'vue'

module.exports = document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('jobs')) {
    const jobsVue = new Vue({
      el: '#jobs',
      methods: {
        holla: () => {
          console.log('ahhhhhhh');
        }
      }
    })

  }
})
