import Vue from 'vue'

module.exports = document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('jobs')) {
    const jobsVue = new Vue({
      el: '#app',
      data: {
        catFilter: 'all',
        modalOpen: false,
        activeModal: '',
        currentTitle: 'You are fired!',
        currentRequirements: ['one', 'two', 'three'],
        currentDescription: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia consectetur repellat fuga. Repudiandae doloremque eius libero vitae nihil nobis magni aspernatur quis minus sapiente, consectetur adipisci nam sint neque expedita.',
      },
      methods: {
        changeCatFilter: function(filter) {
          this.catFilter = filter
        },
        matchesCurrentFilter: function(category) {
          if (this.catFilter === 'all' || this.catFilter === category) return true
          else return false
        },
        isCurrentFilter: function(category) {
          if (this.catFilter === category) return true
          else return false
        },
        openModal: function(newTitle, newDescription, newRequirement) {
          this.modalOpen = true
          this.currentTitle = newTitle

          if (newRequirement !== '') {
            this.currentRequirements = newRequirement.trim().split('\n')
          } else {
            this.currentRequirements = false
          }

          // text area creates three newline characters, convert to break tags
          var description = '<p>' + newDescription.split('\n\n').join('<br /><br />') + '</p>'
          var jobDescriptionElem = document.getElementById('jobDescription')
          jobDescriptionElem.innerHTML = ''
          // inserts html at begining of #jobDescription
          jobDescriptionElem.insertAdjacentHTML('afterbegin', description)
        },
        closeModal: function() {
          this.modalOpen = false
        },
      }
    })
  }
})
