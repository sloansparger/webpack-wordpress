module.exports = {
  data: {
    modalOpen: false,
    currentTitle: '',
    currentImage: '',
  },
  methods: {
    closeModal: function() {
      var descriptionArea = document.querySelector('.product--modal-description-area')
      this.modalOpen = false
      this.currentTitle = ''
      this.currentImage = ''
      descriptionArea.innerHTML = ''
    },
    openModal: function(title, image, description) {
      var descriptionArea = document.querySelector('.product--modal-description-area')
      this.modalOpen = true
      this.currentTitle = title
      this.currentImage = image
      descriptionArea.innerHTML = description
    },
    openMobileModal: function(title, image, description) {
      if (window.innerWidth <= 768) {
        this.openModal(title, image, description)
      }
    }
  }
}
