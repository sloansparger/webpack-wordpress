module.exports = {
  data: {
    catFilter: 'all',
    modalOpen: false,
    activeModal: '',
    currentTitle: '',
    currentRequirements: [],
    currentDescription: '',
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
    }
  }
}
