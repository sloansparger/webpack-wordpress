import Vue from 'vue'

module.exports = document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('capabilities')) {
    var testing = new Vue({
      el: '#app',
      data: {
        slideNumber: 1,
        trainingNumber: 1,
        modalOpen: false,
        activeModal: '',
        currentTitle: 'Nothing has changed.',
        currentDescription: 'Do your freaking job sloan...',
        currentIncludes: 'Are you even a developer? Like, uh?',
        currentIndex: 1,
        isFirstIndex: false,
        isLastIndex: false,
      },
      methods: {
        showSlide: function(newSlideNum) {
          this.slideNumber = newSlideNum
        },
        showTraining: function(newTrainingNum) {
          this.trainingNumber = newTrainingNum
        },
        openModal: function(newTitle, newDescription, newRequirement, newIndex) {
          this.modalOpen = true
          this.currentTitle = newTitle
          this.currentDescription = newDescription
          this.currentIncludes = newRequirement.split('\n\n')
          this.currentIndex = newIndex

          if(this.currentIndex === 1) {
            this.isFirstIndex = true
            this.isLastIndex = false
          } else if(this.currentIndex === 8) {
            this.isFirstIndex = false
            this.isLastIndex = true
          } else {
            this.isFirstIndex = false
            this.isLastIndex = false
          }
        },
        closeModal: function() {
          this.modalOpen = false
          this.currentTitle = ""
          this.currentDescription = ""
          this.currentIncludes = ""
        },
        prevModal: function() {
          var prevIndex = parseInt(this.currentIndex) - 1
          var prevIndex = document.getElementById('modal' + prevIndex)
          if (prevIndex) prevIndex.click()
        },
        nextModal: function() {
          var nextIndex = parseInt(this.currentIndex) + 1
          var nextModal = document.getElementById('modal' + nextIndex)
          if (nextModal) nextModal.click()
        }
      }
    })

    window.vue = testing
  }
})
